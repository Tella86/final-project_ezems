<?php
error_reporting(0);
$candidate = new Candidate();
$singlecandidate = $candidate->single_candidate($_GET['id']);

$student = new Student();
$res = $student->single_student($singlecandidate->StudentID);

$course = new Course();
$resCourse = $course->single_course($res->CourseID);

?>

  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  img {
    width: 100%;
    height:auto;
}


  </style>


<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Candidate's Profile</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
                      <div class="col-sm-3 wow fadeInDown">

                              <div class="panel">
                                <div id="img_profile" class="panel-body">
                                <!-- <a href="" data-target="#studentmodal" data-toggle="modal" > -->
                                <img title="profile image" class="img-hover"    src="<?php echo web_root . 'candidate/photo/' . $singlecandidate->CandPhoto; ?>">
                                <!-- </a> -->
                                 </div>
                              <ul class="list-group">


                                  <li class="list-group-item text-right"><span class="pull-left"><strong>Course</strong></span> <?php echo $resCourse->CourseCode ?> </li>
                                  <li class="list-group-item text-right"><span class="pull-left"><strong>Year</strong></span> <?php echo $res->YearLevel; ?> </li>


                              </ul>

                            </div>
                        </div>

                            <!--/col-3-->
                      <div class="col-sm-9 wow fadeInDown">
                       <!-- `IDNO`, `Firstname`, `Lastname`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`,
                      `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `ACC_PASSWORD`, `student_status`, `schedID`, `course_year` -->
                      <?php
                        $currentyear = date('Y');
                        $nextyear = date('Y') + 1;
                        $sy = $currentyear . '-' . $nextyear;
                        $_SESSION['SY'] = $sy;
                        // $newDate    = Carbon::createFromFormat('Y-m-d',$_SESSION['SY'] )->addYear(1);

                        ?>


                      <form action="controller.php?action=edit" class="form-horizontal" method="post" >
                      <div class="table-responsive">
                      <div class="col-md-8"><h1 style="color:#000">Running for <?php echo $singlecandidate->Position; ?></h1></div>
                        <table class="table">
                        <tr>
                            <td><label>Student Id :</label></td>
                            <td >
                            <label><?php echo isset($singlecandidate->StudentID) ? $singlecandidate->StudentID : '' ?></label>
                           </td>
                            <td colspan="4"></td>

                          </tr>
                          <tr>
                            <td><label>Name :</label></td>
                            <td>
                              <label><?php echo $res->Firstname; ?></label>
                            </td>
                            <td colspan="2">
                              <label><?php echo $res->Lastname; ?></label>
                            </td>
                            <td>
                              <label><?php echo $res->Middlename; ?></label>
                            </td>
                          </tr>
                           <tr style="background:#eee;">
                            <td></td>
                            <td style="padding:0;"> Firstname</td>
                            <td style="padding:0;" colspan="2">Lastname</td>
                            <td style="padding:0;"> Midlename</td>
                          </tr>
                          <tr>
                            <td><label>Address :</label></td>
                            <td colspan="5"  >
                              <label><?php echo $res->Address; ?></label>
                            </td>
                          </tr>
                          <tr>
                            <td ><label>Sex :</label></td>
                            <td colspan="2">
                              <label><?php echo $res->Gender ?></label>
                            </td>

                            <td class="pull-right"><label>Date of Birth :</label></td>
                            <td colspan="2">
                            <div class="input-group " >
                                <label><?php echo date_format(date_create($res->BirthDate), 'm/d/Y'); ?> </label>
                                <i class="fa fa-calendar"></i>
                             </div>
                            </td>

                          </tr>
                          <tr>
                          <td><label>Age :</label></td>
                            <td colspan="2" >
                              <label><?php echo $res->Age; ?></label>
                                  </td>
                           <td  ><label>Contact No.</label></td>
                            <td colspan="2">
                              <label><?php echo $res->ContactNo; ?></label>
                                  </td>
                          </tr>
                          <tr>
                          <!-- <td></td> -->
                            <td colspan="6">
                            <?php echo $singlecandidate->Platform; ?>
                              <!-- <button class="btn btn-success btn-lg" name="save" type="submit">Save</button> -->
                            </td>
                          </tr>
                        </table>
                      </div>
                      </form>
                      </div>



                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->




  <!-- Modal -->
                    <div class="modal fade" id="studentmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>student/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $res->StudentID; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->