<?php  
    $user = New User();
    $res = $user->single_user($_GET['id']);

   

   ?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}


  </style>

  <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">My Account</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
                  <div class="wow fadeInDown">
                        <div class="col-sm-3">
                           
                            <div class="panel">            
                              <div id="img_profile" class="panel-body">
                              <a href="" data-target="#studentmodal" data-toggle="modal" >
                              <img title="profile image" class="img-hover"    src="<?php echo web_root. 'user/'.  $res->USERIMAGE; ?>">
                              </a>
                               </div>
                            <ul class="list-group">
                            
                           
                                 <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $res->ACCOUNT_NAME; ?> </li> 
                                  
                              
                            </ul> 
                                  
                          </div>
                         </div>
                                   
                                  <!--/col-3-->
                          <div class="col-sm-9"> 
                           

                          <form action="controller.php?action=edit" class="form-horizontal" method="post" >
                            <div class="table-responsive">
                            <div class="col-md-8"><h2>Account Information</h2></div>
                              <table class="table"> 
                              <tr>
                                  <td><label>Id:</label></td>
                                  <td style="pull-left" colspan="5" >
                                  <label><?php echo isset($_GET['id']) ? $_GET['id'] : '' ?></label>
                                 </td>
                                  

                                </tr>
                                <tr>
                                  <td><label>Name:</label></td>
                                  <td style="pull-left" colspan="5">
                                    <label ><?php echo  $res->ACCOUNT_NAME; ?></label>
                                  </td>  
                                </tr> 
                                <tr>
                                  <td><label>Username:</label></td>
                                  <td style="pull-left" colspan="5"  >
                                    <label><?php echo $res->ACCOUNT_USERNAME; ?></label> 
                                  </td> 
                                </tr> 
                                <td><label>Role:</label></td>
                                  <td style="pull-left" colspan="5">
                                    <label><?php echo $res->ACCOUNT_TYPE; ?></label> 
                                        </td>
                                 
                                </tr>   
                              </table>
                            </div>
                          </form>
                          </div>

                  </div> 
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 

   <!--  <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        
        </div> 
  </section> --><!--/#bottom-->

 


  <!-- Modal -->
                    <div class="modal fade" id="studentmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows"> 
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="StudentID" id="StudentID" value="<?php echo $res->StudentID; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->