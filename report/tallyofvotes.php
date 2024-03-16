
 <?php
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

?>
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
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Tally of Votes</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

                <div class="features">
				   			 <form class=" wow fadeInDown" action="controller.php?action=delete" Method="POST">
								<table id="" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">

								  <thead>
								  	<tr>
								  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Candidate Name </th>
								  		<th width="14%">No. of Votes</th>

								  		<!-- <th>Status</th> -->
								  		<th width="14%" >PartyList</th>

								  	</tr>
								  </thead>
								  <tbody>

                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>
                  <tr>




                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='President' AND 'PartyList'='PartyList' ORDER BY Lastname asc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td>' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>

                  <tr>
                    <td colspan="2"><h4 align="center">Vice-President</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Vice-President' AND 'PartyList'='PartyList' ORDER BY Lastname asc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>

                  <tr>
                    <td colspan="2"><h4 align="center">Secretary</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Secretary' AND 'PartyList'='PartyList' ORDER BY Lastname asc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Treasurer</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Treasurer' AND 'PartyList'='PartyList' ORDER BY Lastname asc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();
foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';
}
?>
                  <tr>
                    <td colspan="2"><h4 align="center">College-Babaa</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='College-Babaa' AND 'PartyList'='PartyList' ORDER BY Lastname asc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>
                    <tr>
                  <td colspan="2"><h4 align="center">College-Mamaa</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='College-Mamaa' AND 'PartyList'='PartyList' ORDER BY TotalVotes desc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>

                    <tr>
                  <td colspan="2"><h4 align="center">Games-Captain</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Games-captain' AND 'PartyList'='PartyList' ORDER BY TotalVotes desc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';

}
?>
                    <tr>
                  <td colspan="2"><h4 align="center">Class-Rep</h4></td>
                  </tr>
                   <?php

$sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='Class-Rep' AND 'PartyList'='PartyList' ORDER BY TotalVotes desc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
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
                          AND `Position`='Class-Secretary' AND 'PartyList'='PartyList' ORDER BY TotalVotes desc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
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
                          AND `Position`='Dorm-Head' AND 'PartyList'='PartyList' ORDER BY TotalVotes desc";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

foreach ($cur as $row) {
    # code...
    echo '<tr>';
    echo '<td class="col-lg-8">' . $row->Lastname . ', ' . $row->Firstname . '</td>';
    echo '<td class="col-lg-3">' . $row->TotalVotes . '</td>';
    echo '<td class="col-lg-3">' . $row->PartyList . '</td>';
    echo '</tr>';
    

}
?>

                   </table>
                   <a class="btn btn-primary" target="_blank" href="tallyofvotes_print.php">Print</a>
                 </div><!--/.services-->
              </div><!--/.row-->
          </div><!--/.container-->
          <?php
      
      ?>



