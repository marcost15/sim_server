<?php
$m = new mysqli(
    $CFG['bd_host'],
    $CFG['bd_login'],
    $CFG['bd_pass'],
    $CFG['bd']
);

if ($m->connect_errno) {
    printf("Falló conexión: %s\n", $mysqli->connect_error);
    exit();
}

$m->set_charset('utf8');














/*********************
 users(
    id         (varchar(50)),
    name       (varchar(128)),
    permission (enum('ADMIN','NORMAL')),
    password   (varchar(255)),
    info       (varchar(255))
    )
 ************************/

/**
 * Verifica si el usuario logueado tiene acceso al módulo.
 *
 * @param      string  $modulo  Módulo al que se quiere acceder
 *
 * @return     bool    (true si tiene acceso, false en cualquier otro caso)
 */
function bd_privileges($modulo){
	if ( !isset($_SESSION['usuario']) ){
		return false;
	}

	if ( !isset($_SERVER['HTTP_REFERER']) ){
		return false;
	}

	$sql = "
		SELECT COUNT(*)
		FROM privileges
		WHERE module LIKE '{$modulo}'
		AND permission = '{$_SESSION['usuario']['permission']}';
	";

	if (sql2value($sql) == 1) {
		return true;
	}
	return false;
}

/**
 * Devuelve la lista de privilegios disponibles para el sistema
 *
 * @return [array] Array con los permisos que tiene el sistema
 *
 */
function bd_users_privileges(){
    $sql="SHOW COLUMNS FROM users";
    $d=sql2array($sql);
    $campos = '';
    foreach ($d as $dd) {
        if ($dd['Field'] =='permission') {
            $campos = $dd['Type'];
            break;
        }
    }
    $campos = explode("','", substr($campos,6,-2));
    sort($campos);
    return $campos;
}





/**
 * Devuelve todos los permisos asignados
 * @return array con los permisos activos
 */
function bd_privileges_all(){
    $sql = "SELECT id, module, permission FROM privileges;";
    return sql2array($sql);
}

/**
 * Actualiza la tabla de privilegios
 * @param  [array] $d Trae los pares modulo@nivel
 * @return [none]    None
 */
function bd_privileges_update($d){
    $perm_act = sql2array("SELECT CONCAT(module,'@',permission) a FROM privileges");
    $activos = [];
    foreach ($perm_act as $value) {
        $activos[$value['a']]='on';
    }

    $agregar = array_diff_assoc($d,$activos);
    $eliminar = [];
    foreach ($activos as $key=>$value) {
        if (!array_key_exists($key, $d)) {
            $eliminar[$key] = 'on';
        }
    }

    if (count($agregar) > 0){
        $salida = [];
        foreach ($agregar as $np => $value) {
            $dd=explode('@',$np);
            $salida[]="(NULL, '{$dd[0]}', '{$dd[1]}')";
        }
        $sql_agregar =
            'INSERT INTO privileges(id, module, permission) VALUES '
            . join(', ', $salida)
            . ';';
    } else {
        $sql_agregar = '';
    }

    $salida = [];
    if (count($eliminar)>0) {
        foreach ($eliminar as $np => $value) {
            $dd=explode('@',$np);
            $salida[]="DELETE FROM privileges WHERE module = '{$dd[0]}' AND permission = '{$dd[1]}'";
        }
    }

    if ($sql_agregar!='') {
        sql($sql_agregar);
    }
    foreach ($salida as $sql0) {
        sql($sql0);
    }
}
















/**
 * Devuelve un array con los datos del usuario
 * @param  [string] $login [Login.]
 * @return [array]        [Datos del usuario]
 */
function bd_users_datos($login) {
    $sql="
        SELECT id, name, permission, info email
        FROM users
        WHERE id LIKE '{$login}'
        #    or email LIKE '{$login}'"
        ;
    $salida = sql2row($sql);
    return $salida;
}

function bd_usuario_datos( $texto = null ) {
  $where = '';
  if ($texto != null) {
    $where = "AND (
        nombre LIKE '%{$texto}%'
        OR id LIKE '%{$texto}%'
        )
    ";
  }

  $sql = "
    SELECT
      id, nombre, nivel, email, activo
    FROM
      users
    WHERE 1
    {$where}
  ";
  return sql2array($sql);
}


function bd_usuario_datos_por_id($id) {
  $sql = "
    SELECT
      id, nombre, nivel, email, activo
    FROM
      users
    WHERE id = '{$id}'
  ";
  return sql2row($sql);
}


























































##################################### Funciones generales

