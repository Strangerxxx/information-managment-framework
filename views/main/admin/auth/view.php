<html>
	<head>
		<title>����������� | Carrymove IMS</title>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251">
		<link rel="stylesheet" type="text/css" href="/views/main/admin/auth/stylesheet.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<center>
			<div class="auth_page">
				<h3>�����������</h3>
				<p>��� ��������� ������� �&nbsp;Carrymove&nbsp;IMS, ����������, ������� ���� E-mail �&nbsp;������.</p>
				<?php global $cimsApp; $authError = $cimsApp->getVar("authError"); if($authError !== "null") { ?>
				<div class="auth_error">
					<?php global $cimsApp; print $cimsApp->getVar("authError"); ?>
				</div>
				<? } ?>
				<form action="admin.php" method="POST">
				<input type="hidden" name="mode" value="auth">
				<table width="100%">
					<tr>
						<td>
							E-mail:
						</td>
						<td>
							<input type="text" name="email" placeholder="����., ivan@petrov.com">
						</td>
					</tr>
					<tr>
						<td>
							������:
						</td>
						<td>
							<input type="password" name="password">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit">�����</button>
						</td>
					</tr>
				</table>
			</div>
			<p>2012 &copy; Carrymove IMS, &copy; Carrymove Internet Solutions</p>
		</center>
	</body>
</html>