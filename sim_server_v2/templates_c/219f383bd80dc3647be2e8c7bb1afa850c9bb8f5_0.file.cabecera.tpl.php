<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:18:10
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168e4e26d1079_02406440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f383bd80dc3647be2e8c7bb1afa850c9bb8f5' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cabecera.tpl',
      1 => 1634124588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabeceraindex.tpl' => 1,
  ),
),false)) {
function content_6168e4e26d1079_02406440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabeceraindex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/style.css">
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cab']->value)===null||$tmp==='' ? '' : $tmp);?>

	   </head>
	<body>
<!-- /cabecera.tpl -->
<?php }
}
