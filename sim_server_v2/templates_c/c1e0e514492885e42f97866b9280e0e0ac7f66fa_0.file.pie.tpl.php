<?php
/* Smarty version 3.1.39, created on 2021-11-09 10:12:55
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/pie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618a81e76ebd09_58767908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e0e514492885e42f97866b9280e0e0ac7f66fa' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/pie.tpl',
      1 => 1636424896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a81e76ebd09_58767908 (Smarty_Internal_Template $_smarty_tpl) {
?>		<footer class="footer text-center bg-dark">
		  <div class="container">
		    <span class="text-muted">:::...&copy; LRDTAB 2020...:::</span>
		  </div>
		</footer>
		<?php echo '<script'; ?>
 type="text/javascript" src="./libs/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="./libs/DataTables/datatables.min.js"><?php echo '</script'; ?>
>
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pie']->value)===null||$tmp==='' ? '' : $tmp);?>

	</body>
</html>
<?php }
}
