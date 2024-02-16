<?php  
    $event = New Event();
    $res = $event->single_event($_GET['id']);

 

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


  <section id="blog" class="container"> 
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header" >Events</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
                       <div class="blog">
                          <div class="row  wow fadeInDown">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
                                  <div class="blog-item">
                                   <a href="" data-target="#studentmodal" data-toggle="modal" >
                                    <img title="" class="img-hover img-responsive img-blog" style="width:800px;height:350px;"    src="<?php echo web_root. 'event/'.  $res->EventPhoto; ?>">
                                    </a>
                                     <!--  <img class="img-responsive img-blog" src="../../images/blog/blog1.jpg" style="width:800px"  alt="" /> -->
                                          <div class="row">  
                                              <div class="col-xs-12 col-sm-2 text-center">
                                                  <div class="entry-meta">
                                                      <span id="publish_date"><i class="fa fa-calendar"></i> <?php echo date_format(date_create($res->EventDate),'M d, Y'); ?>
                                                      <p><i class="fa fa-clock-o"></i>   <?php echo  $res->EventTime ; ?></p></span>
                                                  </div>
                                              </div>
                                              <div class="col-xs-12 col-sm-10 blog-content">
                                                  <h2><?php echo  $res->Event; ?></h2>
                                                  
                                                  <blockquote>
                                                  <?php echo  $res->Description; ?>
                                                    
                                                  </blockquote> 

                                                <!--   <div class="post-tags">
                                                      <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
                                                  </div> -->

                                              </div>
                                          </div>
                                      </div><!--/.blog-item-->
                                  
                             </div>

                              <div class="col-md-2"></div>

                          </div><!--/.row-->

                       </div><!--/.blog--> 
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
  <!-- Modal -->
                    <div class="modal fade" id="studentmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>event/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows"> 
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="EventID" id="EventID" value="<?php echo $res->EventID; ?>">
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