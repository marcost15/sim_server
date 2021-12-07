<?php
/* Smarty version 3.1.39, created on 2021-12-07 11:25:49
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61af7cfdb8e610_79800468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4511d73d3f67235faa8e20560bb2feea24c6b893' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/alert.tpl',
      1 => 1638835454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabeceraalert.tpl' => 1,
    'file:menu_nav.tpl' => 1,
    'file:pie.tpl' => 1,
  ),
),false)) {
function content_61af7cfdb8e610_79800468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabeceraalert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
    <?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>"Alerta"), 0, false);
?>
</header><!-- /header -->
<main>
    <div class="container text-center">
                <div class="jumbotron">
            <p class="display-4"><?=_('Alert')?></p>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
" class="btn btn-link"><?=_('Ok')?></a>
        </div>

            </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
