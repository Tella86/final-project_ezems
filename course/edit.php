<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

  @$COURSE_ID = $_GET['id'];
    if($COURSE_ID==''){
  redirect("index.php");
}
  $course = New Course();
  $singlecourse = $course->single_course($COURSE_ID);

?> 

<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Update Course</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
 
                           <form class="form-horizontal span6 wow fadeInDown" action="controller.php?action=edit" method="POST"> 
                                   <input class="form-control input-sm" id="COURSE_ID" name="COURSE_ID" placeholder=
                                      "Account Id" type="Hidden" value="<?php echo $singlecourse->CourseID; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                              
                              <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "COURSE_NAME">Course:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="COURSE_NAME" name="COURSE_NAME" placeholder=
                                      "Course" type="text" value="<?php echo $singlecourse->CourseCode; ?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "COURSE_DESC">Description:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="COURSE_DESC" name="COURSE_DESC" placeholder=
                                      "Course Description" type="text" value="<?php echo $singlecourse->Description; ?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>
                           

                           <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "DEPT_ID">Department:</label>

                                <div class="col-md-8">
                                 <select class="form-control input-sm" name="DEPT_ID" id="DEPT_ID"> 
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tbldepartment` WHERE DepartmentID=". $singlecourse->DepartmentID);
                                      $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) {
                                        echo '<option value='.$result->DepartmentID.' >'.$result->Department.' [ '.$result->Description .' ]</option>';

                                      }
                                    ?> 
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tbldepartment` WHERE DepartmentID!=". $singlecourse->DepartmentID);
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
                                   <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
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
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 