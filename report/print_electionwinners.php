<?php
require_once "../include/initialize.php";
//   if(!isset($_SESSION['USERID'])){
//   redirect(web_root."index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EZEMS</title>
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
    <div class="row">
        <h2 align="center">EZEMS Election Winners</h2>
    </div>
    <div class="row"  style="padding-bottom:10px">
        <?php

# code...
echo "<h4 align='center'> As of " . date('m/d/Y - h:i') . "</h4>";

?>

      </div>
    <div class="row">

    <div class="features">
				   			 <form class=" wow fadeInDown" action="controller.php?action=delete" Method="POST">
								<table bordered="1" id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">

								  <thead>
								  	<tr>
								  		<th> <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> -->Candidate Name  </th>
								  		<th width="14%">No. of Votes</th>

								  		<!-- <th>Status</th> -->
								  		<th width="14%" >PartyList</th>

								  	</tr>
                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>


                  <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='President' And 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes . '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                  <tr>
                    <td colspan="2"><h4 align="center">Vice-President</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Vice-President' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                  <tr>
                    <td colspan="2"><h4 align="center">Secretary</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Secretary' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Treasurer</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Treasurer' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

<tr>
                    <td colspan="2"><h4 align="center">College-Babaa</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='College-Babaa' AND 'PartyList'='PArtyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes . '</td>';
    echo '<td>' . $result->PartyList . '</td>';
    echo '</tr>';

}
?>

<tr>
                    <td colspan="2"><h4 align="center">College-Mamaa</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='College-Mamaa' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes . '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                  <tr>
                    <td colspan="2"><h4 align="center">Games-Captain</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Games-Captain' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Class-Rep</h4></td>
                  </tr>
                   <?php

$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Class-Rep' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1");
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes . '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Class-Secretary</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Class-Secretary' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 1";
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList .  '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Dorm-Head</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Dorm-Head' AND 'PartyList'='PartyList' ORDER BY TotalVotes DESC LIMIT 8";
$cur = $mydb->loadResultList();
foreach ($cur as $result) {
    # code...
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $result->Firstname . ' ' . $result->Lastname . ' ' . '</td>';
    echo '<td>' . $result->TotalVotes .  '</td>';
    echo '<td>' . $result->PartyList . '</td>';
    echo '</tr>';

}
?>

                   </table>


        </div>
      </div>


  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer>
  <?php ?>
</footer>
</html>
