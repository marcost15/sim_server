<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Privileges'));

$t_privilegios =[];
foreach (bd_privileges_all() as $p) {
	$t_privilegios[$p['module']][$p['permission']] = 'checked';
}
$s->assign('t_p', $t_privilegios);

$s->assign('m',$CFG['modulo']);
$s->assign('p',bd_users_privileges());

$s->display('privileges.tpl');
