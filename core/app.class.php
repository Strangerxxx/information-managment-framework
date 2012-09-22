<?php

	class CIMS_app {
	
		function __construct() {	
			include $_SERVER['DOCUMENT_ROOT'] . "/core/config.inc.php";
		}
		
		function error( $iErrorNumber = 0, $iObject = "undefined" )
		{
			switch($iErrorNumber) {
				case 32:
					return "Variable <b>" . $iObject . "</b> doesn't exists!<br>";
					break;
				case 64:
					return "Class <b>" . $iObject . "</b> doesn't exists!<br>";
					break;
				case 86:
					return "Controller <b>" . $iObject . "</b> doesn't exists!<br>";
					break;
				case 118:
					return "Model <b>" . $iObject . "</b> doesn't exists!<br>";
					break;
				case 150:
					return "View <b>" . $iObject . "</b> doesn't exists!<br>";
					break;
				case 182:
					return "Couldn't connect to MySQL server <b>" . $iObject . "!</b><br>";
					break;
				case 214:
					return "Couldn't select database <b>" . $iObject . "!</b><br>";
					break;
				case 246:
					return "Couldn't run MySQL request:<br><pre>" . $iObject . "</pre>";
					break;
				case 0:
					return "Unknown error with <b>" . $iObject . "</b><br>";
					break;
				default:
					return "Unknown error with <b>" . $iObject . "</b><br>";
					break;
			}
		}
		
		function loadClass( $iClassName )
		{
			$classFile = $_SERVER['DOCUMENT_ROOT'] . "/core/" . $iClassName . ".class.php";
			if(file_exists($classFile)) {
				include $classFile;
			}
			else {
				$this->error(64, $iClassName);
			}
		}
		
		function getConfig( $iParameter )
		{
			global $config;
			return $config[$iParameter];	
		}
		
		function setVar( $iVarName, $iVarValue )
		{
			global $var;
			$var[$iVarName] = $iVarValue;
		}
		
		function getVar( $iVarName )
		{
			global $var;
			if(isset($var[$iVarName])) {
				return $var[$iVarName];
			}
			else {
				return $this->error(32, $iVarName);
			}
		}
		
	}

?>