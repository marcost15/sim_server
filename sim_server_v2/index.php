<?php
require_once 'init.php';

$_SESSION = [];

$s->assign('name', $CFG['name']);
$s->assign('zona', date_default_timezone_get());
$s->assign('zonas', array_keys( generate_timezone_list()));

$s->assign('cab','<link href="css/login.css" rel="stylesheet">');
$s->display('index.tpl');
