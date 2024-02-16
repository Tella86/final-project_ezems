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
      <!-- /.row -->
      <!-- title row -->
       <section id="feature" class="transparent-bg">
        <div class="container"> 
          <div class="col-md-12">
          <form action="index.php?view=logs" method="POST" >
            <div class="row">
              <div class="search_panel pull-right">
               <label> Role</label> 
                   <select name="Users" class="Search_Event">
                     <option>All</option>
                      <option value="Administrator">Administrator</option>
                      <option value="SSG">Eng.Ziroh</option>  
                    </select>
                 <button class="btn btn-default" name="submit" type="submit" id="search_attendance"><i class="fa fa-go">GO</i></button> 
                </div>
            </div>
 
           <div class="center wow fadeInDown">
                 <h2 class="page-header">User Logs</h2>
                <p class="lead"> <?php echo (isset($_POST['Users'])) ? 'User logs :' .$_POST['Users'] : ''; ?></p>
            </div>

            <div class="row">
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
                           if(isset($_POST['submit'])){ 
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
                            }
                          ?>
                          </tbody>
                        </table> 
                    
                 </div><!--/.services-->
              </div><!--/.row-->  
              </form>
              </div>
          </div><!--/.container-->
      </section><!--/#feature-->
      <div class="container">
  <div class="row">
    <form action="printlogs.php" method="POST" target="_blank">
    <input type="hidden" name="Users" value="<?php echo (isset($_POST['Users'])) ? $_POST['Users'] : ''; ?>"> 
   <button class="btn btn-primary" target="_blank" href="">Print</button> 
   </form>
  </div>
</div>