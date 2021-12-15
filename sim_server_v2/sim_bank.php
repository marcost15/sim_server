<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Sim Bank'));


$s->display('barebones.tpl');
