<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Subscription Form</title>
    <link rel="shortcut icon" href="../img/favicon-color.png">
    <script src="../assets/js/p.js"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <div>
        <style>
        /* Resetting default margin and padding */
        body{
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-position: auto;
            height: 100vh;
            display: block;
            justify-content: center;
            align-items: center;
            background: url(../images/bg/mainbg.png);
        }
        ul {
            margin: 0;
            padding: 0;
            width: 1350px;

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
        <ul>
            <li><a href="subscription.php">Subscribe</a></li>
            <li><a href="https://youtu.be/hAbaBLnxnzU">Demo</a></li>
            <li><a href="../contact-us/index.php">Contact Us</a></li>
            <li><a href="../developers.php">Developerst</a></li>
            <li><a href="../about.php">Mission | Vision</a></li>
            <li><a href="../history.php">Company History</a></li>
            <li><a href="../m.php">Home</a></li>
        </ul>
        <br>
    </nav>


    <div class="container">
        <h2>Subscribe to our Package</h2>
        <form id="subscriptionForm" action="controller.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required onkeyup="capitalize(this)"><br>
            <label for="email">Email:</label><br>
            <input id="emailInput" type="email" id="email" name="email" required><br>
            <label for="package">Select Package:</label><br>
            <select id="package" name="package" required>
                <option value="Basic Package (kSH.145/Per Voter)">Basic Package
                    (kSH.145/Per Voter)</option>
                <option value="Premium Package (KSH.150000/P.a)">Premium Package
                    (KSH.150000/P.a)</option>
            </select><br>
            <label for="phone">M~pesa Number:</label><br>
            <input type="text" id="phone" name="phone" required><br>
            <label for="Amount">Amount:</label><br>
            <input type="text" id="Amount" name="Amount" placeholder="Amount" required><br>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br><br>
            <input type="submit" value="Subscribe">
        </form>
        <script>
    // JavaScript function to capitalize input value
    function capitalize(input) {
        input.value = input.value.toUpperCase();
    }
</script>
    </div>

</body>

</html>