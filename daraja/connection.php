<?php 
    $servername = "localhost";
    $username = "root";
    $password = "Elon2508/*-";
    $db_name = "mpesa";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    
    ?>