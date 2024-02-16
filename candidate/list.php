<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

 
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Candidates </h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
				   			 <form class=" " action="controller.php?action=delete" Method="POST">   			
								<table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
								
								  <thead>
								  	<tr>
								  	<!-- 	<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID</th>
								  		<th> -->
								  		<th>
								  		<!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
								  		 Candidates</th>
								  		<th>Year</th>  
								  		<th>Department</th>  
								  		<th>Positions</th>  
								  		<th>PartyList</th>
								  		<th>Date of Candidacy</th>  
								  		<th width="20%" >Action</th>
								 
								  	</tr>	
								  </thead> 
								  <tbody>
								  	<?php  
								  	// SELECT `CandidateID`, `Position`, `PartyList`, `RunningDate`, 
								  	// `TotalVotes`,`Firstname`, `Lastname`, `Middlename` `Remarks` FROM `tblcandidate` c, `tblstudent` s
								  	//  WHERE c.`StudentID`=s.`StudentID`

								  		$mydb->setQuery("SELECT * FROM `tblcandidate` c, `tblstudent` s, `tblcourse` cr, tbldepartment d 
								  						WHERE c.`StudentID`=s.`StudentID` AND S.`CourseID` =cr.`CourseID` 
								  						AND cr.`DepartmentID`=d.`DepartmentID` ORDER BY CandidateID desc ");

								  		$cur = $mydb->loadResultList();

										foreach ($cur as $result) {
											 
								  		echo '<tr>';
								  	 	// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CandidateID. '" /> 
								  	 	// 		   '. $result->Firstname.','. $result->Lastname.' '. $result->Middlename.'</td>';
								  	 	echo '<td>'. $result->Firstname.','. $result->Lastname.' '. $result->Middlename.'</td>';
								  		echo '<td>'. $result->YearLevel.'</td>'; 
								  		echo '<td>'. $result->Department.'</td>'; 
								  		echo '<td>'. $result->Position.'</td>'; 
								  		echo '<td>'. $result->PartyList.'</td>';
								  		echo '<td>'. date_format(date_create($result->RunningDate),'M d, Y').'</td>';   
								  		echo '<td align="center" > 
								  		<a title="View Information" href="index.php?view=view&id='.$result->CandidateID.'"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
								  					 <a title="Update Students" href="index.php?view=edit&id='.$result->CandidateID.'" class="btn btn-info btn-xs" >Edit <span class="fa fa-pencil fw-fa"></span> </a>
								  					  <a title="Update Students" href="controller.php?action=delete&canid='.$result->CandidateID.'&studid='.$result->StudentID.'" class="btn btn-danger btn-xs" >Remove <span class="fa fa-trash fw-fa"></span> </a>
								  					
								  					 </td>';
								  		 echo '</tr>';
								  	} 
								  	?>
								  </tbody>
									
								</table>
				 
								<div class="btn-group">
								  <a href="index.php?view=add" class="btn btn-primary"><i class="fa fa-plus fw-fa" ></i> New</a>
								  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="fa fa-trash"></span> Delete Selected</button> -->
						  
							</div>
						</form>
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 