define("R2_REGEX","1");
/**
Funcion para limpiar cualquier tipo de texto basura
en algún campo, evitando inyecciones de codigo
Los parametros son:
*Texto: Es el texto ingresado
*Tipo: Uno de los siguientes: email
*Expresión Regular
*Regex: Si el parametro tipo es una E.R, entonces este campo
debe tener el valor R2_REGEX
*/
function limpiar_texto($texto,$tipo,$regex=null)
{
    $exprs = [
        "email"=>"[a-zA-Z\d._%\+\-]+@[A-Za-z\d.\-]+\.[A-Za-z]{2,64}",
        "numero"=>"[\d]+",
        "buscar"=>"[a-zA-Z\dáéíóúÁÉÍÓÚÑñÜüöÖÄäËëÏï\s]+",
    ];

    if ($regex==R2_REGEX)
    {
        $patron = $tipo;
    }  else {
        $patron = $exprs[$tipo];
    }

    preg_match_all('/'.$patron.'/', $texto, $salida);
    $texto =trim ( join ($salida[0] ));

    return $texto;
}


function sql($sql){
	global $m;
	$resultado = $m->query($sql);
    if ( $resultado === FALSE ) {
        printf( "(repo) %s\n", $m->error );
        exit;
    }
    return $resultado;
}

function sqlerror($sql,$error){
    return "<html><head></head><body><ul>"
   ."<li>Instruccion SQL:<br /><pre>$sql</pre></li>"
   ."<li>Error SQL: <font color='red'>$error</font></li>"
   ."</ul></body></html>";
}

function sql2array($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $temp=$res->fetch_array(MYSQLI_ASSOC) ) {
       $r[]=$temp;
    }
    return $r;
}

function sql2clavevalor($tabla, $c1,$c2, $condicion=1 ){
	global $m;
    $sql= "
        SELECT
            $c1 AS clave,
            $c2 AS valor
        FROM $tabla
        WHERE
            $condicion
        ";
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $temp=$res->fetch_array(MYSQLI_ASSOC) ) {
       $r[$temp['clave']]=$temp['valor'];
    }
    return $r;
}

function sql2row($sql) {
	global $m;
    if ( !$res=$m->query($sql) ) {
        echo sqlerror( $sql,$m->error );
        exit;
    }
    return $res->fetch_array(MYSQLI_ASSOC);
}

function sql2value($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
        echo sqlerror( $sql,$m->error );
        return '';
    }
    $p=$res->fetch_array(MYSQLI_NUM);
    if ($p!=null) {
        return $p[0];
    } else {
        return '';
    }
}

function sql2options($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=array();
    while( $l=$res->fetch_array(MYSQLI_NUM) ) {
       $r[$l[0]]=$l[1];;
    }
    return $r;
}

function sql2ids($sql) {
    global $m;
    if ( !$res=$m->query($sql) ) {
      echo sqlerror( $sql,$m->error );
      exit;
    }
    $r=[];
    while( $l=$res->fetch_array(MYSQLI_NUM) ) {
       $r[]=$l[0];;
    }
    return $r;
}


function bd_obt_lista_privilegios(){
    $sql="SHOW COLUMNS FROM users";
    $d=sql2array($sql);
    $campos = '';
    foreach ($d as $dd) {
        if ($dd['Field'] =='nivel') {
            $campos = $dd['Type'];
            break;
        }
    }
    $campos = explode("','", substr($campos,6,-2));
    sort($campos);
    return $campos;
}








########################################### Funciones de la base de datos





function bd_notas_sin_vencer(){
    $sql = "
        SELECT id, texto, f_creado
        FROM notas
        WHERE f_cancelado IS null
        ORDER BY f_creado DESC;
    ";
    return sql2array($sql);
}

function bd_notas_cancelar($id, $usuario){
    $sql ="
        UPDATE notas
        SET
            f_cancelado = NOW(), usuario_id = '{$usuario}'
        WHERE
            id = $id;
    ";
    sql($sql);
}

function bd_tasas_datos($n=10) {
    $sql = "
        SELECT
            tasa, f_tasa
        FROM
            tasas
        ORDER BY
            f_tasa DESC
        LIMIT
            {$n}
    ";
    return sql2array($sql);
}

function bd_tasas_agregar($monto) {
    if ($monto > 0) {
        $sql = "
            INSERT INTO
                tasas (id,tasa,f_tasa, usuario_id)
            VALUES (null, '{$monto}', current_timestamp(), '{$_SESSION['usuario']['id']}');
        ";
        return sql($sql);
    }
    else
    {
        return -1;
    }
}


function bd_productos_existe($id){
    if (sql2value("SELECT COUNT(*) FROM productos WHERE id LIKE '{$id}';") > 0) {
        return true;
    }
    return false;
}



function bd_productos_datos0() {
  $sql = "
    SELECT
      id, nombre, unidad, categoria,
      p_compra, p_venta, existencia,
      minimo, detalle
    FROM
      productos
    WHERE
    	existencia > 0;
  ";
  return sql2array($sql);

}


