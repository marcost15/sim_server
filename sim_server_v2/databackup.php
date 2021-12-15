<?php
require_once 'init.php';
modulo("");
$s->assign('titulo', _('Data Backup'));


$s->display('barebones.tpl');
