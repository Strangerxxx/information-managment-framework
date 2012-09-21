<?php
	
	global $cimsApp;
	$cimsApp->loadClass("model");
	$cimsModel = new CIMS_model;
	$cimsModel->m_model_name = "content";
	$cimsModel->start();
	 
	$cimsApp->setVar("pageText", getArticle(1));
	
	$cimsApp->loadClass("view");
	$cimsView = new CIMS_view;
	$cimsView->m_view_name = $cimsApp->getConfig("default_view");
	$cimsView->start();
	
?>