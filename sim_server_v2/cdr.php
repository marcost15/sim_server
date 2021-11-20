<?php
require_once 'init.php';
modulo("MONITOR");
$s->assign('titulo', _('CDR'));


$frm = new FormHandler('frm01');
$frm->SelectField(
   _('sim'),
   'name',
   [
      0 => 'All',
      8010001 => '8010001',
      8010002 => '8010002',
      8010003 => '8010003',
   ],
   FH_NOT_EMPTY,
   true,
   null,
   ''
);

$frm->DateTimeLocalField(
_('Start'), 'start_date'
);

$frm->DateTimeLocalField(
_('End'), 'end_date'
);

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

$s->assign('pie',$pie);
$s->assign('frm',$frm->flush(true));
$s->display('cdr.tpl');
