<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Sys'));


$s->display('barebones.tpl');
