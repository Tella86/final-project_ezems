<?php
// include("auth.php"); //include auth.php file on all secure pages
include("inactive.php"); //check if user is inactive for 15 minutes
?>



<style type="text/css">
.bg {

    background: url(images/bg/bg-3-full.jpg) no-repeat;
}

.ssgmenu>li>a {

    font-size: 25px;
    /*font-weight: bold;*/
    padding: 15px;
    color: #000;

}

.ssgmenu>li>a:hover,
.ssgmenu>li>a:focus {
    background: #ff9933;
    color: #fff;
}

.motto p {
    font-size: 32px;
    /*font-weight: bold;*/
    margin-top: 5%;
    line-height: 32px;

}

.motto {
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
    color: #000;
    font-size: 16px;

}

.timeh1 {
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
    color: #000;

}

.attendance-icon {
    font-size: 28px;
    color: #007bff;
    /* Change color as needed */
}

</style>

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="assets/js/p.js"></script>
<script>
$(function() {
    $("#datepicker").datepicker();
});
</script>
<body>
<?php include "social.html";?>
<section id="feature" class="transparent-bg">
    <div class="container bg">
        <div class="row">
            <div class="center wow fadeInDown ">
                <ul class="nav navbar-nav ssgmenu motto" id="footer_nav">
                    <li><a href="attendance/check_attendance.php" target="_blank"><i
                                class="attendance-icon">&#128197;</i>ATTENDANCE</a></li>
                    <li><a href="vote/index.php" target="_blank"><i class="fas fa-vote-yea"></i>VOTE</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="features">
                <!--   <div class="col-lg-2"></div>
                    <div class="col-lg-8"> -->
                <div class="col-lg-6">
                    <div class="title_index">

                        <div class="row-fluid">
                            <div class="span12"></div>
                            <div class="row-fluid">
                                <div class="span10">
                                    <img class="index_logo" src="img/santotomas.jpg">
                                </div>
                                <div class="span12">
                                    <div class="motto">
                                        <p>WELCOME&nbsp;&nbsp;TO:
                                            EZEMS&nbsp;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php //include('title_index.php'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row-fluid">
                        <div class="col-md-12 ">
                            <h2>
                                <span id="tick2" class="timeh1" style="font-size:30px;">
                                </span>
                                <script>
                                // <!--/. tells about the time  -->
                                function show2() {
                                    if (!document.all && !document.getElementById)
                                        return
                                    thelement = document.getElementById ? document.getElementById("tick2") : document
                                        .all.tick2
                                    var Digital = new Date()
                                    var hours = Digital.getHours()
                                    var minutes = Digital.getMinutes()
                                    var seconds = Digital.getSeconds()
                                    var dn = "PM"
                                    if (hours < 12)
                                        dn = "AM"
                                    if (hours > 12)
                                        hours = hours - 12
                                    if (hours == 0)
                                        hours = 12
                                    if (minutes <= 9)
                                        minutes = "0" + minutes
                                    if (seconds <= 9)
                                        seconds = "0" + seconds
                                    var ctime = hours + ":" + minutes + ":" + seconds + " " + dn
                                    thelement.innerHTML = ctime
                                    setTimeout("show2()", 1000)
                                }
                                window.onload = show2
                                //-->
                                </script>
                                <!--/. Script where the format of the interface time,month,day and year relies -->
                            </h2>
                            <h2 class="timeh1" style="font-size:40px;">
                                <?php
$date = new DateTime();
echo $date->format('l, F jS, Y');
?>
                            </h2>
<?php include "leavemsg.html"; ?>
                        </div>

                    </div>
                </div>
                <!-- <img class="img-responsive img-blog" src="img/ssgback.png" style="width:100%; height:400px"   alt="" /> -->
                <!--  </div>
                    <div class="col-lg-2"></div>  -->
            </div>
            <!--/.services-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#feature-->