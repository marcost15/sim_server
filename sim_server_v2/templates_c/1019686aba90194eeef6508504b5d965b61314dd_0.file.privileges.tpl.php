<?php
/* Smarty version 3.1.39, created on 2021-10-26 19:01:55
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/privileges.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617888e3680a56_65944828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1019686aba90194eeef6508504b5d965b61314dd' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/privileges.tpl',
      1 => 1635284996,
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
function content_617888e3680a56_65944828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
	<?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><!-- /header -->
<main>
	<div class="container">
		<div class="row">
			<div class="col">
<table class="content-table">
	<thead>
	<tr>
		<th><?=_('Module')?></th>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'nivel');
$_smarty_tpl->tpl_vars['nivel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nivel']->value) {
$_smarty_tpl->tpl_vars['nivel']->do_else = false;
?>
		<th><?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
</th>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
</thead>
<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value, 'modulo');
$_smarty_tpl->tpl_vars['modulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->value) {
$_smarty_tpl->tpl_vars['modulo']->do_else = false;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</td>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'nivel');
$_smarty_tpl->tpl_vars['nivel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nivel']->value) {
$_smarty_tpl->tpl_vars['nivel']->do_else = false;
?>
			<td label="<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
@<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
@<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
"></td>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

			</div>
		</div>
	</div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
