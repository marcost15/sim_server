<?php
require_once 'init.php';
modulo("USER");

$frm = new FormHandler('frm02');

$frm->textField(_('Name'), 'name');
$frm->passField(_('New Password'),'new_passwd');
$frm->passField(_('Confirm Password'),'confirm_passwd');
$frm->textField(_('Remark'),'remark');
$frm->submitButton(_('Save'));
$frm->setValue('name', $_SESSION['usuario']['name']);
$frm->setFieldViewMode('name');



$s->assign('frm', $frm->flush(true));
$s->assign('name', $CFG['name']);
$s->assign('titulo', _('Change Password'));
$s->display('user_password.tpl');
