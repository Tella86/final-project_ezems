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
 
 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['StudentID'] == "Select" OR $_POST['Position'] == "Select" OR $_POST['PartyList'] == ""
			OR $_POST['RunningDate'] == "" or  $_POST['Platform']=="" ) {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=add');
		}else{	

			$sql = "SELECT * FROM `tblcandidate` WHERE `Position` IN ('President', 'Vice-President') 
			AND `PartyList` ='". $_POST['PartyList']."' AND `Position` ='". $_POST['Position']."'";
			$mydb->setQuery($sql); 
			$result = $mydb->executeQuery(); 
			$maxrow = $mydb->num_rows($result);

			if ($maxrow > 0){

				message($_POST['PartyList']. " has already a ".$_POST['Position'],"error");
				redirect('index.php?view=add');

			}else{

				$candidate = New Candidate(); 
				$candidate->StudentID 		= $_POST['StudentID'];
				$candidate->Position		= $_POST['Position']; 
				$candidate->PartyList		= $_POST['PartyList']; 
				$candidate->RunningDate	 	= date_format(date_create($_POST['RunningDate']),'Y-m-d');  
				$candidate->Platform		= $_POST['Platform'];
				$candidate->create();


				$stud = New Student(); 
				$stud->Cand_Status 		= 'Candidate'; 
				$stud->update($_POST['StudentID']);

							// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
							// $autonum->auto_update(2);

				message("New Candidate created successfully!", "success");
				redirect("index.php"); 
			}

 
		 }
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

		if ($_POST['Position'] == "Select" OR $_POST['PartyList'] == ""
			OR $_POST['RunningDate'] == "" or  $_POST['Platform']=="" ) {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=edit&id='.$_POST['CandidateID']);
		}else{	
 
				$candidate = New Candidate(); 
				// $candidate->StudentID 		= $_POST['StudentID'];
				$candidate->Position		= $_POST['Position']; 
				$candidate->PartyList		= $_POST['PartyList']; 
				$candidate->RunningDate	 	= date_format(date_create($_POST['RunningDate']),'Y-m-d');  
				$candidate->Platform		= $_POST['Platform'];
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