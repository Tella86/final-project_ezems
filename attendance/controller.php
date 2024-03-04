<?php
require_once ("../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
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
 
 
	}
   
	function doInsert()
	{
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['StudentID'] == "Select" OR $_POST['Position'] == "Select" OR $_POST['PartyList'] == ""
			OR $_POST['RunningDate'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$birthdate = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

            $age = date_diff(date_create($birthdate), date_create('today'))->y;

            if ($age < 15) {
                message("Invalid age. 15 years old and above is allowed.", "error");
                redirect("index.php?view=add");

            } else {
                // error message
                // duplicate student id
                // date_format(date_create($_POST['BirthDate']),'Y-m-d');

                $sql = "SELECT * FROM tblstudent WHERE StudentID='" . $_POST['StudentID'] . "'";
                $res = mysqli_query($db->conn, $sql);
                $maxrow = mysqli_num_rows($res);
                if ($maxrow > 0) {
                    # code...
                    message("Student ID already in use!", "error");
                    redirect("index.php?view=add");
                } else {

                    // image upload
                    $allowedMimeTypes = array("image/jpeg", "image/png");
                    $allowedExtensions = array("jpg", "jpeg", "png");
                
                    $fileMimeType = $_FILES['photo']['type'];
                    $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                
                    if (!in_array($fileMimeType, $allowedMimeTypes) || !in_array(strtolower($fileExtension), $allowedExtensions)) {
                        // Invalid file format or extension
                        message("Invalid image file format. Allowed formats: JPG, JPEG, PNG,", "error");
                        redirect("index.php?view=add");
                    }
                    $errofile = $_FILES['image']['error'];
                    $type = $_FILES['image']['type'];
                    $temp = $_FILES['image']['tmp_name'];
                    $myfile = $_FILES['image']['name'];
                    $location = "photo/" . $myfile;

                    if ($errofile > 0) {
                        message("No Image Selected!", "error");
                        redirect("index.php?view=add");
                    }else{
                        @$file = $_FILES['image']['tmp_name'];
                        @$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        @$image_name = addslashes($_FILES['image']['name']);
                        @$image_size = getimagesize($_FILES['image']['tmp_name']);
                
                    }
                    if ($image_size == false) {
                        message("Uploaded file is not an image!", "error");
                        redirect("index.php?view=add");
                    }else{
                        move_uploaded_file($temp, $location);
                        // end 0f image upload
 
						$candidate = New Candidate(); 
						$candidate->StudentID 		= $_POST['StudentID'];
						$candidate->Position		= $_POST['Position']; 
						$candidate->PartyList		= $_POST['PartyList']; 
						$candidate->RunningDate	 	= date_format(date_create($_POST['RunningDate']),'Y-m-d');  
						$candidate->create();


						$stud = New Student(); 
						$stud->Cand_Status 		= 'Candidate'; 
						$stud->update($_POST['StudentID']);

									// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
									// $autonum->auto_update(2);

						message("New Candidate created successfully!", "success");
						redirect("index.php"); }
					}
			}	}
		}

	}


	function doEdit(){
	if(isset($_POST['save'])){

		if ($_POST['Position'] == "Select" OR $_POST['PartyList'] == ""
			OR $_POST['RunningDate'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
 
				$candidate = New Candidate(); 
				// $candidate->StudentID 		= $_POST['StudentID'];
				$candidate->Position		= $_POST['Position']; 
				$candidate->PartyList		= $_POST['PartyList']; 
				$candidate->RunningDate	 	= date_format(date_create($_POST['RunningDate']),'Y-m-d');  
				$candidate->update($_POST['CandidateID']);

							// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
							// $autonum->auto_update(2);

				message("Candidate has been updated!", "success");
				redirect("index.php"); 
		 }
 
		   
	}

} 

	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","error");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$candidate = New Candidate();
		// 	$candidate->delete($id[$i]);

		
		// 		// $id = 	$_GET['id'];

		// 		// $subj = New Student();
	 // 		//  	$subj->delete($id);
			 
		
		// }
 
		
				$id = 	$_GET['canid'];

				$candidate = New Candidate();
				$candidate->delete($id);
			 
		 
				$stud = New Student(); 
				$stud->Cand_Status 		= ''; 
				$stud->update($_GET['studid']);

			message("Candidate already Deleted!","success");
			redirect('index.php');
		// }

		
	}
 
 
?>