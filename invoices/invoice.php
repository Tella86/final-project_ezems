<?php
function RandomSourceCode()
{
    $var = "EZEMS0123456789ABCDFGHIJKLMNOPQRSTUVWXY";
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
$confirmation = RandomSourceCode();
// echo $confirmation;
$_SESSION['confirmation'] = $confirmation;
?>
<?php
function hidePrintButton($printinvoice) {
    if ($printinvoice == 'paid') {
        // Invoice is paid, so hide the print button
        echo '<style>.print-button { display: none; }</style>';
    } else {
        // Invoice is not paid, so display the print button
        echo '<style>.print-button { display: block; }</style>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Form</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    p {
        height: 1px;
    }

    .print-button {
        display: block;
        margin-top: 20px;
    }
    </style>
</head>

<body bgcolor="whitesmoke" onload="window.print();">
    <br>

    <img src="../img/sclogo.png" alt="Company Logo" height="80px" width="80px">


    <center>
        <h3>EZEMS Service Invoice</h3>
    </center>
    <center>
        <P>P.O BOX 1333 - 80108</P>
    </center>
    <center>
        <P>KILIFI</P>
    </center>
    <center>
        <P>TELL:254101086123</P>
    </center>
    
    <form id="invoiceForm" action="contoller.php" method="post">

        <table>
        <?php 
    date_default_timezone_set('Africa/Nairobi');
echo "<div style='text-align: left;'>";
$currentDateTime= date("d-m-Y H:i:s");echo "Invoice Date:" . $currentDateTime;
echo "</div>";
    
    ?>
            <thead>
                <tr>
                <th>Invoice Date</th>
                    <th>Invoice Number</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                <td><input class="form-control input-sm" name="InvoiceDate" type="shown"
                            value="<?php  date_default_timezone_set('Africa/Nairobi');

$currentDateTime= date("d-m-Y H:i:s");echo "" . $currentDateTime;
 ?>" </td>

                    <td><input class="form-control input-sm" name="invoiceNumber" type="shown"
                            value="<?php echo $_SESSION['confirmation']; ?>" </td>
                    <td><select id="description" name="description" required>
                            <option value="Basic Package (kSH.145/Per Voter)">Basic Package (kSH.145/Per Voter)</option>
                            <option value="Standard Package (KSH.35090/P.a)">Standard Package (KSH.35090/P.a)</option>
                            <option value="Premium Package (KSH.150000/Life Time))">Premium Package (KSH.150000/Life Time)</option>
                    </td>
                    <td><input type="number" name="quantity" oninput="calculateTotal(this)"></td>
                    <td><input type="number" name="price" oninput="calculateTotal(this)"></td>
                    <td><input type="text" name="total" readonly></td>
                    <td><input type="text" name="Phone"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <?php 
    // Call the function with the invoice status
    $printinvoice = 'paid'; // Replace this with your actual invoice status
    hidePrintButton($printinvoice); 
    ?>
        <br>
        <button class="print-button" onclick="window.print()">Print Invoice</button>

        <center><input type="button" value="Print Invoice" onclick="window.print()"></center><br>
        <center><button type="submit">submit Invoice</button></center>

    </form>

    <script>
    function calculateTotal(input) {
        const row = input.parentElement.parentElement;
        const quantity = parseFloat(row.querySelector('input[name="quantity"]').value);
        const price = parseFloat(row.querySelector('input[name="price"]').value);
        const total = quantity * price;
        row.querySelector('input[name="total"]').value = isNaN(total) ? '' : total.toFixed(2);
    }
    </script>
</body>
<center><?php include '../incld/footer.php';?></center>

</html>