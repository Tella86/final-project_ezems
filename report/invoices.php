<?php
require_once "../include/initialize.php";

if (!isset($_SESSION['ACCOUNT_ID'])) {
    // redirect(web_root . "../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transactions</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->

   <link href="<?php echo web_root; ?>css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">

     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">

 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
 
<style type="text/css">
.table_print {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table_print > thead > tr > th,
.table_print > tbody > tr > th,
.table_print > tfoot > tr > th,
.table_print > thead > tr > td,
.table_print > tbody > tr > td,
.table_print > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  /*border-top: 1px solid #ddd;*/
}
.table_print > thead > tr > th {
  vertical-align: bottom;
  /*border-bottom: 2px solid #ddd;*/
}
.table_print > caption + thead > tr:first-child > th,
.table_print > colgroup + thead > tr:first-child > th,
.table_print > thead:first-child > tr:first-child > th,
.table_print > caption + thead > tr:first-child > td,
.table_print > colgroup + thead > tr:first-child > td,
.table_print > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table_print > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table_print .table_print {
  background-color: #fff;
}
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="shortcut icon" href="images/ico/favicon.ico">

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<?php include_once "templates.php"; ?>
</head>
<br>
<body onload="window.print();">
<div class="wrapper">

  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
      <!-- <div class="col-8"> -->
        <h4 class="page-header ">
          <i class="fa fa"></i>EZEMS Invoices
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
        <h2 align="center">Invoices</h2>
    </div>
    <div class="row"  style="padding-bottom:10px">
        <?php

# code...
echo "<h4 align='center'> As of " . date('m/d/Y - h:i') . "</h4>";

?>
      </div>
      <div class="features">
				   			 <form class=" wow fadeInDown" action="" Method="POST">
								<table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">

								  <thead>
								  	<tr>
								  		<th width="14%"> <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> -->Invoice Date </th>
								  		<th width="14%"> Invoice Number</th>
                                        <th width="14%"> Description</th>
								  		<th width="14%" >Quantity</th>
								  		<th width="14%" >Price</th>
                                          <th width="14%" >Total</th>
								  		<th width="14%" >Phone</th>
                  <!-- <tr><th colspan="2"><h4 align="center">Transactions</h4></th></tr> -->


                   <?php

$mydb->setQuery("SELECT * FROM `tblinvoice`");

$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->InvoiceDate .  '</td>';
    echo '<td>' . $result->InvoiceNumber .  '</td>';
    echo '<td>' . $result->Description  . '</td>';
    echo '<td>' . $result->Quantity . '</td>';
    echo '<td>' . $result->Price . '</td>';
    echo '<td>' . $result->total . '</td>';
    echo '<td>' . $result->Phone . '</td>';
    echo '<td align="center" > 
    <a title="Print Invoice" class="btn btn-danger btn-xs print-invoice-btn" data-invoice-number=
    "<?php echo $result->InvoiceNumber; ?>">Print <span class="fa fa-print fw-fa"></span></a></td>';
    echo '</tr>';

}
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var printButtons = document.querySelectorAll('.print-invoice-btn');

        printButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var invoiceNumber = this.getAttribute('data-invoice-number');
                printInvoice(invoiceNumber);
            });
        });

        function printInvoice(invoiceNumber) {
            // Here, you can fetch the invoice details from the server using AJAX,
            // or generate the invoice HTML on the client-side.
  
            // For demonstration purposes, let's create a simple invoice HTML
            var invoiceContent = `
                <h1>Invoice</h1>
                <p>Invoice Number: ${invoiceNumber}</p>
                <!-- Add more invoice details here -->
            `;

            // Open a new window with the invoice content
            var printWindow = window.open('', '_blank');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Print Invoice</title></head><body>');
            printWindow.document.write(invoiceContent);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            // Wait for the content to be fully loaded before triggering print
            printWindow.onload = function() {
                // Trigger print dialog
                printWindow.print();
            };
        }
    });
</script>

</body>
</html>
