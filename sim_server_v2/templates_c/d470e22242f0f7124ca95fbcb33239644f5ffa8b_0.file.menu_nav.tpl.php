<?php
/* Smarty version 3.1.39, created on 2021-10-20 01:31:13
  from '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/menu_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616fa9a15c0db5_35994631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd470e22242f0f7124ca95fbcb33239644f5ffa8b' => 
    array (
      0 => '/home/arnoldobr/public_html/git/sim_server/sim_server_v2/templates/menu_nav.tpl',
      1 => 1634707865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616fa9a15c0db5_35994631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/arnoldobr/public_html/git/sim_server/sim_server_v2/vendor/smarty/smarty/libs/plugins/modifier.ico.php','function'=>'smarty_modifier_ico',),));
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php">
		<img src="./img/empresa/logo.svg" alt="" height="30" loading="lazy"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php"><?php echo smarty_modifier_ico("house");?>
&nbsp;<?=_('Home')?></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo smarty_modifier_ico("gear");?>
&nbsp;<?=_('Configuration')?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?=_('Group')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('SIM')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('GoIP')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Group')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Human')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('IMEI')?></a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo smarty_modifier_ico("speedometer2");?>
&nbsp;<?=_('Monitor')?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?=_('SIM')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('GoIP')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Logs')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Call')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('CDR')?></a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo smarty_modifier_ico("server");?>
&nbsp;<?=_('Data')?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?=_('System')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Data')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Data')?></a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo smarty_modifier_ico("person");?>
&nbsp;<?=_('User')?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?=_('Change')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Manage')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Users')?></a></li>
            <li><a class="dropdown-item" href="#"><?=_('Privileges')?></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><?php echo smarty_modifier_ico("door-open");?>
&nbsp;<?=_('Exit')?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }
}
