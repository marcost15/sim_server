<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Change Password'));


$s->display('user_password.tpl');
