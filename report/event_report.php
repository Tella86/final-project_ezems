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
  /*border-top: 2px solid #ddd;*/
}
.table_print .table_print {
  background-color: #fff;
}
.search_panel{
  margin-bottom: 5px;
}
.Search_Event{
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
          <form action="index.php?view=event" method="POST" >
            <div class="row">
              <div class="search_panel pull-right">
               <label>Date :</label> 
               <input class="Search_Event date_pickerfrom" size="11" 
                                  value="<?php Date('m/d/Y') ?>" 
                                  data-date="<?php Date('m/d/Y') ?>" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text"   name="eventdate" id="datemask2">
               <input class="Search_Event " data-link-format="yyyy-mm-dd" type="text"   name="events" id="events" placeholder="Search for events">
                    <button class="btn btn-default" type="submit" id="search_attendance"><i class="fa fa-go">GO</i></button> 
                </div>
            </div>
            
           <div class="center wow fadeInDown"> 
                  <h2 class="page-header">Event Report</h2>  
                <p class="lead"> <?php echo isset($_POST['events']) ? 'Events Date :' . $_POST['eventdate']  : '' ; ?><br/>
                       <?php echo isset($_POST['events']) ? strtoupper($_POST['events'])   : '' ; ?> </p>
            </div>
            <div id="error_msg" align="center"></div>

            <div class="row">
                <div class="features">
                  <?php 

                  if (isset($_POST['events']))  {

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

                       $sql = "SELECT `Event`, e.`Description`, `EventDate`, `EventTime`, `Incharge`,`Department` FROM `tblevents` e, tbldepartment d 
                               WHERE e.`Incharge`=d.`DepartmentID` AND Date(EventDate)= '".date("Y-m-d",strtotime($eventdate))."' 
                               AND Event like '%".strtoupper($_POST['events'])."%'";
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
                </div><!--/.row-->  
              </form>
             </div>
          </div><!--/.container-->
      </section><!--/#feature-->

<div class="container">
  <div class="row">
    <form action="event_print.php" method="POST" target="_blank">
    <input type="hidden" name="events" value="<?php echo isset($_POST['events']) ? $_POST['events'] : ''; ?>">
    <input type="hidden" name="eventdate" value="<?php echo isset($_POST['eventdate']) ? $_POST['eventdate'] : ''; ?>"> 
   <button class="btn btn-primary" target="_blank" href="">Print</button> 
   </form>
  </div>
</div>