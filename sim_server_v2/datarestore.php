<?php
require_once 'init.php';
modulo("DATA");
$s->assign('titulo', _('Data Restore'));


$s->display('datarestore.tpl');
