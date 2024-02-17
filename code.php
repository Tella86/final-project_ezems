<?php
// include 'confirm_payment.html';
?>
<body>
<br>
<br>
<br>

<div class="container" id="wrapper">
<?php
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
echo RandomSourceCode();
?>
</h1>
<center><h9>Copy and Pest the Coed To confirm_payment</h9></center>
<br>
<center><button><a href="confirm_payment.php" class="btn btn-primary">Confirm Transaction </a></button></center>
</div>
</center>
</body>
</html>