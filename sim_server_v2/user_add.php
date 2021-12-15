<?php
require_once 'init.php';
modulo("USER");

function add_user($d, &$frm){
    bd_users_add($d);
    saltar('alert.php?texto=OK&destino=user_others.php');
}


$frm = new FormHandler('frm_add');

$frm->textField(_('Login Name'), 'login','','','','class="form-control"');
$frm->textField(_('Name'), 'name','','','','class="form-control"');
$frm->passField(_('Password'),'passwd','', '', '','class="form-control"');
$frm->passField(_('Confirm Password'),'confirm_passwd', '', '', '','class="form-control form-control-dark"');
$frm->checkPassword('passwd', 'confirm_passwd','Error');
$frm->textField(_('Remark'),'remark','','','','class="form-control"');
$frm->selectField('Level', 'level', bd_users_privileges(),'',false);
$frm->submitButton(_('Save'),'save','class="btn btn-primary"');
$frm->onCorrect('add_user');

$s->assign('frm', $frm->flush(true));
$s->assign('titulo', _('Add USer'));
$s->display('user_add.tpl');
