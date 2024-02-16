<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Departments</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">
							  		  ID</th>
							  		 <th>
							  		  Department</th>
							  		<th>Description</th>
							  	 	<th width="10%" >Action</th>
							 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * 
														FROM  `tbldepartment`");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>' . $result->DepartmentID.'</a></td>';
							  		echo '<td>'. $result->Department.'</td>';
							  		echo '<td>'. $result->Description.'</td>';
							  	  
							  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->DepartmentID.'"  class="btn btn-info btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
							  					 <a title="Delete" href="controller.php?action=delete&id='.$result->DepartmentID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
							  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>

							 <div class="btn-group">
							  <a href="index.php?view=add" class="btn btn-primary"> <i class="fa fa-plus-circle fw-fa"></i> New</a>
							  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
							</div>
							 
							</form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 