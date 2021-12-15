<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Call Record'));


$s->display('barebones.tpl');
