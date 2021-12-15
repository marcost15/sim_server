<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Human'));


$s->display('barebones.tpl');
