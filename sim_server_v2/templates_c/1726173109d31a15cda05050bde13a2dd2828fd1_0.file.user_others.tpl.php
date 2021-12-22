<?php
/* Smarty version 4.0.0, created on 2021-12-22 00:06:57
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_others.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61c2a461c8f550_74671465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1726173109d31a15cda05050bde13a2dd2828fd1' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_others.tpl',
      1 => 1640146009,
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
function content_61c2a461c8f550_74671465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/arnoldobr/public_html/git/sim_server/sim_server_v2/vendor/smarty/smarty/libs/plugins/modifier.ico.php','function'=>'smarty_modifier_ico',),));
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
    <?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="user_others.php"><?=_('Refresh')?></a></li>
        <?php if ($_SESSION['usuario']['permission'] == "ADMIN") {?><li class="nav-item"><a class="nav-link" href="privileges.php"><?=_('Privileges')?></a></li><?php }?>
    </ul>
</header><!-- /header -->
<main>
    <div class="row">
        <div class="col">
            <div class="mitabla table-responsive">
                <table class="table table-sm table-hover content-table" id="tablausers">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?=_('Id')?></th>
                            <th><?=_('Name')?></th>
                            <th><?=_('Level')?></th>
                            <th><?=_('Remark')?></th>
                            <th><?php if ($_SESSION['usuario']['permission'] == "ADMIN") {?><a href="user_add.php" class="btn btn-warning text-break"><?php echo smarty_modifier_ico('plus-square');?>
&nbsp;<?=_('Add')?></a><?php }?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th><?=_('Id')?></th>
                            <th><?=_('Name')?></th>
                            <th><?=_('Level')?></th>
                            <th><?=_('Remark')?></th>
                            <th><?=_('Actions')?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'u');
$_smarty_tpl->tpl_vars['u']->iteration = 0;
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
$_smarty_tpl->tpl_vars['u']->iteration++;
$__foreach_u_0_saved = $_smarty_tpl->tpl_vars['u'];
?>
                        <tr class="text-center">
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->iteration;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['name'];?>
</td>
                            <td>
                                <div class="lrtooltip"><?php echo $_smarty_tpl->tpl_vars['u']->value['permission'];?>
 <span class="lrtooltiptext"><?php echo $_smarty_tpl->tpl_vars['u']->value['module'];?>
</span></div>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['info'];?>
</td>
                            <td><a class="btn btn-outline-warning btn-sm" href="user_password.php?u=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo smarty_modifier_ico('key');?>
&nbsp;<?=_("Password")?></a>
                                <a class="btn btn-outline-warning btn-sm" href="user_modify.php?u=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo smarty_modifier_ico('pencil-square');?>
&nbsp;<?=_("Modify")?></a>
                                <?php if ($_SESSION['usuario']['permission'] == "ADMIN") {?><a class="btn  btn-outline-warning btn-sm" href="user_delete.php?u=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" onclick="return confirm_delete()"><?php echo smarty_modifier_ico('x-square');?>
&nbsp;<?=_("Delete")?></a><?php }?>
                            </td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['u'] = $__foreach_u_0_saved;
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
