<?php
require_once 'init.php';
modulo("MONITOR");
$s->assign('titulo', _('CDR'));
$s->assign('name', _('CDR'));


///////// cdr viejo ////////
function my_cmp($a, $b)
{
	global $order_type;
	global $order_key;

	if ($a[$order_key] == $b[$order_key]) return 0;
	if ($order_type == 'desc') return ($a[$order_key] < $b[$order_key]) ? 1 : -1;
	return ($a[$order_key] > $b[$order_key]) ? 1 : -1;
}


$_REQUEST['order'] = $_REQUEST['order'] ?? 'asc';
$order_type2 = ($_REQUEST['order'] == 'desc') ? 'asc' : 'desc';
$_REQUEST['order_key'] = $_REQUEST['order_key'] ?? 'name';

$order_type = $_REQUEST['order'];
$order_key  = $_REQUEST['order'];


$_REQUEST['start_time'] = $_REQUEST['start_time'] ?? date("Y-m-d 00:00");
$_REQUEST['end_time'] = $_REQUEST['end_time'] ?? date("Y-m-d H:i");
$_REQUEST['submit_value'] = $_REQUEST['submit_value'] ?? _('View');


if ($_REQUEST['submit_value'] == _('1 Hour')) {
	$start_time = date("Y-m-d H:i", time() - 3600);
	$end_time = date("Y-m-d H:i");
} else if ($_REQUEST['submit_value'] == _('3 Hour')) {
	$start_time = date("Y-m-d H:i", time() - 18000);
	$end_time = date("Y-m-d H:i");
} else {
	$start_time = $_REQUEST['start_time'];
	$end_time = $_REQUEST['end_time'];
}

$type = $_REQUEST['type'] ?? 'sim';

$name = $_REQUEST['name'] ?? '0';

if (!$name) {
	$ch = "selected";
	$name_ch = "All";
}

$wh = $name ? $wh = "and " . $type . "_name=$name" : '';

$opciones = bd_simcdr($type);



$frm = new FormHandler('frm01');
$frm->SelectField(
	_('sim'),
	'name',
	$opciones,
	FH_NOT_EMPTY,
	true,
	null,
	''
);

$frm->DateTimeLocalField(
	_('Start'),
	'start_date'
);
$frm->DateTimeLocalField(
	_('End'),
	'end_date'
);

$frm->submitButton(_('View'), 'submit','btn btn-primary');

$today = date('Y-m-d');
$pie =
	<<<LRDTAB
<script>
   document.getElementById("start_date").setAttribute('value', '{$today}T00:00');
   document.getElementById("end_date").setAttribute('value', '{$today}T23:59');
   document.getElementById("start_date").setAttribute('class', 'form-control');
   document.getElementById("end_date").setAttribute('class', 'form-control');

   $(document).ready(function () {
      $('#tablacdr').DataTable();
   });
</script>
LRDTAB;

$s->assign('d', bd_call_record_datos($type, '2019-01-01 00:00', '2022-01-01 00:00', $wh));
$s->assign('pie', $pie);
$s->assign('frm', $frm->flush(true));
$s->display('cdr.tpl');
