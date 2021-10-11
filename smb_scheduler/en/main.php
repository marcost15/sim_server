<?php
session_start();
if(!isset($_SESSION['userid'])){
        require_once ('login.php');
        exit;
}

$sysversion = PHP_VERSION;
$sysos = $_SERVER['SERVER_SOFTWARE'];
$max_upload =  ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
$ifcookie = isset($_COOKIE)? "SUCCESS" : "FAIL";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="../style.css">
<title>Sim Bank Scheduler Server</title>
<style type="text/css">
  h1{
    text-align: center;
    padding: 6px;
    background-color: #f0f3fa;
  }

  ul{
    max-width: 600px;
    margin: 0 auto;
    background-color: #f0f3fa;
    columns: 2;
    list-style: none;
    padding: 0;
  }

  li{
    padding: 2px;
    border: solid 1px #fff;
  }
</style>
</head>

<body>

<h1><?=_('Server message')?></h1>
<ul>
  <li><?=_('PHP version')?>: <strong><?=$sysversion?></strong></li>
  <li><?=_('Maximum upload limit')?>: <strong><?=$max_upload?></strong></li>
  <li><?=_('Server message')?>: <strong><?=$sysos?></strong></li>
  <li><?=_('Cookie test')?>: <strong><?=$ifcookie?></strong></li>
</ul>
</body>
</html>
