<?php
require_once 'init.php';
modulo("USER");
$s->assign('name', $CFG['name']);
$s->assign('titulo', _('Privileges'));

$t_privilegios = [];
foreach (bd_privileges_all() as $p) {
	$t_privilegios[$p['module']][$p['permission']] = 'checked';
}

$p = bd_users_privileges();
$np = count($p);
$s->assign('t_p', $t_privilegios);
$s->assign('m', $CFG['modulo']);
$s->assign('p', $p);
$s->assign('np', $np);
$s->display('privileges.tpl');
