<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Barebones'));


$s->display('barebones.tpl');
