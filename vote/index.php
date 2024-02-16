<?php

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title = "Student";
$header = $view;
switch ($view) {
    case 'login':
        $content = 'login.php';
        break;

    case 'vote':
        $content = 'vote.php';
        break;

    default:
        $content = 'login.php';
}

require_once $content;
?>
