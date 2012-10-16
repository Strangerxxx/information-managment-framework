<?php
	flush();
	global $cimsApp;
	$appName = $cimsApp->getConfig("site_name");
	$title = $cimsApp->getVar("adminPageTitle");
	$cimsApp->loadClass("model");
	$cimsPageModel = new CIMS_model;
	$cimsPageModel->m_model_name = "admin";
	$cimsPageModel->start();
	$userName = getLoginAdmin();
	$welcomes = array("Добро пожаловать", "Рад видеть вас", "Добрый день", "Приветствую", "Привет", "Хорошо выглядите");
	$welcome = $welcomes[rand(0, count($welcomes) - 1)];
	$todayIs = date("d", time()) . " " . date("F", time()) . " " . date("Y", time()) . " г.";
	$todayIs = str_replace("January", "января", $todayIs);
	$todayIs = str_replace("February", "февраля", $todayIs);
	$todayIs = str_replace("March", "марта", $todayIs);
	$todayIs = str_replace("April", "апреля", $todayIs);
	$todayIs = str_replace("May", "мая", $todayIs);
	$todayIs = str_replace("June", "июня", $todayIs);
	$todayIs = str_replace("July", "июля", $todayIs);
	$todayIs = str_replace("August", "августа", $todayIs);
	$todayIs = str_replace("September", "сентября", $todayIs);
	$todayIs = str_replace("October", "октября", $todayIs);
	$todayIs = str_replace("November", "ноября", $todayIs);
	$todayIs = str_replace("December", "декабря", $todayIs);
	flush();
?>
<html>
	<head>
		<title><?=$title?></title>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="/views/main/admin/css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="/views/main/admin/css/aui.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<center>
			<div class="header">
					<table width="100%">
						<tr>
							<td>
								<h1 style="padding: 20px; padding-bottom: 0px;"><?=$appName?></h1>
							</td>
							<td valign="top" align="right">
								<div class="userbar">
									<?=$welcome?>, <b><?=$userName?></b>
									<a href="admin.php?view=logout" class="logout_link">Выйти</a>
								</div>
								<p class="today">Сегодня <?=$todayIs?></p>
							</td>
						</tr>
					</table>
					<div class="tabbar">
					<div class="menutab">
						<a href="admin.php" class="mtlink">Главная</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=content" class="mtlink">Контент</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=users" class="mtlink">Пользователи</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=controllers" class="mtlink">Контроллеры</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=settings" class="mtlink">Настройки</a>
					</div>
				</div>
			</div>
			<div class="page">