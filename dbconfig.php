<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Elon2508/*-');
define('BD_NAME', 'mpesa');

try {
    $sql = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, BD_NAME);
    if (!$sql) {
        die("Connection failed:" . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Error:" . $e->getMessage();
}
