<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Elon2508/*-";
$database = "dbvoting";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
header("Content-Type: application/json");
$stkCallbackResponse = file_get_contents('php://input');
$logfile = "Mpesastkresponse.json";
$log = fopen($logfile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);
$data = json_decode($stkCallbackResponse);
// Retrieve form data

$MerchantRequestID = $data->Body->stkCallback->MerchantRequestID;
$CheckoutRequestID = $data->Body->stkCallback->CheckoutRequestID;
$ResultCode = $data->Body->stkCallback->ResultCode;
$ResultDesc = $data->Body->stkCallback->ResultDesc;
$Amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$TransactionID = $data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$TransactionDate = $data->Body->stkCallback->CallbackMetadata->Item[3]->Value;
$PhoneNumber = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value;
// //CHECK IF THE TRANSACTION WAS SUCCESSFULL
if ($ResultCode == 0) {
// Prepare and execute SQL statement
$sql = "INSERT INTO transactions (ResultCode, Amount, TransactionID, TransactionDate, PhoneNumber) VALUES 
( '$ResultCode', '$Amount', '$TransactionID', '$TransactionDate','$PhoneNumber')";
}
if ($conn->query($sql) === TRUE) {
  echo "Car ordered successfully";
  header("location:index.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
