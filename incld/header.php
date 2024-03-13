<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <style>
        /* Resetting default margin and padding */
body, ul {
    margin: 0;
    padding: 0;
    width: 1180px;
    
}

/* Styling the navigation bar */
nav {
    background-color: #333; /* Dark background color */
    
    
    
}

nav ul {
    list-style-type: none; /* Remove bullet points */
    margin: 0;
    padding: 0;
    overflow: hidden; /* Ensure overflow is hidden */
}

nav ul li {
    float: right; /* Float the list items to create horizontal layout */
    
}

nav ul li a {
    display: block; /* Display the links as block elements for styling */
    color: white; /* Text color */
    text-decoration: none; /* Remove underline */
    padding: 14px 14px; /* Padding around the links */
}
nav a .class{
    align-self: auto;
}
nav ul li a:hover {
    background-color: #555; /* Darker background color on hover */
}

    </style>
</head>

<body>

<nav>
    <br>
    <!-- <img src="../img/sclogo.png" alt="Company Logo" height="80px" width="80px"> -->
          
    <ul>
    <li><a href="https://localhost/sems/incld/subscription.html">Subscribe</a></li>
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
