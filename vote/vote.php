 <?php
require_once "../include/initialize.php";
if (!isset($_SESSION['CVCodeNo'])) {
    redirect(web_root . "vote/index.php?view=login");
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

 	<div class="col-lg-4 row" style="float-left"><img src="../img/sclogo.png"></div>
</head><!--/head-->

<body class="homepage" >

 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class=" row center wow fadeInDown">
            <h2 class="">Vote Now</h2>
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


                        <form class="form-horizontal span6 " action="controller.php?action=votingproccess" method="POST">
                             <div class="form-group">
                              <div class="col-md-12">
                                <label class="col-md-4 control-label" for=
                                "President">SOFTWARE PROGRAMER :</label>

                                <div class="col-md-8">

                                  <select class="form-control select2" name="President">
                                  <!-- <input type="radio" name="President" value="option1"> -->
                                    <option value="">Select</option>
                                      <?php
$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c WHERE s.`StudentID`=c.`StudentID` AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) AND `Position`='President'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    echo '<option value=' . $result->StudentID . '>' . $result->Lastname . ', ' . $result->Firstname . '</option>';
    echo $row['StudPhoto'];
}
?>

                                  </select>

                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="col-md-4 control-label" for=
                                "VicePresident">Vice-President:</label>

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
                                <label class="col-md-4 control-label" for=
                                "Secretary">Secretary:</label>

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
                                <label class="col-md-4 control-label" for=
                                "Treasurer">Treasurer:</label>

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
                                 <label class="col-md-4 control-label" for=
                                 "College-Babaa">College-Babaa:</label>

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
                                <label class="col-md-4 control-label" for=
                                "College-Mamaa">College-Mamaa:</label>

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
                                 <label class="col-md-4 control-label" for=
                                 "Games-Captain">Games-Captain:</label>

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
                                 <label class="col-md-4 control-label" for=
                                 "Class-rep">Class-Rep:</label>

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
                                 <label class="col-md-4 control-label" for=
                                 "Class-Secretary">Class-Secretary:</label>

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
                                 <label class="col-md-4 control-label" for=
                                 "Dorm-Head">Dorm-Head:</label>

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
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8">
                           <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-vote fw-fa"></span>  vote</button>
                              <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                           </div>
                        </div>
                        </div>
                  </form>


                 </div>


                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->

    <footer id="footer" class="midnight-blue" style="background-color:#663399">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023-2024 <a target="_blank" href="<?php echo web_root; ?>" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ENG.ZIROH Events Tallying System</a>. All Rights Reserved.
                </div>

            </div>
        </div>
    </footer><!--/#footer-->


<script src="../jquery/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

    <!-- DataTables JavaScript -->
<script src="../select2/select2.full.min.js"></script>

<script src="../js/selectsenators.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script type="text/javascript" >
     $(function () {
         $(".select2").select2();
     });
</script>

</body>
</html>
