<?php
require_once "include/initialize.php";
include_once "inactive.php";


if (isset($_SESSION['ACCOUNT_ID'])) {
    // redirect(web_root . "m.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EZEMS&nbsp;</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    <link href="<?php echo web_root; ?>css/css/index_background.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/my_style.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/styles.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/index.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="<?php echo web_root; ?>css/css/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet"
        media="screen">
    <link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" media="screen, projection" />
    <link rel="stylesheet" href="admin/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="admin/css/Home.css" media="screen, projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
   
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeDmaQpAAAAAEwsQjBGVQQhg9Z4aUXqRoWdlfaL"></script>
 
</head>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span
                        class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <style>
                .attendance-icon {
                    font-size: 28px;
                    color: #007bff;
                    /* Change color as needed */
                }

                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-image: url('images/bg/bg-3-full.jpg');
                    background-size: cover;
                    /* Cover the entire container */
                    background-position: auto;
                    /* Center the background image */
                    height: 100vh;
                    /* Set the height of the body to viewport height */
                    display: auto;
                    /* justify-content: center; */
                    /* align-items: center; */
                }

                /* Define styles for the header */
                header {
                    background-color: #333;
                    color: #fff;
                    text-align: center;
                    padding: 20px 0;
                }

                .content {
                    text-align: center;
                    color: #fff;
                }


                /* Define styles for the main content */
                .container {
                    max-width: 800px;
                    /* Adjust as needed */
                    margin: 0 auto;
                    padding: 20px;
                }

                /* Define styles for the footer */
                footer {
                    background-color: #333;
                    color: #fff;
                    text-align: center;
                    padding: 20px 0;
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                }

                @media screen and (max-width: 768px) {
                    .container {
                        max-width: 90%;
                        max-height: fit-content;
                        /* Adjust as needed for smaller screens */
                    }

                    body {
                        background-size: contain;
                        /* Ensure the entire image is visible */
                    }
                }

                /* The typing effect */
                @keyframes typing {
                    from {
                        width: 0;
                    }

                    to {
                        width: 100%;
                    }
                }

                /* The blinking cursor effect */
                @keyframes blink {
                    50% {
                        border-color: gold;
                    }
                }

                /* The container for the text */
                .typewriter-container {
                    overflow: hidden;
                    border-right: .17em solid white;
                    /* The typewriter cursor */
                    white-space: nowrap;
                    /* Keeps the content on a single line */
                    margin: 0 auto;
                    /* Center the container */
                    letter-spacing: .15em;
                    /* Adjust letter spacing for a typewriter effect */
                    animation: typing 6s steps(45) infinite, .90s step-end infinite;
                    font-size: 28px;
                }

                @keyframes rotate180 {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }

                .rotate-image {
                    animation: rotate180 2s linear forwards;
                    /* Animation lasts for 2 seconds and stops at the end */
                }

                @keyframes blink {
                    0% {
                        opacity: 1;
                    }

                    50% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
                }

                .blink {
                    animation: blink 1s infinite;
                    color: red;
                }

                .animation-container {
                    text-align: center;
                }

                .please-login {
                    display: inline-block;
                    font-size: 24px;
                }

                .icon-locked::before {
                    content: "\1F512";
                    /* Unicode for locked symbol */
                    font-family: Arial, sans-serif;
                    /* Use a font that supports the locked symbol */
                    font-size: 24px;
                    /* Adjust size as needed */
                    display: inline-block;
                }
                </style>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="footer_nav">
                        <!-- <li class="divider-vertical"></li> -->
                        <li class="active"><a href="attendance/check_attendance.php">
                                <h3><i class="attendance-icon">&#128197;</i>&nbsp;ATTENDANCE</h3>
                            </a></li>
                        <li class="divider-vertical"></li>
                        <li class="active"><a href="vote/index.php">
                                <h3><i class="fas fa-vote-yea"></i>&nbsp;VOTE</h3>
                            </a></li>


                        <li class="divider-vertical"></li>
                        <li class="active"><a href="add.php">
                                <h3><i class="fas fa-vote-yea"></i>&nbsp;VOTER REGISTRATION</h3>
                            </a></li>
                        <li class="divider-vertical"></li>
                        <li class="active"><a href="candadd.php">
                                <h3><i class="icon-group"></i>&nbsp;CANDIDATE REGISTRATION</h3>
                            </a></li>
                        <!-- <li class="divider-vertical"></li> -->


                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

