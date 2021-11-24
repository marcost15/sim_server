<?php
require_once 'init.php';
modulo("USER");

bd_privileges_update($_POST);

saltar("alert.php?texto=" . _('Privileges updated correctly.') . "&destino=" . 'privileges.php');
