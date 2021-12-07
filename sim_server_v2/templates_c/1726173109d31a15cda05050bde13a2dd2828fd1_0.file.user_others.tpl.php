<?php
/* Smarty version 3.1.39, created on 2021-12-07 01:13:27
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_others.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61aeed77838346_30423079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1726173109d31a15cda05050bde13a2dd2828fd1' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/user_others.tpl',
      1 => 1638854004,
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
function content_61aeed77838346_30423079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header id="header" class="">
    <?php $_smarty_tpl->_subTemplateRender("file:menu_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><!-- /header -->
<main>


    <div class="row">
        <div class="col">
            <div class="mitabla">
                <table class="content-table" id="tablacdr">
                    <thead>
                        <th><?=_('Id')?></th>
                        <th><?=_('Name')?></th>
                        <th><?=_('Privileges')?></th>
                        <th><?=_('Remark')?></th>
                        <th><?=_('Operation')?></th>
                    </thead>
                    <tfoot>
                        <th><?=_('Id')?></th>
                        <th><?=_('Name')?></th>
                        <th><?=_('Privileges')?></th>
                        <th><?=_('Remark')?></th>
                        <th><?=_('Operation')?></th>
                    </tfoot>
                    <tbody>
                        <td>admin</td>
                        <td>Admin</td>
                        <td>INIT, USER, </td>
                        <td>Remark</td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
