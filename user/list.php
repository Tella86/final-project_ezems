<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Users</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
                	<div class="wow fadeInDown">
						<form action="controller.php?action=delete" Method="POST">   		
						<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

						  <thead>
						  	<tr>
						  		<!-- <th>#</th> -->
						  		<th>
						  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
						  		 Account Name</th>
						  		<th>Username</th>
						  		<th>Role</th>
						  		<!-- <th width="10%" >Action</th> -->
						 
						  	</tr>	
						  </thead> 
						  <tbody>
						  	<?php  
						  		$mydb->setQuery("SELECT * 
													FROM  `useraccounts`");
						  		$cur = $mydb->loadResultList();

								foreach ($cur as $result) {
						  		echo '<tr>';
						  		// echo '<td width="5%" align="center"></td>';
						  		echo '<td>' . $result->ACCOUNT_NAME.'</a></td>';
						  		echo '<td>'. $result->ACCOUNT_USERNAME.'</td>';
						  		echo '<td>'. $result->ACCOUNT_TYPE.'</td>';
						  		If($result->ACCOUNT_ID==$_SESSION['ACCOUNT_ID'] || $result->ACCOUNT_TYPE=='MainAdministrator' || $result->ACCOUNT_TYPE=='Administrator') {
						  			$active = "Disabled";

						  		}else{
						  			$active = "";

						  		}

						  		// echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->ACCOUNT_ID.'"  class="btn btn-info btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
						  		// 			 <a title="Delete" href="controller.php?action=delete&id='.$result->ACCOUNT_ID.'" class="btn btn-danger btn-xs" '.$active.'><span class="fa fa-trash-o fw-fa"></span> </a>
						  		// 			 </td>';
						  		// echo '</tr>';
						  	} 
						  	?>
						  </tbody>
							
						</table>

						 <div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-primary"><i class="fa fa-plus-circle fw-fa"></i>New</a>
						  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
						</div>
						 
						</form>


                		
                	</div> <!-- fadeInDown -->
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 