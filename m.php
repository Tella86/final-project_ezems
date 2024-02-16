<?php
require_once "include/initialize.php";

?>
  <?php
if (isset($_SESSION['ACCOUNT_ID'])) {
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
<title>PAY EZEMS&nbsp;</title>

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

 <div class="navbar">
     <div class="navbar-inner">
         <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
        <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </a>
                  <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav" id="footer_nav">
                    <li class="divider-vertical"></li>

                    <li class="divider-vertical"></li>
                  </ul>
                                </div>

                              <style>
                                  * {
                                    padding: 0;
                                    margin: 0;
                                  }
                                /* // Developed by http://ezems.com/ */

                                body {
                                  display: flex;
                                  flex-direction: column;
                                  justify-content: center;
                                  align-items: center;
                                  position: relative;
                                  min-height: 10vh;
                                  font-family: Hack, monospace;
                                }

                                div {
                                  color: #727272;
                                  text-align: center;
                                }

                                p {
                                  margin: 16px;
                                  font-size: 96px;
                                  color: #ccc;
                                  text-transform: uppercase;
                                  font-weight: 600px;
                                  transition: all 1s ease-in-out;
                                  position: relative;

                                  &::before {
                                    content: attr(data-item);
                                    transition: all 1s ease-in-out;
                                    color: #8254ff;
                                    position: absolute;
                                    top: 10px;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    width: 0;
                                    overflow: hidden;
                                  }

                                  &:hover {
                                    &::before {
                                      width: 100%;
                                    }
                                  }
                                }

                                nav {
                                  margin: 25px;
                                  background: green;
                                  padding: 16px;
                                  .menuItems {
                                    list-style: none;
                                    display: flex;

                                    li {
                                      margin: 8px;

                                      a {
                                        text-decoration: none;
                                        color: white;
                                        font-size: 14px;
                                        font-weight: 10px;
                                        /* transition: all 0.0s ease-in-out; */
                                        position: relative;
                                        text-transform: uppercase;

                                        &::before {
                                          content: attr(data-item);
                                          transition: 0.5s;
                                          color: #8254ff;
                                          position: absolute;
                                          top: 1PX;
                                          bottom: 0;
                                          left: 0;
                                          right: 0;
                                          width: 0;
                                          overflow: hidden;
                                        }

                                        &:hover {
                                          &::before {
                                            width: 10%;
                                            transition: all 0.5s ease-in-out;
                                          }
                                        }
                                      }
                                    }
                                  }
                                }


                                    </style>
                        <!-- Developed by http://ezemst.com/ -->
<div></div>
<p data-item='EZEMS'>EZEMS</p>

<section>
  <div></div>
  <nav>
    <ul class="menuItems">
      <li><a href='#' data-item=''>Home</a></li>
      <li><a href='about.php' data-item=''>Mission | Vision</a></li>
      <li><a href='history.php' data-item=''>Company History</a></li>
      <li><a href='developers.php' data-item=''>Developers</a></li>
      <li><a href='https://youtu.be/hAbaBLnxnzU' target="_blank">Demo</a></li>
    </ul>
  </nav>


                <body id="login" style="background:url(images/bg/bgtest2.png)">
                </div>

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
                      <img class="index_logo" src="img/santotomas.png">
                      </div>

                      </div>
                    </div>
              </div>
            <?php //include('title_index.php'); ?>
        </div>
      </div>

                  <link
                    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                    rel="stylesheet"/>
                  <link href="" rel="stylesheet" />
                  <!-- CSS only -->
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
                  <script>
                    type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
                  </script>
                  <link rel="stylesheet" href="style.css">

        <style>
            /* @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap"); */
            body {
              background-color: #eaedf4;
              font-family: "Rubik", sans-serif;

            }

            .card {
              width: 310px;
              border: none;
              border-radius: 15px;
              float: right;
            }

            .justify-content-around div {
              border: none;
              border-radius: 20px;
              background: #f3f4f6;
              padding: 5px 20px 5px;
              color: #8d9297;
            }
            .justify-content-around span {
              font-size: 12px;
            }

            .justify-content-around div:hover {
              background: #545ebd;
              color: #fff;
              cursor: pointer;
            }

            .justify-content-around div:nth-child(1) {
              background: #545ebd;
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


          </style>
          <div class="span6">
        <div class="pull-right">
        <?php check_message();?>
                <div id="home" ><!--/. tells about what would be the log-in appearance -->
        <div class="overlay">

        <body oncontextmenu="return false" class="snippet-body">
        <div class="container d-flex justify-content-center">
                <div class="card mt-5 px-3 py-4">
                <div class="d-flex flex-row justify-content-around">
                <div class="mpesa"><h2>Full Package</h2><h2>Ksh.50,000/</h2></div>

                    <div class="media mt-4 pl-2">
                    <img src="mpesa.png" class="mr-1" height="75" />
                    <div >
                  </div>

                    </div>
                  </div>
                  <div> <h9>You will receive a popup on your phone. Enter your</h9> <b>MPESA PIN</b></p>
                  <div class="media mt-3 pl-2"></div><h6>Enter Amount & Number</h6>
                   <form class="row g-3" action="./stk_initiate.php" method="POST">

                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount" placeholder="50000" required>
                  </div>
                  <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>

                  <input id="cardnumber" type="text" class="form-control" name="phone"  maxlength="13" placeholder="254700000000" required>
                  </div>

                  <div class="col-12">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">Pay</button>
                  <!-- <button type="submit"><a href="https://paypal.com" target="_blank" class="btn btn-info" name="submit" value="submit">PAYPAl</button></a> -->
                  </div>
                  </form>
                   <!--bs5 input-->
              </div>
            </div>
          </div>
        </div>
        <script
          type="text/javascript"
          src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        ></script>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src=""></script>
        <script type="text/Javascript"></script>

            <div class="row-fluid">
            <div class="col-md-12 ">
            <h4 style="color:#fff"><span id="tick2" >
              </span>&nbsp;|

<script>
// <!--/. tells about the time  -->
function show2(){
if (!document.all&&!document.getElementById)
return
thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
var ctime=hours+":"+minutes+":"+seconds+" "+dn
thelement.innerHTML=ctime
setTimeout("show2()",1000)
}
window.onload=show2
//-->

</script> <!--/. Script where the format of the interface time,month,day and year relies -->

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

<?php
?>
</head>

</html>
