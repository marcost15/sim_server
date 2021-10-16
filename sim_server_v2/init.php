<?php
date_default_timezone_set('America/Caracas');
setlocale(LC_ALL,'es_ES');

//Eliminar en producción////////////
require_once 'libs/dBug/dBug.php';//
////////////////////////////////////

$CFG = parse_ini_file('config/config.ini.php', true);

session_name($CFG['sesion_name']);
session_start();

require_once 'bd/bd.php';
require_once 'libs/functions.php';
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';

$s = new smarty;