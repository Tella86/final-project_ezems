<?php
require_once "../include/initialize.php";

?>


<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<script type="text/javascript">
$(document).ready(function() {
    var delay = 2000;
    setTimeout(function() {
        window.location = 'index.php';
    }, delay);
});
</script>
<style>
/* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style the navigation bar */
nav {
    background-color: #333;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    /* Clear floats */
}

nav ul li {
    float: right;
}

nav ul li a {
    display: block;
    color: #fff;
    padding: 20px;
    text-decoration: none;
}

/* Media queries for responsive design */
@media screen and (max-width: 600px) {
    nav ul li {
        float: none;
        width: 100%;
    }

    nav ul li a {
        padding: 10px;
    }
}

@media screen and (max-width: 768px) {
    .container {
        max-width: 90%;
        /* Adjust as needed for smaller screens */
    }
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
    color: white;
}

.animation-container {
    text-align: center;
}

.confirm-payment {
    display: inline-block;
    font-size: 38px;
}
.highlight {
            background-color: yellow;
}
</style>
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>

<body id="login" style="background:url(../images/bg/bg.png)">
    <nav>
        <ul>
            <li><a href="../m.php">Home</a></li>
            <li><a href="login.php">Vote</a></li>
            <li><a href="../tallyofvotes.php">View Tally</a></li>
            <!-- <li><a href="#">Contact</a></li> -->
        </ul>
    </nav>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">

                <a class="brand">
                    <!-- <img src="admin/images/chmsc.png" width="60" height="60"> -->
                </a>
                <a class="brand">
                    <center>
                        <h2>
                            <font size="4" color="white">EZEMS
                        </h2>
                        <div class="chmsc_nav">
                            <font size="4" color="white">The Home Of Developers</font>
                        </div>
                </a>



            </div>
        </div>
    </div>
    <div class="wrapper">
        <?php
global $conn;
$mydb->setQuery("SELECT * FROM `tblstudent` s,`tblcandidate` c WHERE s.`StudentID`=c.`StudentID`");

$cur = $mydb->loadResultList();

foreach ($cur as $result) {

}?>

        <br><br><br><br>
        <div class="thank_you">
            <div class="thank">
                <center>
                    <h1>
                        <font size="6" color="white">Thank You For Voting: <br>
                            <div class="animation-container">
                                <span class="confirm-payment blink"><styele bgcolor="blue"><mark class="highlight">Continue Maintaining Peace!</mark></span>

                            </div>
                            &nbsp;&nbsp;
                        </font>
                    </h1>
                </center>
            </div>


        </div>
    </div>
    <BR><BR><BR><BR>
    <center>
        <li><a href="login.php">
                <h1>
                    <font size="12" color="white"><span class="confirm-payment blink">VOTE HERE</span>
                        <h1>
            </a></li>
    </center>



    </div>

</body>

</html>