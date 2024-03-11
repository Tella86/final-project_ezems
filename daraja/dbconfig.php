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
$data = json_decode($stkCallbackResponse);
$MerchantResuestID = $data->Body->stkCallback->MerchantResuestID;
$CheckoutResuestID = $data->Body->stkCallback->CheckoutResuestID;
$ResultCode = $data->Body->stkCallback->ResultCode;
$ResultDesc = $data->Body->stkCallback->ResultDesc;
$Amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$TransactionID = $data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$PhoneNumber = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value;
// //CHECK IF THE TRANSACTION WAS SUCCESSFULL
if ($ResultCode == 0) {
// //     //STORE THE TRANSACTION DATEALS IN THE DATABASE

$sq="INSERT INTO transactions (ID, MerchantRequestID, CheckoutRequestID,ResultCode, Amount, TransactionID, PhoneNumber) VALUES
 ($MerchantResuestID, '$CheckoutResuestID, '$ResultCode', '$Amount', '$TransactionID', '$PhoneNumber')";
}