<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('All SIM'));


$s->display('barebones.tpl');
