<?php
session_start();
$idioma='es_VE';
putenv("LC_ALL=$idioma");
setlocale(LC_ALL,$idioma);

bindtextdomain($idioma, './locale');
textdomain($idioma);
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="Author" content="Gaby_chen">
	<meta charset="utf-8">
	<title>Sim Scheduler</title>
	<style type=text/css>
		body {
			background: #C7C7E2;
			margin: 0px;
			font: 90% serif;
		}

		ul {
			list-style: none;
		}

		a {
			color: #000000;
			text-decoration: none;
			padding: 2px;
		}

		a:hover {
			color: #000000;
			text-decoration: none;
			background-color: #428EFF;
			border: solid 1px none;
		}
		.first_menu{
			margin-left: -2.4rem;
		}

		.first_menu li {
			padding: 2px;
			margin:2px;
			border:  solid 1px #f0f3fa;
			top: 2px;
			left: 8px;
			color: #000000;
			font-weight: bold;
			text-align: center;
		}

		.sec_menu {
			/*	display: none; */
			padding-left: 0.3rem;
			font-weight: normal;
			border-left: 1px solid white;
			border-right: 1px solid white;
			border-bottom: 1px solid white;
			background: #f0f3fa;
		}
		.sec_menu li{
			font-size: 0.9rem;
			font-weight: lighter;
			text-align: left;
		}
	</style>
</head>

<body>

	<ul class="first_menu">
		<li><a href="main.php" target=main><?=_('Main')?></a> | <a href=logout.php target=_top><?=_('Logout')?></a>
			<ul class="sec_menu">
				<li><?=_('User Name')?>: <strong><?=$_SESSION['username']?></strong></li>
				<li><?=_('Permissions')?>: <strong><?=$_SESSION['typename_e']?></strong></li>
			</ul>
		</li>

		<li><?=_('Configuration')?>
			<ul class="sec_menu">
				<li><a href="sim_team.php" target=main><?=_('Group')?></a></li>
				<li><a href="sim_bank.php" target=main><?=_('SIM Bank')?></a></li>
				<li><a href="rm_device.php" target=main><?=_('GoIP')?></a></li>
				<li><a href="scheduler.php" target=main><?=_('Group Scheduler')?></a></li>
				<li><a href="human.php" target=main><?=_('Human Behavior')?></a></li>
				<li><a href="imei_db.php" target=main><?=_('IMEI Database')?></a></li>
			</ul>
		</li>
		<li><?=_('Monitor')?>
			<ul class="sec_menu">
				<li><a href="all_sim.php" target=main><?=_('SIM Slot')?></a></li>
				<li><a href="all_device_line.php" target=main><?=_('GoIP Channel')?></a></li>
				<li><a href="logs.php" target=main><?=_('Logs')?></a></li>
				<li><a href="call_record.php" target=main><?=_('Call Record')?></a></li>
				<li><a href="cdr.php" target=main><?=_('CDR')?></a></li>
			</ul>
		</li>
		<li><?=_('Data Manage')?>
			<ul class="sec_menu">
				<li><a href="sys.php" target=main><?=_('System Manage')?></a></li>
				<li><a href="databackup.php" target=main><?=_('Data Backup')?></a></li>
				<?php if ($_SESSION['permissions'] == 1) { ?>
					<li><a href="datarestore.php" target=main><?=_('Data Import')?></a></li>
				<?php } ?>
			</ul>
		</li>
		<li><?=_('User Manage')?>
			<ul class="sec_menu">
				<li><a href="user.php?action=modifyself" target=main><?=_('Change Password')?></a></li>
				<?php if ($_SESSION['permissions'] == 1) { ?>
					<li><a href="user.php?job=modify" target=main><?=_('Manage Other Users')?></a></li>
				<?php } ?>
			</ul>
		</li>
	</ul>

</body>

</html>
