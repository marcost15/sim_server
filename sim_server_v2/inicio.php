<?php
require_once 'init.php';
modulo("INIT");

$s->assign('name', $CFG['name']);
$s->display('inicio.tpl');
