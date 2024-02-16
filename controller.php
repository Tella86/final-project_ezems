<?php

require_once "code.php";
if (isset($_SESSION['pswd'])) {
    redirect("confirm_payment.php");
}

$confirmation = RandomSourceCode();
// echo $confirmation;
$_SESSION['confirmation'] = $confirmation;
