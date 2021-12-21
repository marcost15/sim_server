<?php
require_once 'init.php';
modulo("USER");

// si el nivel es admin puede cambiar cualquier contraseña
// de lo contrario solo puede cambiar la suya.

function update_password($d, &$frm)
{
    $d['user'] = $_SESSION['usuario']['id'];
    $d['hash'] = password_hash($d['new_passwd'], PASSWORD_DEFAULT);
    unset($d['new_passwd']);
    unset($d['confirm_passwd']);
    bd_users_update_password($d);
    saltar('alert.php?texto=OK&destino=user_password.php');
}


$frm = new FormHandler('frm02');

$frm->textField(_('Name'), 'name', '', '', '', 'readonly class="form-control"');
$frm->passField(_('New Password'), 'new_passwd', '', '', '', 'class="form-control"');
$frm->passField(_('Confirm Password'), 'confirm_passwd', '', '', '', 'class="form-control form-control-dark"');
$frm->checkPassword('new_passwd', 'confirm_passwd', 'Error');
$frm->textField(_('Remark'), 'remark', '', '', '', 'class="form-control"');
$frm->submitButton(_('Save'), 'save', 'class="btn btn-primary"');
$frm->setValue('name', $_SESSION['usuario']['name']);
$frm->onCorrect('update_password');

$s->assign('frm', $frm->flush(true));
$s->assign('name', $CFG['name']);
$s->assign('titulo', _('Change Password'));
$s->display('user_password.tpl');
