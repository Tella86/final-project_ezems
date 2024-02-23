<?php
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);
@$CandidateID = $_GET['id'];
if ($CandidateID == '') {
    redirect("index.php");
}
$candidate = new Candidate();
$can_result = $candidate->single_candidate($CandidateID);

switch ($can_result->Position) {

    case 'President':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option SELECTED value="President">President</option>
                      <option value="Vice-President">Vice-President</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option value="Dorm-Head">Dorm-Head</option>n value="Fourth" >Fourth</option>
                    </select> ';
        break;
    case 'Vice-President':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option SELECTED value="Vice-President">Vice-President</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option value="Dorm-Head">Dorm-Head</option>n value="Fourth" >Fourth</option>
                    </select> ';

        break;
    case 'Secretary':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option  value="Vice-President">Vice-President</option>
                      <option SELECTED value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option value="Dorm-Heads">Dorm-Head</option>n value="Fourth" >Fourth</option>
                    </select> ';
        break;
    case 'Treasurer':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option  value="Vice-President">Vice-President</option>
                      <option  value="Secretary">Secretary</option>
                      <option SELECTED value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option value="Dorm-Heads">Dorm-Head</option>n value="Fourth" >Fourth</option>
                    </select> ';
        break;

    case 'College-Babaa':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option  value="Vice-President">Vice-President</option>
                      <option  value="Secretary">Secretary</option>
                      <option  value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option SELECTED value="Dorm-Head">Dorm-Head</option>
                    </select> ';
        break;
    case 'College-Mamaa':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option  value="Vice-President">Vice-President</option>
                      <option  value="Secretary">Secretary</option>
                      <option  value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option SELECTED value="Dorm-Head">Dorm-Head</option>
                    </select> ';
        break;
    case 'Dorm-Head':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                       <option>Select</option>
                       <option  value="President">President</option>
                       <option  value="Vice-President">Vice-President</option>
                       <option  value="Secretary">Secretary</option>
                       <option  value="Treasurer">Treasurer</option>
                       <option value="College-Babaa">College-Babaa</option>
                       <option value="College-Mamaa">College-Mamaa</option>
                       <option value="Games-Captain">Games-Captain</option>
                       <option value="Class-Rep">Class-Rep</option>
                       <option value="Class-Secretary">Class-Secretary</option>
                       <option SELECTED value="Dorm-Head">Dorm-Head</option>
                     </select> ';
        break;
    case 'Games-Captain':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                         <option>Select</option>
                         <option  value="President">President</option>
                         <option  value="Vice-President">Vice-President</option>
                         <option  value="Secretary">Secretary</option>
                         <option  value="Treasurer">Treasurer</option>
                         <option value="College-Babaa">College-Babaa</option>
                         <option value="College-Mamaa">College-Mamaa</option>
                         <option value="Games-Captain">Games-Captain</option>
                         <option value="Class-Rep">Class-Rep</option>
                         <option value="Class-Secretary">Class-Secretary</option>
                         <option SELECTED value="Dorm-Head">Dorm-Head</option>
                       </select> ';
        break;
    case 'Class-Rep':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                         <option>Select</option>
                         <option  value="President">President</option>
                         <option  value="Vice-President">Vice-President</option>
                         <option  value="Secretary">Secretary</option>
                         <option  value="Treasurer">Treasurer</option>
                         <option value="College-Babaa">College-Babaa</option>
                         <option value="College-Mamaa">College-Mamaa</option>
                         <option value="Games-Captain">Games-Captain</option>
                         <option value="Class-Rep">Class-Rep</option>
                         <option value="Class-Secretary">Class-Secretary</option>
                         <option SELECTED value="Dorm-Head">Dorm-Head</option>
                       </select> ';
        break;
    case 'Class-Secretary':
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                          <option>Select</option>
                          <option  value="President">President</option>
                          <option  value="Vice-President">Vice-President</option>
                          <option  value="Secretary">Secretary</option>
                          <option  value="Treasurer">Treasurer</option>
                          <option value="College-Babaa">College-Babaa</option>
                          <option value="College-Mamaa">College-Mamaa</option>
                          <option value="Games-Captain">Games-Captain</option>
                          <option value="Class-Rep">Class-Rep</option>
                          <option value="Class-Secretary">Class-Secretary</option>
                          <option SELECTED value="Dorm-Head">Dorm-Head</option>
                        </select> ';
        break;

    default:
        # code...
        $position = '<select class="form-control input-sm" name="Position" id="Position">
                      <option>Select</option>
                      <option  value="President">President</option>
                      <option  value="Vice-President">Vice-President</option>
                      <option  value="Secretary">Secretary</option>
                      <option  value="Treasurer">Treasurer</option>
                      <option value="College-Babaa">College-Babaa</option>
                      <option value="College-Mamaa">College-Mamaa</option>
                      <option value="Games-Captain">Games-Captain</option>
                      <option value="Class-Rep">Class-Rep</option>
                      <option value="Class-Secretary">Class-Secretary</option>
                      <option SELECTED value="Dorm-Head">Dorm-Head</option>
                    </select> ';
        break;
}
?>

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
             <h2 class="page-header">Update Candidate</h2>
            <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>

        <div class="row">
            <div class="features">

                <form class="form-horizontal span6 " action="controller.php?action=edit" method="POST">
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "StudentID">Candidates :</label>

                                <div class="col-md-8">
                                <input type="hidden" value="<?php echo $can_result->CandidateID; ?>" name="CandidateID">
                                <label style="font-size:25px">
                                <?php

$Student = new Student();
$singlestudent = $Student->single_student($can_result->StudentID);
echo $singlestudent->Lastname . ', ' . $singlestudent->Firstname;
?>
                                </label>


                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Position">Position:</label>

                                <div class="col-md-8">
                                <?php echo $position; ?>

                                </div>
                              </div>
                            </div>


                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "PartyList">Party List:</label>

                                <div class="col-md-8">
                                   <select class="form-control " name="PartyList">
                                      <option>Select</option>
                                      <option selected="true" value="<?php echo $can_result->PartyList; ?>"><?php echo $can_result->PartyList; ?></option>
                                      <option value="PartyList 1">PartyList 1</option>
                                      <option value="PartyList 2">PartyList 2</option>
                                      <option value="PartyList 3">PartyList 3</option>
                                      <option value="PartyList 4">PartyList 4</option>
                                      <option value="PartyList 5">PartyList 5</option>
                                      <option value="PartyList 6">PartyList 6</option>
                                      <!-- <option value="Treasurer">Treasurer</option>
                                      <option value="Senator">Senator</option> -->
                                  </select>
                                 <!--   <input class="form-control input-sm" id="PartyList" name="PartyList" placeholder=
                                      "Party List" type="any" value="<?php echo $can_result->PartyList; ?>" required> -->
                                </div>
                              </div>
                            </div>

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "RunningDate">Date of Candidacy:</label>

                                <div class="col-md-8">
                                   <div class="input-group" id="">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input required id="datemask2" name="RunningDate"  value="<?php echo date_format(date_create($can_result->RunningDate), 'm/d/Y'); ?>" type="text" class="form-control " size="7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                      </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Platform">Platform:</label>

                                <div class="col-md-8">
                                <textarea class="form-control input-sm" id="Platform" name="Platform" placeholder=
                                      "Platform"   required><?php echo $can_result->Platform; ?></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4" align = "left"for=
                                  "image">Upload Picture:</label>

                                  <div class="col-md-8">
                                  <input type="file" name="image" value="jpg" id="image"/>
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

