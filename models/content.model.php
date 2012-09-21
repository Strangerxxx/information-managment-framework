<?php

	function getArticle( $iArticleID ) {
		
		global $cimsApp;
		global $cimsDB;
		$get_data = $cimsApp->getVar("GET");
		
		if(!isset($get_data['view'])) {
			$page_id = 1;
		}
		else {
			$page_id = $get_data['view'];
		}
		
		
		$cimsDB->start($cimsApp->getConfig("mysql_db"));
		$request = "SELECT * FROM  `content` WHERE ((`content`.`id` = $page_id))";
		$articles = $cimsDB->request($request);
		while($row = mysql_fetch_array($articles, MYSQL_ASSOC)) {
			global $cimsApp;
			
			$result = "<h1>" . $row['title'] . "</h1>" . $row['content'];
			$cimsApp->setVar("pageTitle", $row['title']);
		}
		
		return $result;
		
	}
	
?>