<body id="login" style="background:url(images/bg/bg-3-full.jpg)">

    <div class="container">
        <div class="row-fluid">

            <div class="span6">
                <div class="title_index">

                    <div class="row-fluid">
                        <div class="span12"></div>
                        <div class="row-fluid">
                            <div class="span10">
                                <!-- <img class="index_logo" src="img/santotomas.png"> -->
                                <img src="img/santotomas.png" alt="Rotating Image" class="rotate-image">

                            </div>
                            <div class="span12">
                                <div class="motto">

                                    <h3>
                                        <div class="typewriter-container">
                                            <span>WELCOME TO EZEMS</span>
                                        </div>

                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //include('title_index.php'); ?>
                </div>
            </div>
            <?php
if(isset($_GET['status']) && $_GET['status']=='inactive'){
	echo "<h3 style='color:red;text-align: center;'>You have been log out due to inactivity!</h3>";
}

    // If form submitted, insert values into the database.
    if (isset($_POST['ACCOUNT_USERNAME'])){
		$username = stripslashes($_REQUEST['ACCOUNT_USERNAME']); // removes backslashes
		$username = mysqli_real_escape_string($mysqli,$ACCOUNT_USERNAME); //escapes special characters in a string
		$password = stripslashes($_REQUEST['ACCOUNT_PASSWORD']);
		$password = mysqli_real_escape_string($mysqli,$ACCOUNT_PASSWORD);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `useraccounts ` WHERE ACCOUNT_NAME='$ACCOUNT_NAME' and ACCOUNT_PASSWORD='".md5($ACCOUNT_PASSWORD)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['ACCOUNT_USERNAME'] = $ACCOUNT_USERNAME;
			$_SESSION['last_timestamp'] = time(); // Set the last activity timestamp
			header("Location: index.php"); // Redirect user to index.php
			exit();
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{}
?>
<?php
// Verify reCAPTCHA response
function verifyRecaptcha($secretKey, $response) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $secretKey,
        'response' => $response
    );

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === false) {
        return false; // Failed to contact Google reCAPTCHA
    }
    
    $responseJson = json_decode($result, true);
    
    return $responseJson['success'];
}

// Your reCAPTCHA secret key
$secretKey = '6LeDmaQpAAAAAF42-St0gtxrPKHSp2BjiSp-Ca2u';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify reCAPTCHA
    $response = $_POST['g-recaptcha-response'];
    $recaptchaResult = verifyRecaptcha($secretKey, $response);
    
    if ($recaptchaResult) {
        // reCAPTCHA verification successful, handle your form submission here
        echo "reCAPTCHA verification successful. Your form submission is valid.";
    } else {
        // reCAPTCHA verification failed
        echo "reCAPTCHA verification failed. Please try again.";
    }
}
?>


<div class="span6">
                <div class="pull-right">
                    <?php check_message();?>
                    <div id="home">
                        <!--/. tells about what would be the log-in appearance -->
                        <div class="overlay">
                            <!--/. Starting code for the log-in interface appearance -->
                            <fieldset>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="login_form1" class="form-signin" method="post">
                                <!-- reCAPTCHA -->
                                <!-- <div class="g-recaptcha" data-sitekey="6LeDmaQpAAAAAEwsQjBGVQQhg9Z4aUXqRoWdlfaL"></div> -->
                                    <h3 class="form-signin-heading" style="color:#fff">
                                        <div class="animation-container">
                                            <span class=""></span>
                                            <span class="Please Login blink">Please Login</span>
                                            <span class="icon-locked"></span>
                                        </div>
                                    </h3>
                                    <input type="text" autofocus="autofocus" class="input-block-level" id="username"
                                        name="username" placeholder="Username" required>
                                    <input type="password" autofocus="autofocus" class="input-block-level" id="password"
                                        name="password" placeholder="Password" required>

                                    <button data-placement="right" title="Click Here to Sign In" id="signin"
                                        name="btnLogin" class="btn btn-info" type="submit"><i
                                            class="icon-signin icon-large"></i> Log
                                        in</button>

                                </form>
                                <!-- Include reCAPTCHA JavaScript -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            </fieldset>



                            <div class="row-fluid">
                                <div class="col-md-12 ">
                                    <h4 style="color:#fff"><span id="tick2">
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
                                        <h4>
                                </div>
                            </div>
                           
                        </div>


                    </div>
                    <!--/.  END -->

                </div>

                <?php //include('login_form.php'); ?>
            </div>
        </div>


    </div>
    <div class="row-fluid">
        <div class="offset3">
            <div class="span11">
                <div class="index-footer">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container-fluid">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span
                                        class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <style>
                                ul {
                                    float: left;
                                    text-align: left;
                                }
                                </style>
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav" id="footer_nav">
                                        <!-- <li class="divider-vertical"></li> -->

                                        <li class="active"><a href="<?php echo web_root; ?>m.php"><i
                                                    class="icon-home"></i>&nbsp;Home</a></li>
                                        <li class="divider-vertical"></li>

                                        <li class="active"><a href="about.php"><i
                                                    class="icon-info-sign"></i>&nbsp;Mission & Vision</a></li>
                                        <li class="divider-vertical"></li>

                                        <li class="active"><a href="history.php"><i class="icon-file"></i>&nbsp;Company
                                                History</a></li>
                                        <li class="divider-vertical"></li>

                                        <li class="active"><a href="developers.php"><i
                                                    class="icon-group"></i>&nbsp;Developers</a></li>

                                        <!-- <li class="divider-vertical"></li> -->

                                    </ul>
                                </div>
                                <!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                    <?php //include('link.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php //include('footer.php'); ?>
    </div>

    <script src="../vote/script.js"></script> <!-- Link to your JavaScript file -->

