<?php
require_once "include/initialize.php";
include "incld/header.php"; 

if (isset($_SESSION['$stkCallbackResponse'])) {
    redirect("callback.php");

    header("Content-Type: application/json");
$stkCallbackResponse = file_get_contents('php://input');
$logfile = "Mpesastkresponse.json";
$log = fopen($logfile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$data = json_decode($stkCallbackResponse);
}

// $data = json_decode($stkCallbackResponse);
// echo $stkCallbackresponse;
// $confirmation = RandomPassword();
// // echo $confirmation;
// $_SESSION['confirmation'] = $confirmation;

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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link href="<?php echo web_root; ?>css/css/index_background.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/my_style.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/styles.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/index.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/DT_bootstrap.css" rel="stylesheet" media="screen">

    <link href="<?php echo web_root; ?>css/css/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root; ?>css/css/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet"
        media="screen">
    <!-- <link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen"> -->
    <link href="<?php echo web_root; ?>css/css/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <style>
    fieldset {
        text-align: center;
        width: 500px;
        background-color: white;
        height: auto;
        margin-left: 30%;
        margin-top: 85px;
        border-radius: 10px;
        box-shadow: 2px 4px 10px rgba(0, 0, 0, .6)
    }

    form INPUT {
        padding: 10px;
    }

    .button {
        width: 110px;
        height: 50px;
        background: url("images/login.png");
        background-size: 110px 50px;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
    }
    /* Add your CSS styles here */
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Define styles for the header */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Define styles for the main content */
        .container {
            max-width: 800px; /* Adjust as needed */
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
                max-width: 90%; /* Adjust as needed for smaller screens */
            }
          }
    </style>
</head>

<body>

    <header>

    </header>
    <div class="container">
    <fieldset>
        <form action="login.php" method="post">
            <?php check_message();?>
            <img src="img/sclogo.png" height="150px" width="500px" alt="site logo">
            <div id="page">
                <div id="header">
                    <div id="container" align="center">
                        <?php
$query = "SELECT * FROM  transactions WHERE 'TransactionID' = 'MpesaReceiptNumber'";
$mydb->setQuery($query);
$cur = $mydb->loadResultList();

foreach ($cur as $result) {
    echo  $result->TransactionID;

}
?>
                        <table>

                            <tbody>
                                <tr>
                                    <style>
                                    b {
                                        color: green;
                                    }
                                    </style>
                                    <td><b>M~pesa Code:</b></td>
                                    <label for="password"></label>
                                    <!-- <td><input type="text" id="pw" name="M~pesa Code" pattern="echo RandomSourceCode" placeholder="Enter Code"required> -->
                                    <td><input type="text" id="psw" name="psw"
                                            pattern="(?=.*\d)(?=.*[0-9])(?=.*[A-Z]).{8,}" title="" required></td>
                                    <!-- <td><input name="pswd" type="password" id="pswd"  placeholder="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}" required></td> -->

                                    </td>
                                </tr>
                                <tr>
                                    <style>
                                    p {
                                        color: green;
                                    }
                                    </style>
                                    <p>Click Get login Details Before You Confirm payment</p>
                                    <p>Confirm payment </p>
                                    <!-- <td colspan="2" align="right"><button type="submit" name="submit" class="button">Confirm</button></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Confirm Pay</button>
                <a href="creditional.php" class="btn btn-primary">Get login Details</a>
            </div>
        </form>
        </div>

        <!-- <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div> -->
        <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
        </script>
    </fieldset>
</body>

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
                            <!--
                  <div class="center collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="footer_nav">
                      <li class="divider-vertical"></li>

                          <li class="active"><a href="<?php echo web_root; ?>index.php"><i class="icon-home"></i>&nbsp;Home</a></li>
                          <li class="divider-vertical"></li>

                        <li class="active"><a href="about.php"><i class="icon-info-sign"></i>&nbsp;Mission & Vision</a></li>
                        <li class="divider-vertical"></li>

                          <li class="active"><a href="history.php"><i class="icon-file"></i>&nbsp;School History</a></li>
                        <li class="divider-vertical"></li>

                          <li class="active"><a href="developers.php"><i class="icon-group"></i>&nbsp;Developers</a></li>

                      <li class="divider-vertical"></li>

                      </ul>
                   </div> -->
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION['code']);?>