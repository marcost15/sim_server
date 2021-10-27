<?php
require_once 'init.php';
require_once('gettext.php');
$_SESSION = [];

$s->assign('name', $CFG['name']);
$s->assign('locale', $locale);
$s->assign('zona', $_GET['zona']?? date_default_timezone_get());
$s->assign('zonas', array_keys( generate_timezone_list()));
$s->assign('cab','<link href="css/login.css" rel="stylesheet">');

$s->display('index.tpl');
