<?php

if (isset($_POST['submit'])) {

    date_default_timezone_set('Africa/Nairobi');

    # access token
    $consumerKey = 'lTPKZzbSmeoT0Hx2kJMGOMQwvGUCvI7G'; //Fill with your app Consumer Key
    $consumerSecret = 'gp7uF5GfK1EoBIjI';

    # define the variales
    # provide the following details, this part is found on your test credentials on the developer account
    $Initiator = 'API_Usename';
    // $SecurityCredential = 'FKXl/KPzT8hFOnozI+unz7mXDgTRbrlrZ+C1Vblxpbz7jliLAFa0E/…../uO4gzUkABQuCxAeq+0Hd0A==';
    $CommandID = 'BusinessBuyGoods';
    $SenderIdentifierType = '4';
    $RecieverIdentifierType = '4';
    $PartyA = '7149030';
    $PartyB = '7136632';
    $AccountReference = '353353';
    // $QueueTimeOutURL = 'https://mydomain.com/b2b/businessbuygoods/queue/';
    // $ResultURL = 'https://mydomain.com/b2b/businessbuygoods/result/';

    $BusinessShortCode = '7149030';
    $Passkey = '1059e4e89b1ac704ea6b1b327df0ccaca297e5b31b9ea323c47cc0d87f31bfe1';


    /*
    This are your info, for
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction.
    for developer/test accounts, this money will be reversed automatically by midnight.
     */

    $PartyA = $_POST['phone']; // This is your phone number,
    $AccountReference = 'EZEMS';
    $TransactionDesc = 'Payment';
    $Amount = $_POST['amount'];

    # Get the timestamp, format YYYYmmddhms -> 20181004151020
    $Timestamp = date('YmdHis');

    # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
    $Password = base64_encode($BusinessShortCode . $Passkey . $Timestamp);

    # header for access token
    $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
    $access_token_url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    $initiate_url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

    # callback url
    $CallBackURL = 'https://funny-newt-personally.ngrok-free.app/sems/callback.php';
    // $CallBackURL = 'https://zonetella.wpcomstaging.com/callback/';

    $curl = curl_init($access_token_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
    $result = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $result = json_decode($result);
    $access_token = $result->access_token;
    curl_close($curl);

    # header for stk push
    $stkheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];

    # initiating the transaction
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $initiate_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => '7149030',
        'Password' => $Password,
        'Timestamp' => $Timestamp,
        'TransactionType' => 'CustomerBuyGoodsOnline',
        'Amount' => $Amount,
        'PartyA' => $PartyA,
        'PartyB' => '7136632',
        'PhoneNumber' => $PartyA,
        'CallBackURL' => $CallBackURL,
        'AccountReference' => 'EZEMS',
        'TransactionDesc' => $TransactionDesc,
    );

    $data_string = json_encode($curl_post_data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    $curl_response = curl_exec($curl);
    print_r($curl_response);

    // echo $curl_response;

include "incld/header.php";
    // header("Location: confirm_payment.php");
    // header("Location: m.php");
}
?>
<br><br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Payment</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-o5/Hhx+7dOuigT+5WCnS2qcy5qQGtC1lQRYKqqzoBPltZ0VUz3GElqfb3MtdQdDlWdYhX4+g3qCFtHswY61t5g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>
<body>

<!-- Your payment confirmation icon -->
<center>
<class="divider-vertical"></li>
                        <class="active"><a href="confirm_payment.php">
                                <h3><i class="fas fa-check-circle" style="color: green;"></i>&nbsp;confirm_payment</h3>
                            </a></li></center>
</body>
</html>
