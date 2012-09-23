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
		$welcomes = array("����� ����������", "��� ������ ���", "������ ����", "�����������", "������", "������ ���������");
		$welcome = $welcomes[rand(0, count($welcomes) - 1)];
		flush();
	?>
	<body>
		<center>
			<div class="header">
					<table width="100%">
						<tr>
							<td>
								<h1 style="padding: 20px; padding-bottom: 0px;">&laquo;<?=$appName?>&raquo;,&nbsp;����������</h1>
							</td>
							<td valign="top" align="right">
								<div class="userbar">
									<?=$welcome?>, <b><?=$userName?></b>
									<a href="admin.php?view=logout" class="logout_link">�����</a>
								</div>
								<p class="today">������� <? print date("d", time()) . " " . date("M", time()) . " " . date("Y", time()) . " �." ?></p>
							</td>
						</tr>
					</table>
					<div class="tabbar">
					<div class="menutab">
						<a href="admin.php" class="mtlink">�������</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=content" class="mtlink">�������</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=users" class="mtlink">������������</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=controllers" class="mtlink">�����������</a>
					</div>
					<div class="menutab">
						<a href="admin.php?view=settings" class="mtlink">���������</a>
					</div>
				</div>
			</div>
			<div class="page">