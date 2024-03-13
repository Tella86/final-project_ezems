<?php
require_once("../include/initialize.php");
  if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Event Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">

<link href="<?php echo web_root; ?>css/nav-button-custom.css" rel="stylesheet" media="screen">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h4 class="page-header ">
          <i class="fa fa"></i>EZEMS
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
             <div class="center wow fadeInDown"> 
                  <h2 class="page-header">Event Report</h2>  
                <p class="lead"> <?php echo isset($_POST['events']) ? 'Events Date :' . $_POST['eventdate']  : '' ; ?><br/>
                       <?php echo isset($_POST['events']) ? strtoupper($_POST['events'])   : '' ; ?> </p>
            </div>
            <div id="error_msg" align="center"></div> 
                <div class="features">
                  <?php 

                  if (isset($_POST['events'])) {

                     @$eventdate = date_format(date_create($_POST['eventdate']),'Y-m-d'); 
                   ?>
                  <table   class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
                
                  <thead>
                    <tr>
                      <!-- <th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID</th> -->
                      <th> 
                      <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
                       Events</th>
                      <th>Description</th>  
                      <th>Date</th>
                      <th>Time</th> 
                      <th>Incharge</th>   
                    </tr> 
                  </thead> 
                  <tbody>
                    <?php  

                      $sql = "SELECT `Event`, e.`Description`, `EventDate`, `EventTime`, `Incharge`,`Department` FROM `tblevents` e, tbldepartment d WHERE e.`Incharge`=d.`DepartmentID` AND Date(EventDate)= '{$eventdate}' AND Event like '%".strtoupper($_POST['events'])."%'";
                
                      $mydb->setQuery($sql); 
                      $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                       
                      echo '<tr>';
                      echo '<td> '. $result->Event.'</td>';
                      echo '<td>'. $result->Description.'</td>';
                      echo '<td>'. date_format(date_create($result->EventDate),'M d, Y') .'</td>';
                      echo '<td>'. $result->EventTime.'</td>'; 
                      echo '<td>'. $result->Department.'</td>'; 
                      echo '</tr>';
                    } 
                    ?>
                  </tbody>
                  
                </table>
                            
                 <?php }else{
                    echo "<h2 class='center'>No Record</h2>";
                    } ?>
                 </div><!--/.services--> 
          
 
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer>
</footer>
</html>
