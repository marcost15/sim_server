<?php
/* Smarty version 4.0.0, created on 2021-12-21 14:09:17
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabeceraalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61c2184d190a32_11864745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab504b7dbf7bb8fb367fe1c5afeb3eee04e5bbb8' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabeceraalert.tpl',
      1 => 1637702858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c2184d190a32_11864745 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
		<meta name="author" content="">
		<!-- meta http-equiv="refresh" content="5; url=<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
" -->

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<meta name="msapplication-config" content="favicon/browserconfig.xml">
		<link rel="manifest" href="favicon/site.webmanifest">
		<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#563d7c">
		<meta name="theme-color" content="#ffffff">
		<title><?=_($_smarty_tpl->tpl_vars['name']->value)?></title>
		<!-- link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" -->
		<link rel="stylesheet" type="text/css" href="./css/personalizacion/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
		<link rel="stylesheet" type="text/css" href="./libs/DataTables/datatables.min.css">
	   <link rel="stylesheet" href="css/style.css">
      <?php echo (($tmp = $_smarty_tpl->tpl_vars['cab']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

	   </head>
	<body>
<?php }
}
