<?php
/* Smarty version 4.0.0, created on 2021-12-22 00:00:37
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/pie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61c2a2e5794a70_48572523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e0e514492885e42f97866b9280e0e0ac7f66fa' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/pie.tpl',
      1 => 1640145411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c2a2e5794a70_48572523 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="footer text-center bg-dark">
    <div class="container">
        <span class="text-muted">:::... <?php echo (($tmp = $_smarty_tpl->tpl_vars['pag']->value ?? null)===null||$tmp==='' ? "&copy; LRDTAB 2020" ?? null : $tmp);?>
 ...:::</span>
    </div>
</footer>
<?php echo '<script'; ?>
 src="./libs/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./libs/DataTables/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/gettext.php"><?php echo '</script'; ?>
>
<?php echo (($tmp = $_smarty_tpl->tpl_vars['pie']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

</body>
</html>
<?php }
}
