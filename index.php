<?php
require_once "include/initialize.php";

if (!isset($_SESSION['ACCOUNT_ID'])) {
    // redirect(web_root . "login.php");
    redirect(web_root . "m.php");

}
$content = 'home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
    case '1':
        $title = "Home";
        $content = 'home.php';
        break;
    case '2':
        $title = "Mission Vision";
        $content = 'about.php';
        break;
    case '3':
        $title = "School History";
        $content = 'history.php';
        break;
    case '4':
        $title = "Developers";
        $content = 'developers.php';
        break;
    default:
        $title = "Home";
        $content = 'home.php';
}
require_once "theme/templates.php";
