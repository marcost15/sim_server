<?php
session_start();
if(!isset($_SESSION['userid'])){
        require_once ('login.php');
        exit;
}
define("OK", true);
require_once("../global.php");
$date=date("Y-m-d H:i:s D");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="Author" content="Gaby_chen">
<title></title>
<style type="text/css">
a:link { color:#000000;text-decoration:none}
a:hover {color:#666666;}
a:visited {color:#000000;text-decoration:none}

td {FONT-SIZE: 9pt; FILTER: dropshadow(color=#FFFFFF,offx=1,offy=1); COLOR: #000000; FONT-FAMILY: "瀹嬩綋"}
img {filter:Alpha(opacity:100); chroma(color=#FFFFFF)}
</style>
<base target="main">
<script>

var displayBar=true;
function switchBar(obj)
{
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.src="../images/admin_top_open.gif";
		obj.title="Open left Manage functions";
	}
	else{
		parent.frame.cols="160,*";
		displayBar=true;
		obj.src="../images/admin_top_close.gif";
		obj.title="Close left Manage functions";
	}
}
//onload="alert('hello')";
</script>
</head>

<body background="../images/admin_top_bg.gif" leftmargin="0" topmargin="0" >
<table height="100%" wIdth="100%" border=0 cellpadding=0 cellspacing=0>
<tr valign=mIddle>
	<td wIdth=50>
	<img onClick="switchBar(this)" src="../images/admin_top_close.gif" title="Close left Manage functions" style="cursor:hand">
	</td>

	<td wIdth=40>
		<img src="../images/admin_top_icon_1.gif">
	</td>

	<td wIdth=200>
		<?php echo $date ?>
	</td>

	<td wIdth=40>&nbsp;
	</td>
	<td wIdth=100>&nbsp;</td>
	<td align="right"><a href="" onClick="parent.location.href='../index.php'">切换到简体版</a>&nbsp;&nbsp;&nbsp; <?php echo $version." ".$bdate ?></td>
</tr>
</table>
</body>
</html>