</body>

<?php
if (isset($_POST['btnLogin'])) {
    $email = trim($_POST['username']);
    $upass = trim($_POST['password']);
    $h_upass = sha1($upass);

    if ($email == '' or $upass == '') {

        message("Invalid Username and Password!", "error");
        redirect("login.php");

    } else {
        //it creates a new objects of member
        $user = new User();
        //make use of the static function, and we passed to parameters
        $res = $user::userAuthentication($email, $h_upass);
        if ($res == true) {
            message("You logon as " . $_SESSION['ACCOUNT_TYPE'] . ".", "success");

            $sql = "INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`)
          VALUES (" . $_SESSION['ACCOUNT_ID'] . ",'" . date('Y-m-d H:i:s') . "','" . $_SESSION['ACCOUNT_TYPE'] . "','Logged in')";
            $mydb->setQuery($sql);
            $mydb->executeQuery();

            if ($_SESSION['ACCOUNT_TYPE'] == 'Administrator') {
                redirect(web_root . "index.php");
            } elseif ($_SESSION['ACCOUNT_TYPE'] == 'Registrar') {
                redirect(web_root . "index.php");

            } else {
                redirect(web_root . "login.php");
            }
        } else {
            message("Account does not exist! Please contact Administrator.", "error");
            redirect(web_root . "login.php");
        }
    }
}
?>
</head>

<center>
    <footer>
        <p style="color: #fff">EZEMS Copyright 2024</p>
    </footer>
</center>
<script src="<?php echo web_root; ?>js/js/vendors/jquery-1.9.1.min.js"></script>
<script src="<?php echo web_root; ?>js/js/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>


<script src="<?php echo web_root; ?>css/css/jGrowl/jquery.jgrowl.js"></script>
<script>
$(function() {
    $('.tooltip').tooltip();
    $('.tooltip-left').tooltip({
        placement: 'left'
    });
    $('.tooltip-right').tooltip({
        placement: 'right'
    });
    $('.tooltip-top').tooltip({
        placement: 'top'
    });
    $('.tooltip-bottom').tooltip({
        placement: 'bottom'
    });
    $('.popover-left').popover({
        placement: 'left',
        trigger: 'hover'
    });
    $('.popover-right').popover({
        placement: 'right',
        trigger: 'hover'
    });
    $('.popover-top').popover({
        placement: 'top',
        trigger: 'hover'
    });
    $('.popover-bottom').popover({
        placement: 'bottom',
        trigger: 'hover'
    });
    $('.notification').click(function() {
        var $id = $(this).attr('id');
        switch ($id) {
            case 'notification-sticky':
                $.jGrowl("Stick this!", {
                    sticky: true
                });
                break;
            case 'notification-header':
                $.jGrowl("A message with a header", {
                    header: 'Important'
                });
                break;
            default:
                $.jGrowl("Hello world!");
                break;
        }
    });
});
</script>

</html>