/**
 * Devuelve los datos de los productos solicitados
 * @param  string $texto        Nombre o parte del nombre a buscar
 * @return array                Datos que coinciden con el filtro
 */
function bd_productos_datos($texto = null) {
  $where = '';
  if ($texto != null) {
    $where = "AND (
        nombre LIKE '%{$texto}%'
        OR id LIKE '%{$texto}%'
        OR categoria LIKE '%{$texto}%'
        )
    ";
  }

  $sql = "
    SELECT
      id, nombre, unidad, categoria,
      p_compra, p_venta, existencia,
      minimo, detalle
    FROM
      productos
    WHERE 1
    {$where}
  ";
  return sql2array($sql);
}


function bd_clientes_datos_por_id($id) {
  $sql = "
    SELECT
      id, nombre, direccion, telf
    FROM
      clientes
    WHERE id = '{$id}'
  ";
  return sql2row($sql);
}






function bd_productos_datos_por_id($id) {
  $sql = "
    SELECT
      id, nombre, unidad, categoria,
      p_compra, p_venta, existencia,
      minimo, detalle
    FROM
      productos
    WHERE id = '{$id}'
  ";
  return sql2row($sql);
}


function bd_productos_categorias() {
    $sql = "SELECT DISTINCT categoria FROM  productos ORDER BY categoria ASC";
    return sql2array($sql);
}

function bd_productos_unidades() {
    return sql2array("SELECT DISTINCT unidad FROM productos ORDER BY unidad ASC;");
}

/**
 * [bd_productos_modificar description]
 * @param  [type] $d [description]
 * @return [type]    [description]
 */
function bd_productos_modificar($d){
    $sql = "
        UPDATE
            productos
        SET
            nombre = '{$d['nombre']}',
            categoria = '{$d['categoria']}',
            p_compra = '{$d['p_compra']}',
            p_venta = '{$d['p_venta']}',
            minimo = '{$d['minimo']}',
            detalle = '{$d['detalle']}'
        WHERE
            id = '{$d['id']}';
    ";
    sql($sql);
}

function bd_usuario_modificar($d){
    $d['correo'] = $d['email'] .  '@' . $d['server'];
    if ($d['email']=='' or $d['server']=='' ) { $d['correo'] = ''; }

    $sql = "
        UPDATE
            users
        SET
            nombre = '{$d['nombre']}',
            email = '{$d['correo']}',
            nivel = '{$d['nivel']}',
            activo = '{$d['activo']}'
        WHERE
            id = '{$d['id']}';
    ";
    sql($sql);

    if($d['clave'] != ''){//cambio de clave
        $d['clave'] = password_hash($d['clave'],PASSWORD_DEFAULT);
        $sql = "
            UPDATE
                users
            SET
                clave = '{$d['clave']}'
            WHERE
                id = '{$d['id']}';
        ";
        sql($sql);
    }
}

function bd_clientes_modificar($d){
    if (trim($d['nombre'])=='') {
        return false;
    }

    if (trim($d['direccion'])=='') {
        return false;
    }

    $sql = "
        UPDATE
            clientes
        SET
            nombre = '{$d['nombre']}',
            telf = '{$d['telf']}',
            direccion = '{$d['direccion']}'
        WHERE
            id = '{$d['id']}';
    ";

    sql($sql);
}


/**
 * [bd_productos_agregar description]
 * @param  [type] $d [description]
 * @return [type]    [description]
 */
function bd_productos_agregar($d){
    $sql = "
        INSERT INTO productos (
            id,
            nombre,
            unidad,
            categoria,
            p_compra,
            p_venta,
            existencia,
            minimo,
            detalle
            ) VALUES (
            '{$d['id']}',
            '{$d['nombre']}',
            '{$d['unidad']}',
            '${d['categoria']}',
            ${d['p_compra']},
            ${d['p_venta']},
            ${d['existencia']},
            ${d['minimo']},
            '{$d['detalle']}'
        );
    ";
    return sql($sql);
}



function bd_productos_fact_compra(){
    if (isset($_SESSION['fact_ent'])) {
        foreach ($_SESSION['fact_ent'] as $v) {
            $sql = "
                UPDATE
                    productos
                SET
                    p_compra = {$v['p_compra']},
                    p_venta = {$v['p_venta']},
                    existencia = existencia + {$v['existencia']},
                    minimo = {$v['minimo']}
                WHERE
                    id = '{$v['id']}'
            ";
            sql($sql);
        }
        $_SESSION['fact_ent']=[];
    }
}

function bd_productos_fact_venta(){

    sql("INSERT INTO facturasv(id, cliente_id) VALUES ('','{$_POST['id']}')");
    if (isset($_SESSION['fact_sal'])) {
        foreach ($_SESSION['fact_sal'] as $v) {
            $sql = "
                UPDATE
                    productos
                SET
                    existencia = existencia + {$v['existencia']},
                WHERE
                    id = '{$v['id']}'
            ";
            sql($sql);
        }
        $_SESSION['fact_sal']=[];
    }
}












