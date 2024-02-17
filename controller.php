<?php

require_once "confirm_payment.php";
// if (!isset($_SESSION['pswd'])) {
//     // redirect("confirm_payment.php");
//     // $confirmation = RandomSourceCode();
// // echo $confirmation;
//     // $_SESSION['confirmation'] = $confirmation;

// }
function RandomSourceCode()
{
    $var = "012STU34ABCDEFGHIJK789LMNOPQR56VWXYZ";
    srand((double) microtime() * 1000000);
    $i = 0;
    $rand_Code = '';
    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($var, $num, 1);
        $rand_Code = $rand_Code . $tmp;
        $i++;
    }
    return $rand_Code;
}
?>
<h1>
	<center>
<?php
// echo RandomSourceCode();
?>
</h1>
<center><h9></h9></center>
<br>
<!-- <center><button><a href="creditional.php" class="btn btn-primary">Get Login Details </a></button></center> -->
</div>
</center>
</body>
</html>