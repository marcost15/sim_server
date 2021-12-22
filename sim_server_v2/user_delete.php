<?php
require_once 'init.php';
modulo("USER");

bd_users_delete($_REQUEST['u']);
saltar('user_others.php');
