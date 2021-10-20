<?php
/* Smarty version 3.1.39, created on 2021-10-19 17:21:17
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616f36cda3f6d3_45218854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29e305ef43800c2c43ffa4a0ea2fa460665d1aec' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/index.tpl',
      1 => 1634678474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.tpl' => 1,
  ),
),false)) {
function content_616f36cda3f6d3_45218854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/arnoldobr/public_html/git/sim_server/sim_server_v2/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="text-center">
	<form class="form-signin" action="index_proc.php" method="post">
		<img id="logo" class="logo" src="img/logo.svg" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
		<h1 class="h3 mb-3 font-weight-normal"><?=_('Login')?></h1>

		<label for="zone" class="sr-only"><?=_('Time')?></label>
		<select name="zone" id="zone"
		class="form-control"
		>
			<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['zonas']->value,'output'=>$_smarty_tpl->tpl_vars['zonas']->value,'selected'=>$_smarty_tpl->tpl_vars['zona']->value),$_smarty_tpl);?>

		</select>

		<label for="login" class="sr-only"><?=_('User')?></label>
		<input 	id="login" name="login"
					class="form-control" placeholder="<?=_('User')?>"
					type="text"
					required autofocus>
		<label for="password" class="sr-only">Password</label>
		<input id="password" name="password"
					class="form-control"
					type="password"
					title="8 caracteres mínimo"
					pattern=".{3,}"
					placeholder="<?=_('Password')?>" required>
		<div class="checkbox mb-3">
			<!-- label>
			<input type="checkbox" value="olvido"> Olvidé la contraseña.
		</label -->
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?=_('Ingresar')?></button>
	<p class="mt-5 mb-3 text-muted">---------</p>
	</form>
</div>
</body>
</html>
<?php }
}
