<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Manage Users'));
$s->assign('name', _('Manage Users'));

$d = [];
if ($_SESSION['usuario']['permission'] == 'ADMIN') {
	$d = bd_users_datos();
} else {
	$d[] = bd_users_datos($_SESSION['usuario']['id']);
}

$s->assign('pie', '<script src="./js/user_others.js"></script>');
$s->assign('d', $d);
$s->display('user_others.tpl');
