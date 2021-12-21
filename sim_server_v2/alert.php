<?php
require_once 'init.php';



$s->assign('pie', script_redirect($_GET['destino'], 5));
$s->assign('titulo', _('Alert'));
$s->assign('name', 'Alert');
$s->assign('text', $_GET['texto']);
$s->assign('target', $_GET['destino']);

$s->display('alert.tpl');
