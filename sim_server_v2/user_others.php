<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Manage Other'));

$s->display('user_others.tpl');
