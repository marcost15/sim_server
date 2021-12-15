<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('IMEI Database'));


$s->display('barebones.tpl');
