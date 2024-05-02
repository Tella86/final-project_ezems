<?php
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

?>
<link rel="shortcut icon" href="img/favicon-color.png">
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Voters </h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
				   			 <form class=" wow fadeInDown" action="controller.php?action=delete" Method="POST">
                                <table class="users-table">
                                    <table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">

								  <thead>
								  	<tr>
								  		<th> <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> --> StudentID</th>
								  		<th>

								  		 Full Name</th>
								  		<th>Sex</th>
								  		<!-- <th>Age</th> -->
								  		<!-- <th>Code</th> -->
								  		<th>Address</th>
								  		<th>Contact No</th>
								  		<th>CourseCode</th>
                                        <th>Photo</th>
                                        <th>Status</th>
								  		<th width="20%" >Action</th>

								  	</tr>
								  </thead>
								  <tbody>
<?php $mydb->setQuery("SELECT * FROM `tblstudent` s,`tblcourse` c WHERE s.`CourseID`=c.`CourseID`");

$cur = $mydb->loadResultList();

foreach ($cur as $result) {

    echo '<tr>';

    echo '<td>' . $result->StudentID . '</a></td>';
    echo '<td>' . $result->Firstname . ',' . $result->Lastname . ' ' . $result->Middlename . '</td>';
    echo '<td>' . $result->Gender . '</td>';
// echo '<td>' . $result->Code . '</td>';
    echo '<td>' . $result->Address . '</td>';
    echo '<td>' . $result->ContactNo . '</td>';
    echo '<td>' . $result->CourseCode . '-' . $result->Description . '</a></td>';
    echo '<td><img width="50" height="50" src="' . web_root . 'student/photo/' . $result->StudPhoto . '"> </td>';
    echo '<td>' . $result->Voter_Status . '</td>';
    echo '<td align="center" > <a title="View Information" href="index.php?view=view&id=' . $result->ID . '"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
                                                   <a title="Update Students" href="index.php?view=edit&id=' . $result->ID . '" class="btn btn-info btn-xs" >Edit <span class="fa fa-pencil fw-fa"></span> </a>
                                                   <a title="Update Students" href="controller.php?action=delete&studid=' . $result->ID . '&studid=' . $result->ID . '" class="btn btn-danger btn-xs" >Remove <span class="fa fa-trash fw-fa"></span> </a>
                                                   </td>';

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