<?php

	global $cimsApp;
	
	$title = $cimsApp->getVar("pageTitle");
	$body = $cimsApp->getVar("pageText");
	$generator = $cimsApp->getConfig("name");
	$author = $cimsApp->getConfig("developer");
	$description = $cimsApp->getConfig("description");
	$keywords = $cimsApp->getConfig("keywords");
	print $title;
	
?>
<html>
	<head>
		<title><?=$title?></title>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251">
		<meta name="generator" content="<?=$generator?>">
		<meta name="author" content="<?=$author?>">
		<meta name="description" content="<?=$description?>">
		<meta name="keywords" content="<?=$keywords?>">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<?=$body?>
	</body>
</html>