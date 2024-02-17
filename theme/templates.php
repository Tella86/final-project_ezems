<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | EZEMS</title>

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
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">


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
</head><!--/head-->

<body class="homepage" >

    <header id="header">


        <nav class="navbar navbar-mod navbar-fixed-top" role="banner" style="">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" style="background-color:#ff9933" data-toggle="collapse" data-target=".navbar-collapse">
                        <span style="color:#fff" class="sr-only">Toggle navigation</span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo web_root; ?>"><img style="width:60px" src="<?php echo web_root; ?>img/ust.jpg" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav mod-menu" style="font-size:13px;"  >
                    <?php
if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator') {
    # code...
    ?><?php }?>
                        <!-- <li class="<?php echo (currentpage_public() == 'index.php') ? "active" : false; ?>"><a href="<?php echo web_root; ?>">Home</a></li> -->
                        <li  hover="ff9933"class="<?php echo (currentpage_public() == 'student') ? "active" : false; ?>">  <a href="<?php echo web_root; ?>student/">Registered Voters</a></li>
                        <!-- <li  class="<?php echo (currentpage_public() == 'event') ? "active" : false; ?>"> <a href="<?php echo web_root; ?>event/">Events</a></li> -->
                        <li  class="<?php echo (currentpage_public() == 'candidate') ? "active" : false; ?>"> <a href="<?php echo web_root; ?>candidate/index.php">Candidates</a></li>

                        <li  class="<?php echo (currentpage_public() == 'attendance') ? "active" : false; ?>"> <a href="<?php echo web_root; ?>attendance/">Attendance</a></li>
                        <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"  style=""  >
                                <li class="<?php echo (currentpage_public() == 'event') ? "active" : false; ?>"><a href="<?php echo web_root; ?>event/">List of Events</a></li>
                                <li class="<?php echo (currentpage_public() == 'eventwinner') ? "active" : false; ?>"><a href="<?php echo web_root; ?>eventwinner/">List of Winners</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilities <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"   style="" >
                               <?php
if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator') {
    # code...
    ?>
                                <li class="<?php echo (currentpage_public() == 'course') ? "active" : false; ?>"><a href="<?php echo web_root; ?>course/index.php">Courses</a></li>
                                <li class="<?php echo (currentpage_public() == 'department') ? "active" : false; ?>"><a href="<?php echo web_root; ?>department/index.php">Departments</a></li>
                                <li class="<?php echo (currentpage_public() == 'user') ? "active" : false; ?>"><a href="<?php echo web_root; ?>user/index.php">Users</a></li>
                                <?php }?>
                                <li class="<?php echo (currentpage_public() == 'shortcodes') ? "active" : false; ?>"><a href="<?php echo web_root; ?>shortcodes/">Voting Codes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"   style="" >
                                <li class="<?php echo (currentpage_public() == 'report') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=event">Events</a></li>


                                <!-- <li class="<?php echo ($title == 'Events') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=event">Events</a></li> -->
                                <!-- <li class="<?php echo ($title == 'Attendance') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=attendance">Attendance</a></li> -->
                                 <?php
if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator') {
    # code...
    ?>
                                 <li class="<?php echo (currentpage_public() == 'report') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=attendance">Attendance</a></li>
                                <!-- <li class="<?php echo (currentpage_public() == 'report') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=candidate">Candidates</a></li>
                                <li class="<?php echo (currentpage_public() == 'tallyofvotes') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=tallyofvotes">Tally of Votes</a></li> -->
                                <!-- <li class="<?php echo (currentpage_public() == 'report') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=electionwinner">SSG Election Winners</a></li> -->

                                <li class="<?php echo ($title == 'Candidate') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=candidate">Candidates</a></li>
                                <li class="<?php echo ($title == 'Logs') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=logs">Logs</a></li>
                                <?php }?>
                                <li class="<?php echo ($title == 'Tally of Votes') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=tallyofvotes">Tally of Votes</a></li>
                                <li class="<?php echo ($title == 'Election Winners') ? "active" : false; ?>"><a href="<?php echo web_root; ?>report/index.php?view=electionwinners">Election Winners</a></li>
                              <!-- <li><a href="shortcodes.html">Shortcodes</a></li> -->
                              <?php
if ($_SESSION['ACCOUNT_TYPE'] == 'Student') {
    # code...
    ?>
                         <li  hover="ff9933"class="<?php echo (currentpage_public() == 'student') ? "active" : false; ?>">  <a href="<?php echo web_root; ?>student/">Students</a></li>
                        <!-- <li  class="<?php echo (currentpage_public() == 'event') ? "active" : false; ?>"> <a href="<?php echo web_root; ?>event/">Events</a></li> -->
                        <li  class="<?php echo (currentpage_public() == 'candidate') ? "active" : false; ?>"> <a href="<?php echo web_root; ?>candidate/index.php">Candidates</a></li>


 <?php }?>
                            </ul>
                        </li>
                    <!--     <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact-us.html">Contact</a></li>   -->
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello!, <?php echo $_SESSION['ACCOUNT_NAME']; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu"  style="" >
                            <li>
                                <a href="<?php echo web_root; ?>user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>">Edit</a>
                            </li>
                            <li>
                                <a href="<?php echo web_root; ?>user/index.php?view=view&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>">View</a>
                            </li>
                            <li>
                                <a href="<?php echo web_root; ?>logout.php">Logout</a>
                            </li>

                        </ul>
                    </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <div class="container" style="margin-top:8%;margin-bottom:-50px">
        <div class="row">
            <?php check_message();?>
        </div>


                 <?php
