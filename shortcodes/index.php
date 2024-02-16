<?php
require_once("../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="ShortCodes"; 
 $header=$view; 
switch ($view) {
	case 'generatecodes' :
		$content    = 'generatecodes.php';		
		break;

	case 'printcodes' :
		$content    = 'printcodes.php';		 
		break;

	default :
		$content    = 'generatecodes.php';		
}
require_once ("../theme/templates.php");
?>
  
