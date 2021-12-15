<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('RM Device'));


$s->display('barebones.tpl');
