<?php
$CFG = parse_ini_file('config/config.ini.php', true);

if ($CFG['debug']) {
    require_once 'libs/dBug/dBug.php';
}

session_name($CFG['sesion_name']);
session_start();

$language = $CFG['locale'];
putenv('LC_ALL=' . $language);
setlocale(LC_ALL, $language);
bindtextdomain('messages', './locale');
textdomain('messages');

require_once 'bd/bd.php';
require_once 'libs/functions.php';
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
require_once 'vendor/fh/src/class.FormHandler.php';
$s = new smarty;
if ($CFG['debug']) {
    $s->assign('pag', $_SERVER['SCRIPT_FILENAME']);
}
