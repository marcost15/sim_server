<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Logs'));


$s->display('barebones.tpl');
