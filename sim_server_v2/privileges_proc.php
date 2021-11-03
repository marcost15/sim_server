<?php
require_once 'init.php';
modulo("USER");




bd_privileges_update($_POST);

$s->assign('texto',_('Los privilegios se actualizaron correctamente'));
$s->assign('destino','privileges.php');
$s->display('alert.tpl');
