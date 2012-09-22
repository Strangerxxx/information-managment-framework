	<head>
		<title>Carrymove IMS</title>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="/views/main/admin/css/stylesheet.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	</head>
	<?php
		global $cimsApp;
		$appName = $cimsApp->getConfig("site_name");
	?>
	<body>
		<center>
			<div class="page">
				<div class="header">
					<h1><?=$appName?></h1>
				</div>
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