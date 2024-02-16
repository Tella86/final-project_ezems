<?php
 require_once ("../include/initialize.php");
?>
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet"> 
	<link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet"> 
	<!-- datetime picker CSS -->   
	<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css"> 

<?php
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
  
	case 'Dorm-Head' :
	senator2();
	break; 
	case 'senator3' :
	senator3();
	break; 
	case 'senator4' :
	senator4();
	break; 
	case 'senator5' :
	senator5();
	break; 
	case 'senator6' :
	senator6();
	break; 
	case 'senator7' :
	senator7();
	break; 
	case 'senator8' :
	senator8();
	break;    

	}
 
function senator2(){
   
echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator2">Senators 2:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator3'] ."','" . $_POST['senator4']."','" . $_POST['senator5'] ."','" . $_POST['senator6'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator2" id="senator2">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
       </div>
	</div>';

}

function senator3(){ 

echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator3">Senators 3:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator4']."','" . $_POST['senator5'] ."','" . $_POST['senator6'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator3" id="senator3">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>
	 ';

 
}
function senator4(){
 echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator4">Senators 4:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator3']."','" . $_POST['senator5'] ."','" . $_POST['senator6'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator4" id="senator4">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>';
}
function senator5(){
  echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator5">Senators 5:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator3']."','" . $_POST['senator4']."','" . $_POST['senator6'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator5" id="senator5">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>
	 ';
	
}
function senator6(){
 
	  echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator6">Senators 6:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator3']."','" . $_POST['senator4']."','" . $_POST['senator5'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator6" id="senator6">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>';
}
function senator7(){
	  echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator7">Senators 7:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator3']."','" . $_POST['senator4']."','" . $_POST['senator5'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator7" id="senator7">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>
	 ';
 
	
}
function senator8(){

 	  echo '<div class="col-md-12">
		    <label class="col-md-4 control-label" for=
		    "Senator8">Senators 8:</label>
		    <div class="col-md-8">'; 

			$query = "SELECT * FROM `tblstudent` s , `tblcandidate` c 
						WHERE s.`StudentID`=c.`StudentID` 
						AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' ) 
						AND `Position`='Senator'
						AND c.`StudentID` NOT IN ('".$_POST['senator1'] ."','" . $_POST['senator2'] ."','" . $_POST['senator3']."','" . $_POST['senator4']."','" . $_POST['senator5'] ."','" . $_POST['senator7']."') ";
			$res = mysql_query($query) or die(mysql_error());

		 echo '<select class="form-control select2" name="senator8" id="senator8">';
		 echo '<option value="">Select</option>';
			while ($row = mysql_fetch_array($res)) {
			# code...
			echo "<option value=".$row['StudentID'].">".$row['Lastname'].', '.$row['Firstname']."</option>";
			}

 		echo '</select>'; 

 echo	  '</div> 
	  </div>
	 ';
}
?>
 
<script src="<?php echo web_root; ?>jquery/jquery.min.js"></script> 
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
 

    <!-- DataTables JavaScript -->  
<script src="<?php echo web_root; ?>js/selectsenators.js"></script>  