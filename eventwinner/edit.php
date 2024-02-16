<?php 
 if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."index.php");
   }

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);
 @$EWID = $_GET['id'];
    if($EWID==''){
  redirect("index.php");
}
  $EW = New EventWinner();
  $EWin = $EW->single_eventwinner($EWID);

 
 ?> 

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
             <h2 class="page-header">Update Winner</h2>
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
                                <input type="hidden" name="EWID" value="<?php echo  $EWID; ?>">
                                  <select class="form-control select2" name="EventID">
                                    <option>Select</option>
                                      <?php 
                                          $query = "SELECT * FROM `tblevents` WHERE EventID=". $EWin->EventID ;
                                          $mydb->setQuery($query);
                                          $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) {
                                          echo '<option selected value='.$result->EventID.'>'.$result->Event.',( '.$result->Description.' )</option>';

                                        }
                                        ?>
                                         <?php 
                                          $query = "SELECT * FROM `tblevents` WHERE EventID<>". $EWin->EventID ;
                                          $mydb->setQuery($query);
                                          $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) {
                                          echo '<option value='.$result->EventID.'>'.$result->Event.',( '.$result->Description.' )</option>';

                                        }
                                        ?>
                                  </select>
                                   
                                </div>
                              </div>
                            </div>  
<!-- 
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EWDate">Date of Event:</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="datemask2" name="EWDate"  value="" type="text" class="form-control " size="7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                      </div>
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EWTime">Time of Event
                                :</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input id="datetime12" name="EWTime"  value="" type="text" class="form-control " size="7" data-inputmask="'alias': 'hh:mm t'" data-mask>
                                      </div>
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EWPlace">Place:</label>

                                <div class="col-md-8">
                                <input class="form-control input-sm" id="EWPlace" name="EWPlace" placeholder=
                                      "Place of Event"  type="text"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"/>
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Competitors">Competitors:</label>

                                <div class="col-md-8">
                                <input class="form-control input-sm" id="Competitors" name="Competitors" placeholder=
                                      "A vs. B"  type="text"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"/>
                                </div>
                              </div>
                            </div>  -->
                        

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EWinner">Winner:</label>

                                <div class="col-md-8">
                                <input class="form-control input-sm" id="EWinner" name="EWinner" placeholder=
                                      "Winner" value="<?php echo $EWin->EWinners; ?>" type="text"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"/>
                                </div>
                              </div>
                            </div> 


                           
                              
                       <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "idno"></label>

                                <div class="col-md-8">
                                 <button class="btn btn-mod btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
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
       