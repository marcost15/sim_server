<?php
/* Smarty version 3.1.39, created on 2021-11-03 00:30:38
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6182106e3d0e39_93002955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fed12051acd9e5e61f9d57015fca1a3d141ef9' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/cdr.tpl',
      1 => 1635913835,
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
function content_6182106e3d0e39_93002955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
	<?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><!-- /header -->
<main>
		<form action="proc_cdr.php">
	<div class="container">
		<div class="row border-primary">
			<div class="col-auto d-flex">
				<label for="start"><?=_('Start')?>: </label>
				<input type="date" class="form-control form-control-sm col-auto"
				id="start" name="start" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"
				min="2001-01-01" max="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
">
			</div>
			<div class="col-auto">
				<input type="time" class="form-control form-control-sm col-auto" id="start-time" name="start-time" value="00:00" min="00:00" max="23:59">
			</div>
			<div class="col-auto d-flex">
				<label for="end"><?=_('End')?>:</label>
				<input type="date"class="form-control form-control-sm
				col-auto" id="end" name="end" value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"min="2001-01-01"max="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
">
			</div>
			<div class="col-auto">
				<input type="time"class="form-control
				form-control-sm" id="end-time"
				name="end-time" value="23:59" min="00:00" max="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
">
			</div>
			<div class="col-auto">
				<input type="submit" name="enviar" value="Enviar" class="form-control-sm">
			</div>
		</div>
		</div>
		</form>
		<div class="row">
			<div class="col">
<table class="content-table">
	<thead>
	<tr>
		<th><?=_('sim')?></th>
		<th><?=_('ASR')?></th>
		<th><?=_('ACD')?></th>
		<th><?=_("Call Time")?></th>
		<th><?=_("Call Count")?></th>
	</tr>
</thead>
<tfoot>
	<tr>
		<td>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</td>
	</tr>
</tfoot>
<tbody>
	<tr>
		<td><?=_('modulo')?></td></td>
	</tr>
</tbody>
</table>

			</div>
		</div>
	</div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
