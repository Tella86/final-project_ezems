<?php
   if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
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
.search_panel{
  margin-bottom: 5px;
}
.Search_date{
  font-size:15px;
  height:34px;
  width:160px;
}
.Search_partylist{
  font-size:15px;
  height:34px;
  width:160px;
}
.Search_partylist > option {
  padding: 6px;
  color: #000;
}
</style>
      <section id="feature" class="transparent-bg">
        <div class="container"> 
          <div class="col-md-12">
          <form action="index.php?view=attendance" method="POST" >
            <div class="row">
              <div class="search_panel pull-right">
              <label>Date :</label> 
               <input class="Search_date date_pickerfrom" size="11" 
                                  value="<?php Date('m/d/Y') ?>" 
                                  data-date="<?php Date('m/d/Y') ?>" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text"   name="attenddate" id="datemask2">
                  <!-- <label>To :</label>
                  <input class="Search_date date_pickerfrom" size="11" 
                                  value="" 
                                  data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text" value=""  name="from" id="datemask2"> -->
                   <select name="Attendance"  class="Search_partylist Attendance"> 
                        <option value="">Select Course</option>
                       <?php   
                          $mydb->setQuery("SELECT CourseID,`CourseCode`, c.`Description`,`Department`
                                  FROM  `tblcourse` c, `tbldepartment` d WHERE c.DepartmentID=d.DepartmentID");
                          $cur = $mydb->loadResultList();

                        foreach ($cur as $result) {              
                          # code... 
                           echo '<option value="'.$result->CourseCode.'">'.$result->CourseCode.'</option>';  
                          }
                        ?>
                     </select>   
                     <select name="YearLevel"  class="Search_partylist YearLevel"> 
                      <option value="">Select Year Level</option>
                       <option value="First">First</option>
                       <option value="Second">Second</option>
                       <option value="Third">Third</option>
                       <option value="Fourth">Fourth</option>
                     </select>  
                    <button class="btn btn-default" type="submit" id="search_attendance"><i class="fa fa-go">GO</i></button> 
                </div>
            </div>
            
           <div class="center wow fadeInDown"> 
                  <h2 class="page-header">Attendance Report</h2>  
                <p class="lead"> <?php echo isset($_POST['attenddate']) ? 'As of '. $_POST['attenddate'] : '' ; ?><br/>
                               <?php echo isset($_POST['Attendance']) ?  'Course :'.  $_POST['Attendance'] : '' ; ?><br/>
                               <?php echo isset($_POST['YearLevel']) ?  'Year :'.  $_POST['YearLevel'] : '' ; ?> </p>
            </div>
            <div id="error_msg" align="center"></div>

            <div class="row">
                <div class="features">
                  <?php 

                  if (isset($_POST['Attendance'])) {
                    # code...
                   ?>
                   <table id="" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
                
                  <thead>
                  <tr>
                    <th colspan="2"></th> 
                    <th colspan="2"><center>AM</center></th>
                    <th colspan="2"><center>PM</center></th>
                  </tr>
                    <tr>
                      <th>Student</th>
                      <th>Date</th>
                      <th width="150px">Time-In</th>  
                      <th width="150px">Time-Out</th>
                      <th width="150px">Time-In</th>  
                      <th width="150px">Time-Out</th>  
                    </tr> 
                  </thead> 
                  <tbody>
                    <?php  
                      @$attenddate = date_format(date_create($_POST['attenddate']),'Y-m-d');

                      $mydb->setQuery("SELECT * FROM `tbltimetable` t, `tblstudent` s,`tblcourse` c
                               WHERE t.`StudentID`=s.`StudentID` AND s.`CourseID`=c.`CourseID` 
                               AND c.`CourseCode` ='{$_POST['Attendance']}' AND Date(`AttendDate`) ='{$attenddate}' AND `YearLevel`='{$_POST['YearLevel']}' ORDER BY TimeTableID desc");

                      $cur = $mydb->loadResultList();

                    foreach ($cur as $result) { 
                      echo '<tr>';
                      echo '<td>'. $result->Firstname.','. $result->Lastname.' '. $result->Middlename.'</td>';
                      echo '<td>'. date_format(date_create($result->AttendDate),'M. d, Y').'</td>'; 
                      echo '<td>'. $result->TimeInAM.'</td>'; 
                      echo '<td>'. $result->TimeOutAM.'</td>';  
                      echo '<td>'. $result->TimeInPM.'</td>'; 
                      echo '<td>'. $result->TimeOutPM.'</td>';
                       
                      echo '</tr>';
                    } 
                    ?>
                  </tbody>
                  
                </table> 
                            
                 <?php }else{
                    echo "<h2 class='center'>No Record</h2>";
                    } ?>
                 </div><!--/.services-->
                </div><!--/.row-->  
              </form>
             </div>
          </div><!--/.container-->
      </section><!--/#feature-->

<div class="container">
  <div class="row">
    <form action="attendance_print.php" method="POST" target="_blank">
    <input type="hidden" name="Attendance" value="<?php echo isset($_POST['Attendance']) ? $_POST['Attendance'] : ''; ?>">
    <input type="hidden" name="attenddate" value="<?php echo isset($_POST['attenddate']) ? $_POST['attenddate'] : ''; ?>">
    <input type="hidden" name="YearLevel" value="<?php echo isset($_POST['YearLevel']) ? $_POST['YearLevel'] : ''; ?>">
   <button class="btn btn-primary" target="_blank" href="">Print</button> 
   </form>
  </div>
</div>