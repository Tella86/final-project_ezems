 <?php
require_once "../include/initialize.php";

if (!isset($_SESSION['CVCodeNo'])) {
    redirect(web_root . "vote/index.php?view=login");
    redirect("thankyou.php");
}
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta charset="utf-8">
     <meta name="apple-mobile-web-app-capable" content="yes" />
     <meta content="text/html; charset=utf-8" http-equiv="content-type" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Vote | EZEMS Tallying</title>
     <script type="text/javascript" src="admin/js/bootstrap.js"></script>
     <script type="text/javascript" src="admin/js/bootstrap-transition.js"></script>
     <script type="text/javascript" src="admin/js/bootstrap-collapse.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
     <script>
     $(function() {
         $("#datepicker").datepicker();
     });
     </script>




     <!-- --hover pop up -->
     <script src="admin/js/main.js" type="text/javascript"></script>
     <script src="admin/js/mouseover_popup.js" type="text/javascript"></script>


     <div style="display: none;
 position: absolute;
 z-index:100;
 color:white;
 width:auto;
 height:auto;" id="preview_div"></div>






     <script type="text/javascript" src="admin/js/qtip/jquery.qtip.min.js"></script>
     <link href="admin/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">

     <!-- <script type="text/javascript" language="JavaScript"> -->
     <!-- core CSS -->
     <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
     <!-- datetime picker CSS -->
     <link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">
     <link rel="shortcut icon" href="images/ico/favicon.ico">
     <!-- <div class="col-lg-4 row" style="float-left"><img src="../img/sclogo.png"></div> -->
     <script type="text/javascript" src="admin/js/eye.js"></script>
     <script type="text/javascript" src="admin/js/spacegallery.js"></script>
     <script type="text/javascript" src="admin/js/layout.js"></script>

     <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" media="screen, projection" />
     <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" media="screen, projection" />
     <link rel="stylesheet" type="text/css" href="admin/css/bootstrap-responsive.css" media="screen, projection" />
     <link rel="stylesheet" href="admin/css/font-awesome.css">

     <link rel="stylesheet" type="text/css" href="admin/css/Home.css" media="screen, projection" />


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <!--/head-->

 <body class="homepage">

     <?php check_message();?>
     <section id="feature" class="transparent-bg">
         <div class="container">
             <div class=" row center wow fadeInDown">
                 <h2 class="">Vote Now</h2>
                 <h3>KINDLY VOTE WISELY & MAINTEIN PEACE</h3>
             </div>

             <div class="row">
                 <div class="features">

                     <div class="col-lg-6">
                         <!-- 	<div class="col-lg-2" style="float-left">
                 		<img src="../img/sclogo.png" style="width:100px;height:100px;">
                 	</div>
                 	<div class="col-lg-2" style="float-left">
                 		<img src="../img/sclogo.png" style="width:100px;height:100px;">
                 	</div> -->

                     </div>
                     <div class="col-lg-6">

                         <form class="form-horizontal span6 " action="controller.php?action=votingproccess"
                             method="POST">
                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="President">President :</label>

                                     <thead>
                                         <tr>
                                             <th>
                                         </tr>
                                     </thead>
                                     <?php

$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='President'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();
foreach ($cur as $result) {

    echo '<tr>';
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="President">

                                             <option value="">Select</option>



                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='President'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();
foreach ($cur as $result) {

    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="VicePresident">Vice-President:</label>
                                     <thead>
                                         <tr>
                                             <th>
                                         </tr>
                                     </thead>
                                     <?php

$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Vice-President'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="VicePresident">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Vice-President'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>
                                         </select>

                                     </div>
                                 </div>
                             </div>



                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="Secretary">Secretary:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php

$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Secretary'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Secretary">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Secretary'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>
                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="Treasurer">Treasurer:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php

$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Treasurer'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Treasurer">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Treasurer'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="College-Babaa">College-Babaa:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='College-Babaa'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="College-Babaa">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='College-Babaa'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="College-Mamaa">College-Mamaa:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='College-Mamaa'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="College-Mamaa">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='College-Mamaa'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>
                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="Games-Captain">Games-Captain:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Games-Captain'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Games-Captain">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Games-Captain'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>
                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="Class-rep">Class-Rep:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Class-Rep'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Class-Rep">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Class-Rep'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label"
                                         for="Class-Secretary">Class-Secretary:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Class-Secretary'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Class-Secretary">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Class-Secretary'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>

                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="Dorm-Head">Dorm-Head:</label>
                                     <tr>
                                         <th>
                                     </tr>
                                     </thead>
                                     <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Class-Secretary'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<td><img width="80" height="80" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '</tr>';
}
?>
                                     <div class="col-md-8">
                                         <select class="form-control select2" name="Dorm-Head">
                                             <option value="">Select</option>
                                             <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='Dorm-Head'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';

}
?>

                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group sens2" id="sens2">
                             </div>
                             <div class="form-group sens3" id="sens3">
                             </div>
                             <div class="form-group sens4" id="sens4">
                             </div>
                             <div class="form-group sens5" id="sens_5">
                             </div>
                             <div class="form-group sens6" id="sens_6">
                             </div>
                             <div class="form-group sens7" id="sens_7">
                             </div>
                             <div class="form-group sens8" id="sens_8">
                             </div>
                             <div class="form-group">
                                 <div class="col-md-12">
                                     <label class="col-md-4 control-label" for="idno"></label>

                                     <div class="col-md-8">
                                         <button class="btn btn-primary btn-sm" name="save" type="submit"><span
                                                 class="fa fa-vote fw-fa"></span> SUBMIT VOTE</button>
                                         <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                                     </div>
                                 </div>
                             </div>
                         </form>
                         <script>
                         function showAlert(message) {
                             document.getElementById('alertMessage').innerHTML = message;
                             document.getElementById('customAlert').style.display = 'block';
                         }

                         function closeAlert() {
                             document.getElementById('customAlert').style.display = 'none';
                         }
                         </script>>

                     </div>
                 </div>
             </div>
         </div>
         </div>


         </div>
         <!--/.services-->
         </div>
         <!--/.row-->
         </div>
         <!--/.container-->
     </section>
     <!--/#feature-->

     <footer id="footer" class="midnight-blue" style="background-color:#663399">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     &copy; 2023-2024 <a target="_blank" href="<?php echo web_root; ?>"
                         title="Free Twitter Bootstrap WordPress Themes and HTML templates">EZEMS</a>. All Rights
                     Reserved.
                 </div>

             </div>
         </div>
     </footer>
     <!--/#footer-->



     <script src="../jquery/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>

     <!-- DataTables JavaScript -->
     <script src="../select2/select2.full.min.js"></script>

     <script src="../js/selectsenators.js"></script>

     <!-- Page-Level Demo Scripts - Tables - Use for reference -->

     <script type="text/javascript">
     $(function() {
         $(".select2").select2();
     });
     </script>

 </body>

 </html>