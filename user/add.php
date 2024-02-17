                      <?php
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

?>

<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Add New User</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
                  <div class="wow fadeInDown">
                     <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

                                <!-- <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "user_id">User Id:</label>

                                  <div class="col-md-8"> -->
                                    <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                                        "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                                <!--   </div>
                                </div>
                              </div> -->
                               <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "U_NAME">Name:</label>

                                  <div class="col-md-8">
                                    <input name="deptid" type="hidden" value="">
                                     <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                                        "Account Name" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
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
                                        "Username" type="text" value="" autocomplete="off">
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
if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator') {
    # code...
    ?>


                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "U_ROLE">Role:</label>

                                  <div class="col-md-8">
                                   <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                                      <option value="Administrator"  >Administrator</option>
                                      <option value="Staff"  >Staff</option>
                                      <option value="Student">Student</option>
                                      <option value="Encoder" >Encoder</option>
                                      <option value="Register" >Register</option>

                                    </select>
                                  </div>
                                </div>
                              </div>

                                <?php }?>

                          <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for=
                                  "idno"></label>

                                  <div class="col-md-8">
                                   <button class="btn btn-primary btn-sm save" id="save" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>
                                      <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
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


    <!-- <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">

        </div>
  </section> --><!--/#bottom-->