function bd_users_contar(){
    return sql2value("SELECT COUNT(*) FROM users");
}




function paginar($totalpaginas,$rango,$pagina_actual=1)
    {
        $i       = 0;
        $rgo     = $rango;
        $paginas = array();

        do{
            $paginas[] = $i;
            $i+=$rgo;
        }while ( $i < $totalpaginas);

        return $paginas;
    }

function bd_users_datos2($inicio, $cantidad, $orden='id', $nivel)
{
return sql2array("SELECT id, correo
    FROM users
    ORDER BY $orden ASC#
    LIMIT $inicio,$cantidad
    ");
}

function bd_users_datos3($campos, $palabras,$cantidad){
$miscampos = explode(',', $campos);
foreach ($miscampos as $key => $value)
{
    $miscampos[$key] .= " LIKE '%{$palabras}%'";
}

$condicion = implode(' OR ', $miscampos);
return sql2array("SELECT id, correo FROM users
    WHERE ($condicion )
        LIMIT $cantidad
    ");
}


function bd_users_eliminar($id)
{
    $sql = "
        DELETE FROM users
        WHERE id = '{$id}'
        ";
    sql($sql);
    return $id;
}


function bd_users_modificar($usuario)
{
    $sql = "
        UPDATE users SET
            id = '{$usuario['id_new']}',
            correo = '{$usuario['correo']}'
        WHERE id = '{$usuario['id']}'
            ";
    sql($sql);
    return $d['id'];
}


function bd_users_modificar_clave($d)
{
    $id = $d[0];
    $hash = $d[1];
    $sql = "
        UPDATE users SET
            clave = '{$hash}'
        WHERE
            id = '{$id}'
    ";
    sql($sql);
    return $id;
}

function bd_usuario_existe($id){
       if (sql2value("SELECT COUNT(*) FROM users WHERE id LIKE '{$id}';;") > 0) {
        return true;
    }
    return false;

}


function bd_clientes_existe($id){
       if (sql2value("SELECT COUNT(*) FROM clientes WHERE id LIKE '{$id}';;") > 0) {
        return true;
    }
    return false;

}


function bd_clientes_agregar($d){
    $sql = "
        INSERT INTO clientes (id, nombre, direccion, telf)
        VALUES (
            '{$d['id']}',
            '{$d['nombre']}',
            '{$d['direccion']}',
            '{$d['telf']}'
    )";

    return sql($sql);
}


function bd_usuario_agregar($d){
    $d['clave'] = password_hash($d['clave'],PASSWORD_DEFAULT);

    $d['correo'] = $d['email'] .  '@' . $d['server'];
    if ($d['email']=='' or $d['server']=='' ) { $d['correo'] = ''; }

    $sql = "
        INSERT INTO users(id, clave, nombre, nivel, email,activo)
        VALUES (
            '{$d['id']}',
            '{$d['clave']}',
            '{$d['nombre']}',
            '{$d['nivel']}',
            '{$d['correo']},
            'SI'
        );
    ";
    return sql($sql);
}

function bd_clientes_datos_busq(){
    return sql2array("SELECT id, nombre FROM clientes ORDER BY nombre ASC");
}


function bd_clientes_datos( $texto = null ) {
  $where = '';
  if ($texto != null) {
    $where = "AND (
        nombre LIKE '%{$texto}%'
        OR id LIKE '%{$texto}%'
        )
    ";
  }

  $sql = "
    SELECT
      id, nombre, direccion, telf
    FROM
      clientes
    WHERE 1
    {$where}
  ";
  return sql2array($sql);
}



function bd_simcdr($type){
    $ops['line'] = ['line', 'device_line', 'line_name'];
    $ops['sim']  = ['sim',  'sim',         'sim_name'];

    $sql = "select id, {$ops[$type][0]}_name as name from {$ops[$type][1]} order by {$ops[$type][2]}";
    $opciones = sql2options($sql);
    $opciones[0] = _('All');
    ksort($opciones);
    return $opciones;
}


function bd_call_record_datos ($type, $start_time, $end_time, $wh){
    $sql="SELECT "
            .$type."_name AS name,
            SUM(duration) AS calltime,
            COUNT(*) AS totalcallcount,
            SUM(duration > 0) AS callcount,
            AVG(IF(duration >0,duration,NULL)) acd
        FROM
            call_record
        WHERE
            dir=0
            AND duration >= 0
            AND time BETWEEN '$start_time' AND '$end_time'
            $wh
            GROUP BY ".$type."_name";
            return sql2array($sql);
}
