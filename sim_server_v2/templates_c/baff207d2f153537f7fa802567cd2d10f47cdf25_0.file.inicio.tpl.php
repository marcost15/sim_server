<?php
/* Smarty version 3.1.39, created on 2021-12-21 10:21:57
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c1e305ad15e4_64690230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baff207d2f153537f7fa802567cd2d10f47cdf25' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/inicio.tpl',
      1 => 1635272107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.tpl' => 1,
    'file:menu_nav.tpl' => 1,
    'file:pie.tpl' => 1,
  ),
),false)) {
function content_61c1e305ad15e4_64690230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
	<?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><!-- /header -->
<main>
<div class="container">
<table class="content-table">
	<thead>
		<tr>
			<th colspan="4"><?=_('Server message')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="t-r"><?=_("PHP Version")?>:</td><td><strong><?php echo $_smarty_tpl->tpl_vars['sysversion']->value;?>
</strong></td>
			<td class="t-r"><?=_("Server message")?>:</td><td><strong><?php echo $_smarty_tpl->tpl_vars['max_upload']->value;?>
</strong></td>
		</tr>
		<tr>
			<td class="t-r"><?=_("Maximum upload limit")?>:</td><td><strong><?php echo $_smarty_tpl->tpl_vars['sysos']->value;?>
</strong></td>
			<td class="t-r"><?=_("Cookie test")?>:</td><td><strong><?php echo $_smarty_tpl->tpl_vars['ifcookie']->value;?>
</strong></td>
		</tr>
	</tbody>
</table>
</div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
