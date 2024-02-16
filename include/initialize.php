<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'SEMS');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php");
require_once(LIB_PATH.DS."autonumbers.php");
require_once(LIB_PATH.DS."departments.php");
require_once(LIB_PATH.DS."courses.php"); 
require_once(LIB_PATH.DS."sidebarFunction.php");  
require_once(LIB_PATH.DS."events.php");  
require_once(LIB_PATH.DS."students.php"); 
require_once(LIB_PATH.DS."candidates.php"); 
require_once(LIB_PATH.DS."eventswinners.php"); 
require_once(LIB_PATH.DS."verifytimeintimeout.php");  
require_once(LIB_PATH.DS."timetable.php");   
 

require_once(LIB_PATH.DS."database.php");
?>


