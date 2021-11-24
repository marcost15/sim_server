<?php
require_once 'init.php';

$hash = sql2value("SELECT password FROM users WHERE id = '{$_POST['login']}' LIMIT 1; ");

if (password_verify( $_POST['password'], $hash )) {
	$_SESSION['usuario'] = bd_users_datos($_POST['login']);
	saltar("inicio.php");
} else {
	$_SESSION['usuario'] = NULL;
	saltar("index.php");
}
