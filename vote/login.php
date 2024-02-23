<?php
require_once "../include/initialize.php";
if (isset($_SESSION['CVCodeNo'])) {
    redirect(web_root . "vote/index.php?view=vote");
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

<link href="<?php echo web_root; ?>css/css/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/css/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/css/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
<style>
	fieldset
		{
			text-align:center; width: 500px;
			background-color:white;
			height: auto;
			margin-left:30%;
			margin-top:85px;
			border-radius: 10px;
			box-shadow: 2px 4px 10px rgba(0,0,0,.6)
		}
	form INPUT
		{
			padding: 10px;
		}
	body
		{
			background:url(../images/bg/bgtest2.png);
    }
	.button
		{
			width:110px;
			height:50px;
			background: url("../images/login.png");
			background-size: 110px 50px;
			background-repeat: no-repeat;
			border:none;
			cursor:pointer;
		}
    a{
      font-size: 16px;
      color: black;
    }
</style>
</head>
<body>
								<div class="navbar navbar-inner block-header">
									<div class="container">
									<div id="" class="muted pull-right">
									 <a id="return" data-placement="left" title="Click to Return" href="/sems/m.php"><i class="icon-arrow-left"></i> Back</a>
                   <a id="return" data-placement="left" title="Click to Return" href="/sems/tallyofvotes.php"><i class="icon-arrow-left"></i> View results</a>
									</div>
									</div>
<header></header>
<fieldset>
<form method="post" action="controller.php?action=login">
<?php check_message();?>
<img src = "../images/law.jpg" height="200px" width="500px" alt="site logo">
<div id="page">
  <div id="header">
    <div id="container" align="center">
      <table>
      <tbody>
        <tr>
          <td><b>Voting Code:</b></td>
          <td><input name="VotingCodes" type="password" id="VotingCodes" placeholder="Enter Voting Code" required autocomplete="off"></td>
        </tr>
        <tr>
          <td ><button type="submit" name="submit" class="button"></button></td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
</div>
</form>
</fieldset>
</body>

 <div class="row-fluid">
        <div class="offset3">
         <div class="span11">
            <div class="index-footer">
              <div class="navbar">
               <div class="navbar-inner">
                   <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
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
    <?php unset($_SESSION['CVCodeNo']);?>