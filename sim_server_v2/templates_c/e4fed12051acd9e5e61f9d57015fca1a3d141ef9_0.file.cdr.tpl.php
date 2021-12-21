<?php
/* Smarty version 3.1.39, created on 2021-12-21 11:12:08
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c1eec81d01e6_30218646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fed12051acd9e5e61f9d57015fca1a3d141ef9' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl',
      1 => 1638341581,
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
function content_61c1eec81d01e6_30218646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
	<?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="cdr.php?type=sim&name=&order=asc&order_key=name"><?=_('Refresh')?></a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?type=sim&order=asc&order_key=name"><?=_('SIM CDR')?></a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?type=line&order=asc&order_key=name"><?=_('LINE CDR')?></a></li>

	</ul>
</header><!-- /header -->
<main>
<div class="row">
	<div class="col">
		<?php echo $_smarty_tpl->tpl_vars['frm']->value;?>

	</div>
</div>
<div class="row">
	<div class="col">
<div class="mitabla">
<table class="content-table" id="tablacdr">
	<thead>
	<tr>
		<th><?=_('SIM')?></th>
		<th><?=_('ASR')?></th>
		<th><?=_('ACD')?></th>
		<th><?=_("Call Time")?></th>
		<th><?=_("Call Count")?></th>
		<th><?=_("Total Count")?></th>
	</tr>
</thead>
<tfoot>
	<tr>
		<th><?=_('SIM')?></th>
		<th><?=_('ASR')?></th>
		<th><?=_('ACD')?></th>
		<th><?=_('Call Time')?></th>
		<th><?=_('Call Count')?></th>
		<th><?=_('Total Count')?></th>
	</tr>
</tfoot>
<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'fila');
$_smarty_tpl->tpl_vars['fila']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->do_else = false;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['name'];?>
</td>
		<td><?php echo sprintf("%.1f",($_smarty_tpl->tpl_vars['fila']->value['callcount']*100/$_smarty_tpl->tpl_vars['fila']->value['totalcallcount']));?>
%</td>
		<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['acd'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['calltime'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['callcount'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['totalcallcount'];?>
</td>
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
