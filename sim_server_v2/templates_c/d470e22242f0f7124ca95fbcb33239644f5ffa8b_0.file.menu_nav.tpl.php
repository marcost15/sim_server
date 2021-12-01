<?php
/* Smarty version 3.1.39, created on 2021-12-01 12:41:37
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/menu_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a7a5c1531dd6_16240247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd470e22242f0f7124ca95fbcb33239644f5ffa8b' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/menu_nav.tpl',
      1 => 1638376895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a7a5c1531dd6_16240247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/arnoldobr/public_html/git/sim_server/sim_server_v2/vendor/smarty/smarty/libs/plugins/modifier.ico.php','function'=>'smarty_modifier_ico',),));
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="inicio.php">
            <img src="./img/empresa/logo.svg" alt="" height="30" loading="lazy"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php"><?php echo smarty_modifier_ico("house");?>
&nbsp;<?=_('Home')?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdowna" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo smarty_modifier_ico("gear");?>
&nbsp;<?=_('Configuration')?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdowna">
                        <li><a class="dropdown-item" href="sim_team.php"><?=_('Group')?></a></li>
                        <li><a class="dropdown-item" href="sim_bank.php"><?=_('SIM')?></a></li>
                        <li><a class="dropdown-item" href="rm_device.php"><?=_('GoIP')?></a></li>
                        <li><a class="dropdown-item" href="scheduler.php"><?=_('Group')?></a></li>
                        <li><a class="dropdown-item" href="human.php"><?=_('Human')?></a></li>
                        <li><a class="dropdown-item" href="imei_db.php"><?=_('IMEI')?></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownb" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo smarty_modifier_ico("speedometer2");?>
&nbsp;<?=_('Monitor')?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownb">
                        <li><a class="dropdown-item" href="all_sim.php"><?=_('SIM')?></a></li>
                        <li><a class="dropdown-item" href="all_device_line.php"><?=_('GoIP')?></a></li>
                        <li><a class="dropdown-item" href="logs.php"><?=_('Logs')?></a></li>
                        <li><a class="dropdown-item" href="call_record.php"><?=_('Call')?></a></li>
                        <li><a class="dropdown-item" href="cdr.php"><?=_('CDR')?></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownc" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo smarty_modifier_ico("server");?>
&nbsp;<?=_('Data')?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownc">
                        <li><a class="dropdown-item" href="sys.php"><?=_("System Manage")?></a></li>
                        <li><a class="dropdown-item" href="databackup.php"><?=_("Data Backup")?></a></li>
                        <li><a class="dropdown-item" href="datarestore.php"><?=_("Data Import")?></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownd" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo smarty_modifier_ico("person");?>
&nbsp;<?=_('User Manage')?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownd">
                        <li><a class="dropdown-item" href="user_password.php"><?=_('Change Password')?></a></li>
                        <li><a class="dropdown-item" href="user_others.php"><?=_('Manage Other')?></a></li>
                        <li><a class="dropdown-item" href="privileges.php"><?=_('Privileges')?></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?php echo smarty_modifier_ico("door-open");?>
&nbsp;<?=_('Exit')?></a>
                </li>
            </ul>
        </div>
        <?php echo $_SESSION['usuario']['name'];?>
<p class="h4">&nbsp;<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</span></p>
    </div>
</nav><?php }
}
