<? flush(); ?>
<html>
	<head>
		<title>Carrymove IMS</title>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="/views/main/admin/css/stylesheet.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	</head>
	<?php flush();
		flush();
		global $cimsApp;
		$appName = $cimsApp->getConfig("site_name");
		$cimsApp->loadClass("model");
		$cimsPageModel = new CIMS_model;
		$cimsPageModel->m_model_name = "admin";
		$cimsPageModel->start();
		$userName = getLoginAdmin();
		$welcomes = array("Добро пожаловать", "Рад видеть вас", "Добрый день", "Приветствую", "Привет", "Хорошо выглядите");
		$welcome = $welcomes[rand(0, count($welcomes) - 1)];
		flush();
	?>
	<body>
		<center>
			<div class="header">
					<table width="100%">
						<tr>
							<td>
								<h1 style="padding: 20px; padding-bottom: 0px;">&laquo;<?=$appName?>&raquo;,&nbsp;управление</h1>
							</td>
							<td valign="top" align="right">
								<div class="userbar">
									<?=$welcome?>, <b><?=$userName?></b>
									<a href="admin.php?view=logout" class="logout_link">Выйти</a>
								</div>
								<p class="today">Сегодня <? print date("d", time()) . " " . date("M", time()) . " " . date("Y", time()) . " г." ?></p>
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