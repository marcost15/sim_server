<?php
/* Smarty version 4.0.0, created on 2021-12-21 16:14:15
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61c2359751a928_41870863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0be0d93c1f1a800e5a72825381fa491c1bd49be5' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_password.tpl',
      1 => 1640117652,
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
function content_61c2359751a928_41870863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
    <?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="user_password.php?"><?=_('Modify myself')?></a></li>
        <?php if ($_SESSION['usuario']['permission'] == "ADMIN") {?>
            <li class="nav-item"><a class="nav-link" href="user_others.php?"><?=_('Modify others')?></a></li>
        <?php }?>
    </ul>

</header><!-- /header -->
<main>
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <?php echo $_smarty_tpl->tpl_vars['frm']->value;?>

        </div>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
