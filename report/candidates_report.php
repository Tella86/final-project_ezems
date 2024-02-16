
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
  /*border-top: 2px solid #ddd;*/
}
.table_print .table_print {
  background-color: #fff;
}

.Search_partylist{
  font-size:15px;
  height:34px;
  width:160px;
}
.Search_partylist > option {
  padding: 6px;
}
</style>
      <section id="feature" class="transparent-bg">
        <div class="container">
          <div class="col-md-12">
          <form action="index.php?view=candidate" method="POST" >
            <div class="row">
              <div class=" pull-right">
                  <label>Search :</label>
                   <select name="PartyList"  class="Search_partylist">
                       <?php
// var_dump($mydb);
$sql = "SELECT distinct(PartyList) FROM `tblcandidate`
                                WHERE DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                                ORDER BY PartyList asc";
$presRes = $mydb->setQuery($sql);
$result = $mydb->executeQuery();
while ($row = $mydb->fetch_array($result)) {
    # code...
    echo '<option value="' . $row['PartyList'] . '">' . $row['PartyList'] . '</option>';
}
?>
                     </select>
                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>

           <div class="center wow fadeInDown">
                  <h2 class="page-header">Line-up of Candidates</h2>
                <p class="lead"><?php echo isset($_POST['PartyList']) ? $_POST['PartyList'] : ''; ?> </p>
            </div>

            <div class="row">
                <div class="features">
                <?php if (isset($_POST['PartyList'])) {
    # code...
    ?>
                <table class="table_print">
                  <tr><th colspan="2"><h4 align="center">President</h4></th></tr>
                  <tr>
                    <th  width="600px">Name</th>
                  </tr>

                   <?php

    $sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='President' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Vice-President' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Secretary' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Treasurer' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
        echo '</tr>';

    }
    ?>
                <table class="table_print">
                  <tr><th colspan="2"><h4 align="center">College-Babaa</h4></th></tr>
                  <tr>
                    <th  width="600px">Name</th>
                  </tr>

                   <?php

    $sql = "SELECT * FROM `tblcandidate` c, `tblstudent` s
                          WHERE c.`StudentID`=s.`StudentID`
                          AND  DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )
                          AND `Position`='College-Babaa' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='College-Mamaa' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Games-Captain' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Class-Rep' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Class-Secretary' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY Lastname asc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
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
                          AND `Position`='Dorm-Head' AND PartyList='" . $_POST['PartyList'] . "' ORDER BY TotalVotes desc";
    $presRes = $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    while ($row = $mydb->fetch_array($result)) {
        # code...
        echo '<tr>';
        echo '<td class="col-lg-8">' . $row['Lastname'] . ', ' . $row['Firstname'] . '</td>';
        echo '</tr>';

    }
    ?>


                   </table>
                  <?php } else {
    echo "<h2 class='center'>No Record</h2>";
}?>
                 </div><!--/.services-->
                </div><!--/.row-->
              </form>
             </div>
          </div><!--/.container-->
      </section><!--/#feature-->

<div class="container">
  <div class="row">
    <form action="candidates_print.php" method="POST">
    <input type="hidden" name="PartyList" value="<?php echo isset($_POST['PartyList']) ? $_POST['PartyList'] : ''; ?>">
   <button class="btn btn-primary" target="_blank" href="">Print</button>
   </form>
  </div>
</div>