<?php
require_once 'init.php';
modulo("CONFIG");
$s->assign('titulo', _('Group Configuration'));


$s->display('barebones.tpl');
