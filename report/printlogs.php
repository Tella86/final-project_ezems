<?php
require_once("../include/initialize.php");
//   if(!isset($_SESSION['USERID'])){
//   redirect(web_root."index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eng.Ziroh Event Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- core CSS -->
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
          <i class="fa fa"></i>Eng.Ziroh Event Management System
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
         <div class="center wow fadeInDown">
                 <h2 >User Logs</h2>
                <p class="lead"> <?php echo (isset($_POST['Users'])) ? 'User logs :' .$_POST['Users'] : ''; ?></p>
            </div>
         <div class="features">

            <table class="table table-striped table-bordered">
                          <thead>
                          <tr>
                            <th>Name.</th>
                            <th>Date</th> 
                            <th>User Type</th> 
                            <th>Log Mode</th>
                             
                          </tr>
                          </thead>
                          <tbody>
                           <?php 
                               if ($_POST['Users']=="All") {
                                # code...
                                  $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                                    WHERE l.`USERID`=u.`ACCOUNT_ID`" ; 
                                  $mydb->setQuery($sql); 
                                  $cur = $mydb->loadResultList(); 
                                  foreach ($cur as $result) {
                                         ?>
                                        <tr> 
                                         <td><?php echo $result->ACCOUNT_NAME;?></td>
                                           <td><?php echo $result->LOGDATETIME;?></td>
                                          <td><?php echo $result->LOGROLE;?></td>
                                          <td><?php echo $result->LOGMODE;?></td> 
                                        </tr>
                                        <?php        
                                    }  
                              }else{
 
                              # code...
                                $sql ="SELECT * FROM `tbllogs`  l ,`useraccounts` u
                                    WHERE l.`USERID`=u.`ACCOUNT_ID` AND  LOGROLE LIKE '%" . $_POST['Users'] ."%'" ; 
                                $mydb->setQuery($sql); 
                                $cur = $mydb->loadResultList(); 
                                  foreach ($cur as $result) {
                                       ?>
                                      <tr> 
                                       <td><?php echo $result->ACCOUNT_NAME;?></td>
                                         <td><?php echo $result->LOGDATETIME;?></td>
                                        <td><?php echo $result->LOGROLE;?></td>
                                        <td><?php echo $result->LOGMODE;?></td> 
                                      </tr>
                                      <?php 
                                        
                                  }  
                                
                              }  
                          ?>
                          </tbody>
                        </table> 
  
         
        </div>  
          
 
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer> 
</footer>
</html>
