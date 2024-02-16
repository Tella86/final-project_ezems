<?php
require_once "../include/initialize.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home |EZEMS</title>

    <!-- core CSS -->
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<!-- <link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<!-- <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen"> -->


<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">

<link href="<?php echo web_root; ?>css/nav-button-custom.css" rel="stylesheet" media="screen">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
 <body id="login" >


								<div class="">
									<div class="container">
									<div id="" class="muted pull-right">
									 <a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a>
									</div>
									</div>
 	<style type="text/css">
  body
    {
     background:url(../images/bg/bgtest2.png);
    }
  #imgview {
  	max-height: 50%;
  }
  #img_profile{
    width: 100%;
    height:50%;
    max-height: 50%;
  }
    #img_profile >  img {
    width: 100%;
    height:50%;
}

  </style>
  <div class="row">
                 <h1 align="center"  >Attentdance Monitoring System</h1>
              </div>
<section id="feature" class="transparent-bg">
        <div class="container">

                <?php

// function time_from($time){
// $dateObject = new DateTime($time);
// $resHr =  $dateObject->format('H:i');
//      return  strtotime($resHr);
// }
// function time_to($time){
//         $dateObject = new DateTime($time);
// $resHr  =  $dateObject->format('H:i');
//    return  strtotime($resHr);
// }

//            echo   $tfrom= time_from('01:55 pm') .'<br/>';
//            echo    $tto = time_to('02:10 pm') .'<br/>';

//              $total = round(abs($tto  - $tfrom) / 60 ,2);

//           echo    $total ;
?>
            <div class="row">
                <div class="features">
                      <div class="col-sm-5 wow fadeInDown">

                              <div class="panel" id="imgview">
                                <div id="img_profile" class="panel-body">
                                <!-- <a href="" data-target="#studentmodal" data-toggle="modal" > -->
                                    <img title="profile image" id="imgprofile" class="img-hover"    src="<?php //echo web_root. 'admin/student/'.  $res->StudPhoto; ?>">
                                <!-- </a> -->
                                 </div>


                            </div>
                        </div>

                            <!--/col-3-->
                      <div class="col-sm-7 wow fadeInDown">



                        <div class="col-md-8">
                        <ul class="list-group">
                          <li class="list-group-item"><span class="pull-left">Events</span>
                            <select class="select2 attendevents" style="width:80%" name="events" id="attendevents">
                              <option value="">Select Events</option>
                                <?php
$query = "SELECT * FROM `tblevents` ";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo '<option value=' . $result->Event . '>' . $result->Event . '</option>';

}
?>
                            </select>
                          </li>
                        </ul>

                        <h2 style="color:#fff"><span id="tick2" class="pull-rigth" >
                        </span>&nbsp;|



                          <script>
                            // <!--/. tells about the time  -->
                                  function show2(){
                                  $("#StudentID").focus();
                                  if (!document.all&&!document.getElementById)
                                  return
                                  thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
                                  var Digital=new Date()
                                  var hours=Digital.getHours()
                                  var minutes=Digital.getMinutes()
                                  var seconds=Digital.getSeconds()
                                  var dn="PM"
                                  if (hours<12)
                                  dn="AM"
                                  if (hours>12)
                                  hours=hours-12
                                  if (hours==0)
                                  hours=12
                                  if (minutes<=9)
                                  minutes="0"+minutes
                                  if (seconds<=9)
                                  seconds="0"+seconds
                                  var ctime=hours+":"+minutes+":"+seconds+" "+dn
                                  thelement.innerHTML=ctime
                                  setTimeout("show2()",1000)
                                  }
                                  window.onload=show2
                                  //-->

                          </script> <!--/. Script where the format of the interface time,month,day and year relies -->

                          <?php
$date = new DateTime();
echo $date->format('l, F jS, Y');
?>
                          <h2>

                          	  <ul class="list-group">

                                  <li class="list-group-item text-right"><span class="pull-left">IDNO</span><input class="StudentID" type="text" id="StudentID"></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Name</span><label id="name">NONE</label> </li>
                                  <li class="list-group-item text-right"><span class="pull-left">Course</span><label id="course">NONE</label></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Year</span><label id="year">NONE</label> </li>


                              </ul>
                              <div id="check_attendance" style="color:#fff"></div>

                      </div>

                    </div>



                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->


 </body>
 <center>
   <footer>
    <p  style="color:#fff">EZEMS Copyright 2023-2024</p>
    </footer>
</center>
 <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.isotope.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/main.js"></script>
    <script src="<?php echo web_root; ?>js/js/wow.min.js"></script>
    <script src="../select2/select2.full.min.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/attendance_student.js"></script>
<script type="text/javascript" >
     $(function () {
         $(".select2").select2();
     });
</script>

</html>
