<?php 
 if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."index.php");
   }

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);
 @$EventID = $_GET['id'];
    if($EventID==''){
  redirect("index.php");
}
  $event = New Event();
  $ev = $event->single_event($EventID);

 
 ?> 

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
             <h2 class="page-header">Update Event</h2>
            <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>

        <div class="row">
            <div class="features">

            
                   <form class="form-horizontal span6  wow fadeInDown" action="controller.php?action=edit" method="POST" enctype="multipart/form-data"> 
                                

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Event">Event:</label>

                                <div class="col-md-8">
                                 <input  id="EventID" name="EventID"  type="hidden" value="<?php echo $ev->EventID;?>"> 
                                   <input class="form-control input-sm" id="Event" name="Event" placeholder=
                                      "Event" type="text" value="<?php echo $ev->Event;?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete=""off>
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Description">Description:</label>

                                <div class="col-md-8">
                                <textarea class="form-control input-sm" id="Description" name="Description" placeholder=
                                      "Description"   required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete=""off><?php echo $ev->Description;?></textarea> 
                                </div>
                              </div>
                            </div> 

                           
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EventDate">Date:</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input id="datemask2" name="EventDate"  value="<?php echo $ev->EventDate;?>" type="text" class="form-control " size="7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required>
                                      </div>
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EventTime">Time
                                :</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-calendar"></i>
                                        </div> 
                                        <input id="datetime12" name="EventTime"  value="<?php echo $ev->EventTime;?>" type="text" class="form-control " size="7" data-inputmask="'alias': 'hh:ss'" data-mask required>
                                      </div>
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "DEPT_ID">Incharge:</label>

                                <div class="col-md-8">
                                 <select class="form-control input-sm" name="DEPT_ID" id="DEPT_ID"> 
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tbldepartment` WHERE DepartmentID=". $ev->Incharge);
                                      $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) {
                                        echo '<option value='.$result->DepartmentID.' >'.$result->Department.' [ '.$result->Description .' ]</option>';

                                      }
                                    ?> 
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tbldepartment` WHERE DepartmentID!=". $ev->Incharge);
                                      $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) {
                                        echo '<option value='.$result->DepartmentID.' >'.$result->Department.' [ '.$result->Description .' ]</option>';

                                      }
                                    ?>

                                   
                                  </select> 
                                </div>
                              </div>
                            </div>

                    
                       <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "idno"></label>

                                <div class="col-md-8">
                                 <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                                    <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                                 </div>
                              </div>
                            </div> 
                  </form>
       


            
            </div><!--/.services-->
        </div><!--/.row-->  
    </div><!--/.container-->
</section><!--/#feature-->
 

<!-- <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    
    </div> 
</section> --><!--/#bottom-->
       