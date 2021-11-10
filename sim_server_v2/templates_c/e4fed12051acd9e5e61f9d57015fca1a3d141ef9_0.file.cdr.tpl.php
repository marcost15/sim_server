<?php
/* Smarty version 3.1.39, created on 2021-11-09 11:06:54
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a8e8ea6aa96_46208098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fed12051acd9e5e61f9d57015fca1a3d141ef9' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl',
      1 => 1636425477,
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
function content_618a8e8ea6aa96_46208098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
	<?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><!-- /header -->
<main>
<div class="row">
	<div class="col">











<table class="content-table" id="tablacdr">
	<thead>
	<tr>
		<th><?=_('line')?></th>
		<th><?=_('ASR')?></th>
		<th><?=_('ACD')?></th>
		<th><?=_("Call Time")?></th>
		<th><?=_("Call Count")?></th>
	</tr>
</thead>
<tfoot>
	<tr>
		<th><?=_('line')?></th>
		<th><?=_('ASR')?></th>
		<th><?=_('ACD')?></th>
		<th><?=_("Call Time")?></th>
		<th><?=_("Call Count")?></th>
	</tr>
	<tr>
		<th colspan="5">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</th>
	</tr>
</tfoot>
<tbody>
	<tr>
		<td>adssdfggs</td>
		<td>b dssdfggs</td>
		<td>c dssdfggs</td>
		<td>d dssdfggs</td>
		<td>e dssdfggs</td>
	</tr>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dss dfggs</td>
		<td>dssd fggs</td>
		<td>ds sdfggs</td>
		<td>aa dssdfggs</td>
		<td>abc dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
	<tr>
		<td>adssdfggs</td>
		<td>b dssdfggs</td>
		<td>c dssdfggs</td>
		<td>d dssdfggs</td>
		<td>e dssdfggs</td>
	</tr>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dss dfggs</td>
		<td>dssd fggs</td>
		<td>ds sdfggs</td>
		<td>aa dssdfggs</td>
		<td>abc dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
	<tr>
		<td>adssdfggs</td>
		<td>b dssdfggs</td>
		<td>c dssdfggs</td>
		<td>d dssdfggs</td>
		<td>e dssdfggs</td>
	</tr>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dss dfggs</td>
		<td>dssd fggs</td>
		<td>ds sdfggs</td>
		<td>aa dssdfggs</td>
		<td>abc dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
</tbody>
</table>

	</div>
</div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
