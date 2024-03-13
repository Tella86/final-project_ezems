<?php
include 'invoice.php';





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
