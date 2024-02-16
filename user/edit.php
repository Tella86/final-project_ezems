<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

  @$USERID = $_GET['id'];
    if($USERID==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($USERID);

?> 
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Update User</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
                  <div class="wow fadeInDown">
                    
                        <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

                                       <input class="form-control input-sm" id="USERID" name="USERID" placeholder=
                                          "Account Id" type="Hidden" value="<?php echo $singleuser->ACCOUNT_ID; ?>">
                             
                                
                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "U_NAME">Name:</label>

                                  <div class="col-md-8">
                                    <input name="deptid" type="hidden" value="">
                                     <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                                        "Account Name" type="text" value="<?php echo $singleuser->ACCOUNT_NAME; ?>" autocomplete="off">
                                       <div id="errormsg_uname"></div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "U_USERNAME">Username:</label>

                                  <div class="col-md-8">
                                    <input name="deptid" type="hidden" value="">
                                     <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                                        "Username" type="text" value="<?php echo $singleuser->ACCOUNT_USERNAME; ?>" autocomplete="off">
                                       <div id="errormsg_username"></div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "U_PASS">Password:</label>

                                  <div class="col-md-8">
                                    <input name="deptid" type="hidden" value="">
                                     <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                                        "Account Password" type="Password" value="" >
                                       <div id="errormsg_pass1"></div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "RU_PASS">Re-type Password:</label>

                                  <div class="col-md-8">
                                    <input name="deptid" type="hidden" value="">
                                     <input class="form-control input-sm RU_PASS" id="RU_PASS" name="RU_PASS" placeholder=
                                        "Re-type Password" type="Password" value="" >
                                       <div id="errormsg_pass2"></div>
                                       <!-- <div id="errormsg"></div> -->
                                  </div>
                                </div>
                              </div>
                              <?php 
                                  if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {
                                        # code...
                                 ?>
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "U_ROLE">Role:</label>

                                    <div class="col-md-8">
                                     <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                                        <option value="Administrator"  <?php echo ($singleuser->ACCOUNT_TYPE=='Administrator') ? 'selected="true"': '' ; ?>>Administrator</option>
                                        <!-- <option value="Staff" <?php echo ($singleuser->ACCOUNT_TYPE=='Staff') ? 'selected="true"': '' ; ?>>Staff</option>  -->
                                        <!-- <option value="Customer">Customer</option> -->
                                            <option value="SSG" <?php echo ($singleuser->ACCOUNT_TYPE=='SSG') ? 'selected="true"': '' ; ?>>SSG</option>
                                   <!-- <option value="Encoder" <?php echo ($singleuser->ACCOUNT_TYPE=='Encoder') ? 'selected="true"': '' ; ?>>Encoder</option> -->
                                      </select> 
                                    </div>
                                  </div>
                                </div>

                          <?php } ?>
                           <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "idno"></label>

                                    <div class="col-md-8">
                                       <button class="btn btn-primary save " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                                        <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span>&nbsp;<strong>List of Users</strong></a> -->
                                    </div>
                                  </div>
                                </div>

                             

                        <div class="form-group">
                              <div class="rows">
                                <div class="col-md-6">
                                  <label class="col-md-6 control-label" for=
                                  "otherperson"></label>

                                  <div class="col-md-6">
                                 
                                  </div>
                                </div>

                                <div class="col-md-6" align="right">
                                 

                                 </div>
                                
                            </div>
                            </div>

                        </form>
      
                  </div> 
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 

<!--     <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        
        </div> 
  </section> --><!--/#bottom--> 