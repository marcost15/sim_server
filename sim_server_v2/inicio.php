<?php
require_once 'init.php';
modulo("INIT");



$sysversion = PHP_VERSION;
$sysos = $_SERVER['SERVER_SOFTWARE'];
$max_upload =  ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
$ifcookie = isset($_COOKIE)? "SUCCESS" : "FAIL";

$s->assign('name', $CFG['name']);
$s->assign('sysversion', $sysversion);
$s->assign('sysos',$sysos);
$s->assign('max_upload',$max_upload);
$s->assign('ifcookie', $ifcookie);
$s->display('inicio.tpl');
