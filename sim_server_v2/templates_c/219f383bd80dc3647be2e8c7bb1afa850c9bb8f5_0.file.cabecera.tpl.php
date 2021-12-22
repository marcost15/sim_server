<?php
/* Smarty version 4.0.0, created on 2021-12-21 13:44:48
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61c212902b2805_15297794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f383bd80dc3647be2e8c7bb1afa850c9bb8f5' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabecera.tpl',
      1 => 1636414868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabeceraindex.tpl' => 1,
  ),
),false)) {
function content_61c212902b2805_15297794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabeceraindex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" -->
		<link rel="stylesheet" type="text/css" href="./css/personalizacion/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
		<link rel="stylesheet" type="text/css" href="./libs/DataTables/datatables.min.css">
	   <link rel="stylesheet" href="css/style.css">
      <?php echo (($tmp = $_smarty_tpl->tpl_vars['cab']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

	   </head>
	<body>
<!-- /cabecera.tpl -->
<?php }
}
