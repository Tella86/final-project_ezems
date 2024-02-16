<?php
require_once ("../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break; 
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){
 

			$errofile = $_FILES['image']['error'];
			$type = $_FILES['image']['type'];
			$temp = $_FILES['image']['tmp_name'];
			$myfile =$_FILES['image']['name'];
			$location="photo/".$myfile;

			@$file=$_FILES['image']['tmp_name'];
			@$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			@$image_name= addslashes($_FILES['image']['name']); 
			@$image_size= getimagesize($_FILES['image']['tmp_name']);

			// echo $type;

		if ($_POST['Event'] == "" OR $_POST['Description'] == "" OR $_POST['EventDate'] == ""
			OR $_POST['EventTime'] == "" ) {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=add');
		}else{	
 

				if ( $errofile > 0) {

						message("No Image Selected!", "error");
						redirect("index.php?view=add");

				}else{
			 
						

					if ($image_size==FALSE || $type=='video/wmv') {
						message("Uploaded file is not an image!", "error");
						redirect("index.php?view=add");
					}else{
 

						move_uploaded_file($temp,"photo/" . $myfile);

						$event = New Event(); 
						$event->Event 			= $_POST['Event'];
						$event->Description		= $_POST['Description']; 
						$event->EventDate		= date_format(date_create($_POST['EventDate']),'Y-m-d');
						$event->EventTime 	    = $_POST['EventTime'];
						$event->Incharge 	    = $_POST['DEPT_ID'];
						$event->EventPhoto		= $location;  
						$event->create();

									// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
									// $autonum->auto_update(2);

						message("New Event created successfully!", "success");
						redirect("index.php");
					 

					}
				}

					
		 }
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

 

			// echo $type;

		if ($_POST['Event'] == "" OR $_POST['Description'] == "" OR $_POST['EventDate'] == ""
			OR $_POST['EventTime'] == "" ) {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=edit&id='.$_POST['EventID']);
		}else{	
 

				 
						$event = New Event(); 
						$event->Event 			= $_POST['Event'];
						$event->Description		= $_POST['Description']; 
						$event->EventDate		= date_format(date_create($_POST['EventDate']),'Y-m-d');
						$event->EventTime 	    = $_POST['EventTime'];
						$event->Incharge 	    = $_POST['DEPT_ID'];
						$event->update($_POST['EventID']);

									// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
									// $autonum->auto_update(2);

						message("Event has been updated", "success");
						redirect("index.php");
					 
		}
			 
	}

} 

	function doDelete(){
		
		if (isset($_POST['selector'])==''){
		message("Select the records first before you delete!","error");
		redirect('index.php');
		}else{

		$id = $_POST['selector'];
		$key = count($id);

		for($i=0;$i<$key;$i++){

			$event = New Event();
			$event->delete($id[$i]);

		
				// $id = 	$_GET['id'];

				// $subj = New Student();
	 		//  	$subj->delete($id);
			 
		
		}
			message("Event(s) already Deleted!","success");
			redirect('index.php');
		}

		
	}
	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="photo/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_GET['id']);
			}else{
					//uploading the file
					move_uploaded_file($temp,"photo/" . $myfile);
		 	
					 

						$event = New Event();
						$event->EventPhoto	= $location;
						$event->update($_POST['EventID']);
						redirect("index.php?view=view&id=". $_POST['EventID']);
						 
							
					}
			}
			 
		}
 
?>