if ($title != 'Home') {
    echo ' <div class="row  breadcrumb"> <a href="' . web_root . 'index.php" title="Home" >Home</a>  /
                        <a href="index.php" title="' . $title . '" >' . $title . '</a>
                        ' . (isset($header) ? ' / ' . $header : '') . ' </div>';
}?>

        </div>

    <?php require_once $content;?>

  <section id="bottoms" style="border-bottom:5px solid #0000 ">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"  >
            <ul class="nav navbar-nav" id="footer_nav">
                <li class="active"><a href="" target="-blank" class=""></i>&nbsp;Home</a></li>
                <li class="active"><a href="about.php"><i class="icon-info-sign"></i>&nbsp;Mission & Vision</a></li>
                <li class="active"><a href="history.php"><i class="icon-file"></i>&nbsp;Company History</a></li>
                <li class="active"><a href="developers.php"><i class="icon-group"></i>&nbsp;Developers</a></li>
            </ul>
        </div>


</section><!--/#bottom-->

    <footer id="footer" class="midnight-blue" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                  <CENTER> &copy; 2023-2024 <a target="_blank" href="" title="Free Twitter Bootstrap WordPress Themes and HTML templates">EZEMS</a>. All Rights Reserved.</CENTER>
                </div>
              <!--   <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div> -->

            </div>
        </div>
    </footer><!--/#footer-->


    <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.isotope.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/main.js"></script>
    <script src="<?php echo web_root; ?>js/js/wow.min.js"></script>

    <!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>select2/select2.full.min.js"></script>
<script src="<?php echo web_root; ?>slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>




<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script>


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/meiomask.min.js"></script>
<script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript -->


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>

    $(function () {
         $(".select2").select2();
    })


     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

   //Datemask2 mm/dd/yyyy
    $("#datetime12").inputmask("hh:mm t", {"placeholder": "hh:mm t"});

       //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();


 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });

    });

  function capitalize(textboxid, str) {
      // string with alteast one character
      // if (str && str.length >= 1)
      // {
      //     var firstChar = str.charAt(0);
      //     var remainingStr = str.slice(1);
      //     str = firstChar.toUpperCase() + remainingStr;
      // }

      document.getElementById(textboxid).value =  str.toUpperCase();
  }


  $("#search_attendance").on("click", function(){

    var attenddate = $(".date_pickerfrom").val();
    var yearlevel = $(".YearLevel").val();
    var attendance = $(".Attendance").val();

    if(attenddate==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please enter the dates');

        return false;
    }
    if(yearlevel==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Year Level');

        return false;
    }
    if(attendance==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Course');

        return false;
    }
  })


$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2024',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2024',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0

    });


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear()
    });

</script>

<script type="text/javascript" >

$(document).on("click", ".save",function(){

    var pass1 = document.getElementById("U_PASS").value;
    var pass2 = document.getElementById("RU_PASS").value;
    var name  = document.getElementById("U_NAME").value;
    var username = document.getElementById("U_USERNAME").value;

    if (name=='') {
          $("#errormsg_uname").hide();
         $("#errormsg_uname").css({
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_uname").fadeIn("slow");
        $("#errormsg_uname").html("This field is required");
        $("#U_NAME").focus();
       return false;
    }else{
          $("#errormsg_uname").hide();
    }

    if (username=='') {
          $("#errormsg_username").hide();
         $("#errormsg_username").css({
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_username").fadeIn("slow");
        $("#errormsg_username").html("This field is required");
        $("#U_USERNAME").focus();
       return false;
    }else{
          $("#errormsg_username").hide();
    }
    if (pass1=='') {
          $("#errormsg_pass1").hide();
         $("#errormsg_pass1").css({
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass1").fadeIn("slow");
        $("#errormsg_pass1").html("This field is required");
        $("#U_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass1").hide();
    }
    if (pass2=='') {
         $("#errormsg_pass2").css({
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("This field is required");
        $("#RU_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass2").hide();
    }

    if (pass1 != pass2) {
       $("#errormsg_pass2").css({
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("Password does not match");
        $("#RU_PASS").focus();
       return false;
    }

});


// $(document).on("click", ".studsave", function () {
//  /* load all variables */

//     var studentid =  document.getElementById('StudentID').value

//     // $("#checkid_message").hide();

//    // alert(courseid);
//      $.ajax({    //create an ajax request to load_page.php
//         type:"POST",
//         url: "controller.php?action=checkid",
//         dataType: "text",   //expect html to be returned
//         data:{check:'', IDNO:studentid},
//         success: function(data){
//          $('#checkid_message').html(data);

//            if (data=='Student ID already in use!') {
//             return false;
//            }else{
//             return true;
//            }

//         }

//     });

// });


$("#gosearch").click(function() {
    var instructor = document.getElementById("INST_ID").value;
    if (instructor == 'Select') {
        alert("Pls. Select Instructor.");
        return false;
    }else{
        return true;
    };
})
</script>
</body>
</html>