<?php
require_once("../include/initialize.php");
// 	if(!isset($_SESSION['USERID'])){
// 	redirect(web_root."index.php");
// }
 // if (!isset($_SESSION['justadmin_ID'])){
 // 	redirect(WEB_ROOT ."admin/login.php");
 // }
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'tallyofvotes' :  
	$title ='Tally of Votes';
		$content    = 'tallyofvotes.php';		
		break;
	case 'candidate' :
	$title ='Candidate';
		$content    = 'candidates_report.php';		
		break;
	case 'attendance' : 
	$title ='Attendance'; 
		$content    = 'attendance_report.php';		
		break; 
	case 'event' : 
	$title ='Events'; 
		$content    = 'event_report.php';		
		break; 
	case 'logs' : 
	$title ='Logs'; 
		$content    = 'userlogs.php';		
		break; 
	case 'electionwinners' :  
	$title ='Election Winners';
		$content    = 'electionwinners.php';		
		break;
 
	  default : 
	  redirect(web_root.'index.php');		
}
  // include '../modal.php';
require_once '../theme/Templates.php';
?>


  
