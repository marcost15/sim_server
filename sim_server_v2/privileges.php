<?php
require_once 'init.php';
modulo("USER");


$s->assign('m',$CFG['modulo']);
$s->assign('p',bd_users_privilegios());
$s->display('privileges.tpl');
v($CFG);
