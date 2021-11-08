<?php
require_once 'init.php';
modulo("MONITOR");
$s->assign('titulo', _('CDR'));

$pie =
<<<LRDTAB
<script>
   $(document).ready(function () {
      $('#tablacdr').DataTable();
   });
</script>
LRDTAB;

$s->assign('pie',$pie);

$s->display('cdr.tpl');
