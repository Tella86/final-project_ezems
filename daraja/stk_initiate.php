<?php

if (!isset($_SESSION['ACCOUNT_ID'])) {
// redirect(web_root . "login.php");

}
if (isset($_POST['submit'])) {

    date_default_timezone_set('Africa/Nairobi');

    # access token
    $consumerKey = 'lTPKZzbSmeoT0Hx2kJMGOMQwvGUCvI7G'; //Fill with your app Consumer Key
    $consumerSecret = 'gp7uF5GfK1EoBIjI'; // Fill with your app Secret

    # define the variales
    # provide the following details, this part is found on your test credentials on the developer account
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
    $Amount = $_POST = 'amount';

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
    // $CallBackURL = 'http://ezems.infinityfreeapp.com/callback_url.php';
    $CallBackURL = 'https://funny-newt-personally.ngrok-free.app/sems/callback.php';
  
    


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
        'Amount' => '1',
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

    echo $curl_response;
    header("Location: confirm_payment.php");
}
