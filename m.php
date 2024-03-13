<?php
require_once "include/initialize.php";
// require_once "templates.php";

?>
<?php
if (isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
    $confirmation = RandomSourceCode();
    echo $confirmation;
    $_SESSION['confirmation'] = $confirmation;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PAY EZEMS&nbsp;</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- <link href="<?php echo web_root; ?>css/css/index_background.css" rel="stylesheet" media="screen"> -->
    <link href="<?php echo web_root; ?>css/css/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/my_style.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/styles.css" rel="stylesheet" media="screen">
    <!-- <link href="<?php echo web_root; ?>css/css/index.css" rel="stylesheet" media="screen"> -->
    <link href="<?php echo web_root; ?>css/css/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet"
        media="screen">
    <!-- <link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen"> -->
    <link href="<?php echo web_root; ?>css/css/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span
                        class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="footer_nav">
                        <li class="divider-vertical"></li>

                        <li class="divider-vertical"></li>

                </div>


<body bg="red;">
    </div>
    <?php include 'incld/header.php';?>
    <!-- </div> -->
    <div class="container">
        <div class="row-fluid">

            <div class="span6">
                <div class="title_index">
                    <div class="span12">
                        <div class="motto">

                            <!-- <h3><p>WELCOME&nbsp;&nbsp;TO:</p></h3> -->
                        </div>
                        <div class="row-fluid">
                            <div class="span12"></div>
                            <div class="row-fluid">
                                <div class="span10">
                                    <img class="index_logo" src="img/santotomas.png" height="200px" width="590px">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
            <link href="" rel="stylesheet" />
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
            <script>
            type = "text/javascript"
            src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            </script>
            <!-- <link rel="stylesheet" href="style.css"> -->

            <style>
            /* @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap"); */
            body {
                background-color: #eaedf4;
                font-family: "Rubik", sans-serif;
                /* background-color: #74992e; */

            }

            .card {
                width: 335px;
                border: none;
                border-radius: 10px;
                float: right;
            }

            .justify-content-around div {
                border: none;
                border-radius: 5px;
                /* background: #f3f4f6; */
                padding: 5px 10px 5px;
                color: #8d9297;
            }

            .justify-content-around span {
                font-size: 1px;
            }

            .justify-content-around div:hover {
                /* background: #545ebd; */
                color: #fff;
                cursor: pointer;
            }

            .justify-content-around div:nth-child(1) {
                /* background: #545ebd; */
                color: #fff;
            }

            span.mt-0 {
                color: #8d9297;
                font-size: 12px;
            }

            h6 {
                font-size: 18px;
            }

            .mpesa {
                background-color: green !important;
            }

            h9 {
                font-size: 12px;
            }

            a {
                font-size: 12px;
                color: black;
            }

            button {
                border-radius: 5px;
                float: center;
            }
            </style>
            <?php $message = "kindly subscribe By Clicking the Subscribe Button before making payment!";
echo "<script type='text/javascript'>alert('$message');</script>"?>
            <!-- <a href="https://localhost/sems/incld/subscription.html"><button>subscribe</button></a> -->
            <div class="span6">
                <div class="pull-right">
                    <?php check_message();?>
                    <div id="home">
                        <div class="overlay">

                            <body oncontextmenu="return false" class="snippet-body">
                                <div class="container d-flex justify-content-center">
                                    <div class="card mt-5 px-3 py-4">
                                        <div class="d-flex flex-row justify-content-around">
                                            <div class="mpesa">
                                                <h2>Select Your Package</h2>
                                                <select id="package" name="package" required>
                                                    <option value="basic">Basic Package ($1/Voter)</option>
                                                    <option value="standard">Standard Package ($242/Yearly)</option>
                                                    <option value="premium">Premium Package ($1035/Life Time)</option>
                                                </select><br>
                                                <!-- <h2>One Day Event Package</h2>
                                                <h2>Ksh.35,000/</h2> -->
                                            </div>

                                            <div class="media mt-4 pl-2">
                                                <img src="daraja/mpesa.png" class="mr-1" height="75" />
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <center>
                                                <h7>You will receive a popup on your phone</h7>
                                        </div>
                                        <div>
                                            <center>
                                                <h7>Enter your MPESA PIN</h7>
                                            </center>
                                        </div>
                                        <div class="media mt-3 pl-2"></div>
                                        <center>
                                            <!-- <h6>Enter Phone Number</h6> -->
                                            <form class="row g-3" action="./stk_initiate.php" method="POST">

                                                <div class="col-12">
                                                    <label for="inputAddress" class="form-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount"
                                                        placeholder="Enter Amount">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter Phone Number">
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-success" name="submit"
                                                        value="submit">M~PAY</button>
                                                </div>
                                            </form>

                                            <div class="media mt-3 pl-2"></div>

                                            <button type="submit"><a href="https://paypal.com" target="_blank"
                                                    class="btn btn-info" name="submit"
                                                    value="submit">PAYPAL</button></a>
                                        </center>
                                    </div>
                                </div>

                                <div class="container d-flex justify-content-center">
                                    <div class="card mt-5 px-3 py-4">
                                        <div class="d-flex flex-row justify-content-around">
                                            <div class="mpesa">
                                                <h9>By Clicking The M~PAY BUTTON, You Agree to Our</h9>
                                                <a href="">Terms And condition</a> and <a href="">Policy Privacy</a>
                                                <h9>Already Paid Click? <a href="login.php">Login Here</a>
                                                    <h9>You Want To Vote</h9><a href="../sems/vote/index.php">VOTE
                                                        HERE</a>
                                                    <h9>View Tally</h9><a href="tallyofvotes.php">View Tally</a>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <script type="text/javascript"
                            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
                        </script>
                        <script type="text/javascript" src="script.js"></script>
                        <script type="text/javascript" src=""></script>
                        <script type="text/Javascript"></script>

                        <div class="row-fluid">
                            <div class="col-md-12 ">
                                <h4 style="color:indigo"><span id="tick2">
                                    </span>&nbsp;|

                                    <script>
                                    // <!--/. tells about the time  -->
                                    function show2() {
                                        if (!document.all && !document.getElementById)
                                            return
                                        thelement = document.getElementById ? document.getElementById("tick2") :
                                            document.all.tick2
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

                                    <?php
$date = new DateTime();
echo $date->format('l, F jS, Y');
?>

                                    <div>
                                    </div>

                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>

                                    </div>

</body>


</head>

</html>