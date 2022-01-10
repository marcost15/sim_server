<?php
require_once 'init.php';
modulo("USER");
$s->assign('titulo', _('Modify User'));
$s->assign('name', _('Modify User'));

function update_user($d, &$frm) {
	bd_users_update($d);
	saltar('alert.php?texto=OK&destino=user_others.php');
}

$d = bd_users_datos($_REQUEST['u']);
$frm = new FormHandler('frm02');

$frm->textField(_('Login Name'), 'login0', '', '', '', 'readonly class="form-control"');
$frm->textField(_('Name'), 'name', '', '', '', 'class="form-control"');
$frm->textField(_('Remark'), 'remark', '', '', '', 'class="form-control"');

if ($_SESSION['usuario']['permission'] === 'ADMIN') {
	$frm->selectField(_('Level'), 'level', bd_users_privileges(), '', false, false, '1', 'class="form-control"');
} else {
	$frm->textField(_('Level'), 'level', '', '', '', 'readonly class="form-control"');
}

$frm->submitButton(_('Save'), 'save', 'class="btn btn-primary"');
$frm->setValue('login0', $d['id']);
$frm->setValue('name', $d['name']);
$frm->setValue('remark', $d['info']);
$frm->setValue('level', $d['permission']);

$frm->onCorrect('update_user');

$s->assign('frm', $frm->flush(true));
$s->display('user_modify.tpl');
