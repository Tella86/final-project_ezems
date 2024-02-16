<?php
require_once "../include/initialize.php";
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home |Event Tallying</title>

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

<style type="text/css">
  #space{
    padding: 3px;
    width: 100%;

  }
  #box{
    width: 200px;
    height: 50px;
    border: solid 1px #000;
    position: center;
    font-size: 25px;
    padding-left: 40px;
    padding-top: 10px;
  }

</style>
<body onload="window.print();">
<!-- <body> -->


   <div class="row">
      <div class="col-xs-12">
        <h4 class="page-header ">
          <i class="fa fa-globe"></i> EZEMS Event Tallying
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <div class="row"><h2 align="center">List of Voting Codes</h2>

    </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
    <?php
$autonum = new Autonumber();
$autoPrint = $autonum->set_autonumber(1);

$sql = "SELECT * FROM `tblvotingcode` WHERE `CVUse`=1 AND `AuthPrint`=" . $autoPrint->AUTO;
$mydb->setQuery($sql);
$res = $mydb->loadResultList();

foreach ($res as $row) {
    # code...
    echo '<div id="space" ><div id="box" class="col-md-3">' . $row->CodeNo . '</div></div>';

}

?>
    </div>
  </div>
 </div>
<!-- </div> -->
<!-- ./wrapper -->
</body>
  <footer id="footer" class="midnight-blue" style="background-color:#663399">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023-2024<a target="_blank" href="<?php echo web_root; ?>" title="Free Twitter Bootstrap WordPress Themes and HTML templates">EZEMS</a>. All Rights Reserved.
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
</html>
