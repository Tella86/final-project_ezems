
 <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  img {
    width: 100%;
    height:auto;
}


  </style>


<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h3 class="page-header">Eng.Ziroh Event Tallying System</h3>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
                      <div class="col-sm-6 wow fadeInDown">

                              <div class="panel" id="imgview">            
                                <div id="img_profile" class="panel-body">
                                <!-- <a href="" data-target="#studentmodal" data-toggle="modal" > -->
                                    <img title="profile image" id="imgprofile" class="img-hover"    src="<?php //echo web_root. 'admin/student/'.  $res->StudPhoto; ?>">
                                <!-- </a> -->
                                 </div>
                              <ul class="list-group">
                              
                                  <li class="list-group-item text-right"><span class="pull-left">IDNO</span>:<input type="text" id="StudentID"></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Name</span>:<label id="name">NONE</label> </li>
                                  <li class="list-group-item text-right"><span class="pull-left">Course</span>:<label id="course">NONE</label></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Year</span>:<label id="year">NONE</label> </li>
                                    
                                
                              </ul> 
                                    
                            </div>
                        </div>
                             
                            <!--/col-3-->
                      <div class="col-sm-6 wow fadeInDown"> 
               


                      <form action="controller.php?action=edit" class="form-horizontal" method="post" >
                      <div class="table-responsive">
                      <div class="col-md-8">

                        <h3 style="color:#000"><span id="tick2" class="pull-rigth" >
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
                          <h3>


                      </div>
                        
                      </div>
                      </form>
                      </div>
 
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 