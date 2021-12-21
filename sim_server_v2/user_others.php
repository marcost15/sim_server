<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Manage Other'));
$s->assign('name', _('Manage Other'));
$s->assign(
    'd',
    $d = bd_users_datos(
        $_SESSION['usuario']['permission'] == 'ADMIN' ? NULL : $_SESSION['usuario']['id']
    )
);
$s->display('user_others.tpl');
