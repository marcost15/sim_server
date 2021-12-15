<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Scheduler'));


$s->display('barebones.tpl');
