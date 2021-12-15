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
/**
 * Establece la codificación de las consultas a la bd.
 */
$m->set_charset('utf8');

/**
 * Ejecuta la instrucción sql y devuelve el resultado.
 *
 * @param  string $sql
 * @return mixed  Resultado de la ejecución de la instrucción sql.
 */
function sql($sql){
	global $m;
	$resultado = $m -> query($sql);
    if ( $resultado === FALSE ) {
        printf( "(repo) %s\n", $m->error );
        exit;
    }
    return $resultado;
}


/**
 * Devuelve el valor solicitado por la instrucción sql o una cadena vacía si no encuentra nada
 *
 * @param  string $sql Instrucción SELECT que solicita un valor.
 * @return mixed  Valor solicitado en la instrucción sql o vacío si no encuentra nada.
 */
function sql2value($sql) {
    global $m;
    if ( !$res = $m -> query($sql) ) {
        echo sqlerror( $sql,$m -> error );
        return '';
    }
    $p = $res -> fetch_array(MYSQLI_NUM);
    if ($p != null) {
        return $p[0];
    } else {
        return '';
    }
}

/**
 * Devuelve los datos solicitados de la primera fila que coincida con la instrucción sql.
 *
 * @param  string $sql Sentencia SELECT que solicita los datos de una fila de una tabla.
 * @return mixed       Los datos en un array.
 */
function sql2row($sql) {
	global $m;
    if ( !$res = $m -> query($sql) ) {
        echo sqlerror( $sql,$m -> error );
        exit;
    }
    return $res -> fetch_array(MYSQLI_ASSOC);
}

/**
 * Devuelve un array asociativo con todos los datos solicitados por la instrucción sql.
 *
 * @param  string $sql  Sentencia SELECT que solicita los datos.
 * @return array        Array con los resultados.
 */
function sql2array($sql) {
    global $m;
    if ( !$res = $m -> query($sql) ) {
      echo sqlerror( $sql, $m -> error );
      exit;
    }
    $r=array();
    while( $temp=$res->fetch_array(MYSQLI_ASSOC) ) {
       $r[]=$temp;
    }
    return $r;
}


/**
 * Verifica si el usuario logueado tiene acceso al módulo.
 *
 * @param      string  $modulo  Módulo al que se quiere acceder
 * @return     bool    (true si tiene acceso, false en cualquier otro caso)
 */
function bd_privileges($modulo){
    if ( !isset($_SESSION['usuario']) || !isset($_SERVER['HTTP_REFERER']) ){
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
 * Devuelve un array con los datos del usuario.
 * 
 * @param  [string] $login Login. Si no se coloca se devuelven todos los usuarios.
 * @return [array]         Datos del usuario o de los usuarios.
 */
function bd_users_datos($login = null) {
    $and = ($login == null)?'':"AND a.id = '{$login}'";
    $sql="
        SELECT 
            a.id, a.name, a.permission, a.info, GROUP_CONCAT(DISTINCT b.module SEPARATOR ', ') module 
        FROM 
            users a, privileges b
        WHERE
            a.permission = b.permission
            {$and}
        GROUP BY a.id;
        ";
    if ($login == null) {
        $salida = sql2array($sql);
    } else {
        $salida = sql2row($sql);
    }
    return $salida;
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

function bd_users_add($d){
    $d['passwd'] = password_hash($d['passwd'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(
        id,
        name,
        permission,
        password,
        info
    )
    VALUES('{$d['login']}', '{$d['name']}', '{$d['level']}', '{$d['passwd']}', '{$d['remark']}');";
    sql($sql);

}