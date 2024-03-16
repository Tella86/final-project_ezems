<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <head>
        <script src="admin/js/jquery-1.7.2.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="admin/js/bootstrap.js"></script>
        <script type="text/javascript" src="admin/js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="admin/js/bootstrap-collapse.js"></script>


        <!----hover pop up -->
        <script src="admin/js/main.js" type="text/javascript"></script>
        <script src="admin/js/mouseover_popup.js" type="text/javascript"></script>


        <div style="display: none;
 position: absolute;
 z-index:100;
 color:white;
 width:auto;
 height:auto;" id="preview_div"></div>


        <script type="text/javascript" src="admin/js/qtip/jquery.qtip.min.js"></script>
        <link href="admin/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">

        <script type="text/javascript" language="JavaScript"></script>
        <script type = "text/javascript" src = "admin/js/eye.js" ></script>
        <script type="text/javascript" src="admin/js/spacegallery.js"></script>
        <script type="text/javascript" src="admin/js/layout.js"></script>

        <link rel="stylesheet" type="text/css" href="admin/css/bootstrap-responsive.css" media="screen, projection" />
        <link rel="stylesheet" href="admin/css/font-awesome.css">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

        <style>
        /* Resetting default margin and padding */
        body,
        ul {
            margin: 0;
            padding: 0;
            width: 1180px;

        }

        /* Styling the navigation bar */
        nav {
            background-color: #333;
            /* Dark background color */



        }

        nav ul {
            list-style-type: none;
            /* Remove bullet points */
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Ensure overflow is hidden */
        }

        nav ul li {
            float: right;
            /* Float the list items to create horizontal layout */

        }

        nav ul li a {
            display: block;
            /* Display the links as block elements for styling */
            color: white;
            /* Text color */
            text-decoration: none;
            /* Remove underline */
            padding: 14px 14px;
            /* Padding around the links */
        }

        nav a .class {
            align-self: auto;
        }

        nav ul li a:hover {
            background-color: #555;
            /* Darker background color on hover */
        }
        </style>
    </head>

<body>

    <nav>
        <br>
        <!-- <img src="../img/sclogo.png" alt="Company Logo" height="80px" width="80px"> -->

        <ul>
            <li><a href="https://localhost/sems/incld/subscription.php">Subscribe</a></li>
            <li><a href="https://youtu.be/hAbaBLnxnzU">Demo</a></li>
            <li><a href="./contact-us/index.php">Contact Us</a></li>
            <li><a href="developers.php">Developerst</a></li>
            <li><a href="history.php">Company History</a></li>
            <li><a href="about.php">Mission | Vision</a></li>
            <li><a href="#">Home</a></li>
        </ul>
        <br>
    </nav>

</body>

</html>