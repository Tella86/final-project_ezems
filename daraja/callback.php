<?php
include "dbconfig.php";

header("Content-Type: application/json");
$stkCallbackResponse = file_get_contents('php://input');
$logfile = "Mpesastkresponse.json";
$log = fopen($logfile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$data = json_decode($stkCallbackResponse);

// $MerchantResuestID = $data->Body->stkCallback->MerchantResuestID;
// $CheckoutResuestID = $data->Body->stkCallback->CheckoutResuestID;
// $ResultCode = $data->Body->stkCallback->ResultCode;
// $ResultDesc = $data->Body->stkCallback->ResultDesc;
// $Amount = $data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
// $TransactionID = $data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
// $PhoneNumber = $data->Body->stkCallback->CallbackMetadata->Item[4]->Value;
// // //CHECK IF THE TRANSACTION WAS SUCCESSFULL
// if ($ResultCode == 0) {
// //     //STORE THE TRANSACTION DATEALS IN THE DATABASE

// mysqli_query($sq,"INSERT INTO transactions (ID, MerchantRequestID, CheckoutRequestID,ResultCode, Amount, TransactionID, PhoneNumber) VALUES
//  ($MerchantResuestID, '$CheckoutResuestID, '$ResultCode', '$Amount', '$TransactionID', '$PhoneNumber')");
// }
