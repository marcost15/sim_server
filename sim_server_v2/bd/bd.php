<?php

/**
 * Conexión
 */
$m = new mysqli($CFG['bd_host'], $CFG['bd_login'], $CFG['bd_pass'], $CFG['bd']);

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
function sql($sql) {
	global $m;
	$resultado = $m->query($sql);
	if ($resultado === FALSE) {
		printf("(repo) %s\n", $m->error);
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
	if (!$res = $m->query($sql)) {
		echo sqlerror($sql, $m->error);
		return '';
	}
	$p = $res->fetch_array(MYSQLI_NUM);
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
	if (!$res = $m->query($sql)) {
		echo sqlerror($sql, $m->error);
		exit;
	}
	return $res->fetch_array(MYSQLI_ASSOC);
}

/**
 * Devuelve un array asociativo con todos los datos solicitados por la instrucción sql.
 *
 * @param  string $sql  Sentencia SELECT que solicita los datos.
 * @return array        Array con los resultados.
 */
function sql2array($sql) {
	global $m;
	if (!$res = $m->query($sql)) {
		echo sqlerror($sql, $m->error);
		exit;
	}
	$r = array();
	while ($temp = $res->fetch_array(MYSQLI_ASSOC)) {
		$r[] = $temp;
	}
	return $r;
}

/**
 * Ejecuta la instrucción sql y devuelve un array con id y valor.
 *
 * @param  string $sql Instrucción sql.
 * @return array.
 */
function sql2options($sql) {
	global $m;
	if (!$res = $m->query($sql)) {
		echo sqlerror($sql, $m->error);
		exit;
	}
	$r = [];
	while ($l = $res->fetch_array(MYSQLI_NUM)) {
		$r[$l[0]] = $l[1];
	}
	return $r;
}

/**
 * Verifica si el usuario logueado tiene acceso al módulo.
 *
 * @param      string  $modulo  Módulo al que se quiere acceder
 * @return     bool    (true si tiene acceso, false en cualquier otro caso)
 */
function bd_privileges($modulo) {
	if (!isset($_SESSION['usuario']) || !isset($_SERVER['HTTP_REFERER'])) {
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
	$and = ($login == null) ? '' : "AND a.id = '{$login}'";
	$sql = "
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
function bd_privileges_all() {
	$sql = "SELECT id, module, permission FROM privileges;";
	return sql2array($sql);
}

/**
 * Devuelve la lista de privilegios disponibles para el sistema
 *
 * @return array Array con los permisos que tiene el sistema
 *
 */
function bd_users_privileges() {
	$sql = "SHOW COLUMNS FROM users";
	$d = sql2array($sql);
	$campos = '';
	foreach ($d as $dd) {
		if ($dd['Field'] == 'permission') {
			$campos = $dd['Type'];
			break;
		}
	}
	$campos = explode("','", substr($campos, 6, -2));
	sort($campos);
	return $campos;
}

/**
 * Agrega un usuario a la base de datos
 *
 * @param  array $d Datos del usuario a agregar
 * @return void
 */
function bd_users_add($d) {
	$sql = "INSERT INTO users(
        id,
        name,
        permission,
        password,
        info
    )
    VALUES('{$d['login0']}', '{$d['name']}', '{$d['level']}', '{$d['passwd']}', '{$d['remark']}');";
	sql($sql);
}

/**
 * Actualiza la tabla de privilegios
 * @param  array $d Trae los pares modulo@nivel
 * @return none     None
 */
function bd_privileges_update($d) {
	$perm_act = sql2array("SELECT CONCAT(module,'@',permission) a FROM privileges");
	$activos = [];
	foreach ($perm_act as $value) {
		$activos[$value['a']] = 'on';
	}

	$agregar = array_diff_assoc($d, $activos);
	$eliminar = [];
	foreach ($activos as $key => $value) {
		if (!array_key_exists($key, $d)) {
			$eliminar[$key] = 'on';
		}
	}

	if (count($agregar) > 0) {
		$salida = [];
		foreach ($agregar as $np => $value) {
			$dd = explode('@', $np);
			$salida[] = "(NULL, '{$dd[0]}', '{$dd[1]}')";
		}
		$sql_agregar =
		'INSERT INTO privileges(id, module, permission) VALUES '
		. join(', ', $salida)
			. ';';
	} else {
		$sql_agregar = '';
	}

	$salida = [];
	if (count($eliminar) > 0) {
		foreach ($eliminar as $np => $value) {
			$dd = explode('@', $np);
			$salida[] = "DELETE FROM privileges WHERE module = '{$dd[0]}' AND permission = '{$dd[1]}'";
		}
	}

	if ($sql_agregar != '') {
		sql($sql_agregar);
	}
	foreach ($salida as $sql0) {
		sql($sql0);
	}
}

/**
 * Actualiza el hash del usuario
 *
 * @param array $d Array con hash, remark y user
 * @return bool true si actualiza correctamente. false en otro caso.
 */
function bd_users_update_password($d) {
	$sql = "
        UPDATE
            users
        SET
            password = '{$d['hash']}',
            info = '{$d['remark']}'
        WHERE
            id = '{$d['user']}'
    ";
	vq($sql);
	return sql($sql);
}

function bd_users_update($d) {
	$sql = "
        UPDATE
            users
        SET
            name = '{$d['name']}',
            permission = '{$d['level']}',
            info = '{$d['remark']}'
        WHERE
            id = '{$d['login0']}'
    ";
	return sql($sql);
}

function bd_users_delete($id) {
	$sql = "DELETE FROM users WHERE id = '{$id}'";
	return sql($sql);
}

/**
 * Undocumented function
 *
 * @param  [type] $type
 * @return void
 */
function bd_simcdr($type) {
	$ops['line'] = ['line', 'device_line', 'line_name'];
	$ops['sim'] = ['sim', 'sim', 'sim_name'];

	$sql = "select id, {$ops[$type][0]}_name as name from {$ops[$type][1]} order by {$ops[$type][2]}";
	$opciones = sql2options($sql);
	$opciones[0] = _('All');
	ksort($opciones);
	return $opciones;
}

/**
 * Undocumented function
 *
 * @param  [type] $type
 * @param  [type] $start_time
 * @param  [type] $end_time
 * @param  [type] $wh
 * @return void
 */
function bd_call_record_datos($type, $start_time, $end_time, $wh) {
	$sql = "SELECT "
		. $type . "_name AS name,
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
            GROUP BY " . $type . "_name";
	return sql2array($sql);
}
