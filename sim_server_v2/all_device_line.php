<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('All Device Line'));


$s->display('barebones.tpl');
