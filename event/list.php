<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

?>

 
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Events </h2>
             </div>

            <div class="row">
                <div class="features">
				   			 <form class=" wow fadeInDown" action="controller.php?action=delete" Method="POST">   			
								<table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
								
								  <thead>
								  	<tr>
								  		<!-- <th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID</th> -->
								  		<th> 
								  		<!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
								  		 Events</th>
								  		<th>Description</th>  
								  		<th>Date</th>
								  		<th>Time</th> 
								  		<th>Incharge</th> 
								  		<th width="14%" >Action</th>
								 
								  	</tr>	
								  </thead> 
								  <tbody>
								  	<?php  

								  		$mydb->setQuery("SELECT * FROM `tblevents` e, tbldepartment d WHERE e.Incharge=d.DepartmentID");
// $mydb->setQuery("SELECT * FROM `tblevents` ");
								  		$cur = $mydb->loadResultList();

										foreach ($cur as $result) {
											 
								  		echo '<tr>';
								  		// echo '<td  ><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
								  		// echo '<td width="5%" align="center"></td>';
								  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->EventID. '"/>' . $result->EventID.'</a></td>';
								  		// echo '<td> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->EventID. '"/> '. $result->Event.'</td>';
								  		echo '<td> '. $result->Event.'</td>';
								  		echo '<td>'. $result->Description.'</td>';
								  		// echo '<td>' .$age.'</td>';
								  		echo '<td>'. date_format(date_create($result->EventDate),'M d, Y') .'</td>';
								  		echo '<td>'. $result->EventTime.'</td>'; 
								  		echo '<td>'. $result->Department.'</td>'; 
								  		echo '<td align="center" > <a title="View Information" href="index.php?view=view&id='.$result->EventID.'"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
								  					 <a title="Update Students" href="index.php?view=edit&id='.$result->EventID.'" class="btn btn-info btn-xs" >Edit <span class="fa fa-pencil fw-fa"></span> </a>
								  					 </td>';
								  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->EventID.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
								  		// 			 </td>';
								  		echo '</tr>';
								  	} 
								  	?>
								  </tbody>
									
								</table>
				 
								<div class="btn-group">
								<a href="index.php?view=add" class="btn btn-default"><i class="fa fa-plus-circle fw-fa"></i>New</a>
								 <!--  <button type="submit" class="btn btn-default" name="delete"><i class="fa fa-trash"></i> Delete Selected</button> -->
						  
							</div>
						</form>
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 

    <!-- <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        
            </div>
        </div>
    </section> --><!--/#bottom-->
