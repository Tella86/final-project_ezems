<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = 'Elon2508/*-';
$database = 'dbvoting';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data

$email = $_POST['email'];


    // Prepare SQL statement to insert email into database
    $sql = "INSERT INTO tblsubscription (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for subscribing!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


// Close connection
$conn->close();
?>
