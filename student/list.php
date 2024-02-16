<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

?>

 
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Students </h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
				   			 <form class=" wow fadeInDown" action="controller.php?action=delete" Method="POST">   			
								<table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
								
								  <thead>
								  	<tr>
								  		<th> <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> --> IDNO</th>
								  		<th>
								  		
								  		 Name</th>
								  		<th>Sex</th> 
								  		<!-- <th>Age</th> -->
								  		<th>Address</th>
								  		<th>Contact No.</th>
								  		<th>Course</th>
								  		<!-- <th>Status</th> -->
								  		<th width="14%" >Action</th>
								 
								  	</tr>	
								  </thead> 
								  <tbody>
								  	<?php  

								  		$mydb->setQuery("SELECT * FROM `tblstudent` s,`tblcourse` c WHERE s.`CourseID`=c.`CourseID`");

								  		$cur = $mydb->loadResultList();

										foreach ($cur as $result) {
											 
								  		echo '<tr>';
								  		// echo '<td  ><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
								  		// echo '<td width="5%" align="center"></td>';
								  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->StudentID. '"/> ' . $result->StudentID.'</a></td>';
								  		echo '<td>' . $result->StudentID.'</a></td>';
								  		echo '<td>'. $result->Firstname.','. $result->Lastname.' '. $result->Middlename.'</td>';
								  		echo '<td>'. $result->Gender.'</td>';
								  		// echo '<td>' .$age.'</td>';
								  		echo '<td>'. $result->Address.'</td>';
								  		echo '<td>'. $result->ContactNo.'</td>';
								  		echo '<td>' . $result->CourseCode.'-' . $result->Description.'</a></td>';
								  		 
								  		echo '<td align="center" > <a title="View Information" href="index.php?view=view&id='.$result->ID.'"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
								  					 <a title="Update Students" href="index.php?view=edit&id='.$result->ID.'" class="btn btn-info btn-xs" >Edit <span class="fa fa-pencil fw-fa"></span> </a>
								  					 </td>';
								  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->StudentID.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
								  		// 			 </td>';
								  		echo '</tr>';
								  	} 
								  	?>
								  </tbody>
									
								</table>
				 
								<div class="btn-group">
								  <a href="index.php?view=add" class="btn btn-primary"><i class="fa fa-plus"></i> New</a>
								  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="fa fa-trash"></span> Delete Selected</button> -->
						  
							</div>
						</form>
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->