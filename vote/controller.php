<?php
require_once ("../include/initialize.php"); 
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'login' :
	login();
	break;
	
	case 'votingproccess' :
	doAdd();
	break;  
	}
   
	function login(){
		global $mydb;
		if(isset($_POST['submit'])){



			
					# code...

					
						// $sql = "SELECT * FROM `tblvotes`
						// 		WHERE `Voters` ='".$_POST['VotingCodes']."' AND DATE_FORMAT( `VoteDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
					 //  	$mydb->setQuery($sql);
	     //      			$res= $mydb->executeQuery();
						// $maxr = $mydb->num_rows($res);
						// if ($maxr > 0 ) {
						// 	# code...
						// 	message("Voting codes does not exist or already used!", "error");
						// 	redirect("login.php");
						// }else{


						// 	  $sql = "SELECT * FROM `tblstudent` WHERE StudentID='" . $_POST['VotingCodes'] . "'";
					 //          $mydb->setQuery($sql);
					 //         $r = $mydb->executeQuery();

						// 		$maxrow = $mydb->num_rows($r);


						// 		if ($maxrow > 0) {
						// 				$row = $mydb->loadSingleResult();
						// 				$_SESSION['CVCodeNo'] = $_POST['VotingCodes'];
						// 				message("You logged in successfully!", "success");
						// 				redirect("vote.php");
						// 		}else{

						// 			message("Vot$row = $mydb->loadSingleResult();
						// 				$_SESSION['CVCodeNo'] = $_POST['VotingCodes'];
						// 				message("You logged in successfully!", "success");
						// 				redirect("vote.php");ing codes does not exist or already used!", "error");
						// 			redirect("login.php");

						// 		}



						
						// }


						$sql = "SELECT * FROM `tblvotingcode`
						WHERE `CodeNo` ='".$_POST['VotingCodes']."'";
						$mydb->setQuery($sql);
						$res= $mydb->executeQuery();
						$maxr = $mydb->num_rows($res);
						if ($maxr > 0 ) { 
							$_SESSION['CVCodeNo'] = $_POST['VotingCodes'];
							message("You logged in successfully!", "success");
							redirect("vote.php");
						}else{ 
							message("Voting codes does not exist or already used!", "error");
							redirect("login.php");

						}

		}
	} 

	function doAdd(){
		global $mydb;
	if(isset($_POST['save'])){

		if ($_POST['President']==''){ 
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['President']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();


			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['President']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}

		if ($_POST['VicePresident']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['VicePresident']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['VicePresident']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}

		if ($_POST['Secretary']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Secretary']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Secretary']."','".date_format(date_create('now'),'Y-m-d') ."')";
			  $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}


		$sen1 = @$_POST['dorm head1'];
		$sen2 = @$_POST['dorm head2'];
		$sen3 = @$_POST['dorm head3'];
		$sen4 = @$_POST['dorm head4'];
		$sen5 = @$_POST['dorm head5'];
		$sen6 = @$_POST['dorm head6'];
		$sen7 = @$_POST['dorm head7'];
		$sen8 = @$_POST['dorm head8'];


		if ($_POST['Treasurer']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Treasurer']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Treasurer']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['College-Babaa']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['College-Babaa']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['College-Babaa']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['College-Mamaa']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['College-Mamaa']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['College-Mamaa']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['Games-Captain']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Games-Captain']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Games-Captain']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['Class-Rep']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Class-Rep']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Class-Rep']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['Class-Secretary']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Class-Secretary']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Class-Secretary']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($_POST['Dorm-Head']==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$_POST['Dorm-Head']."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$_POST['Dorm-Head']."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}

		if ($sen1==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen1."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

			$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen1."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}

		if ($sen2==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen2."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen2."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen3==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen3."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen3."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen4==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen4."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen4."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen5==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen5."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen5."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen6==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen6."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen6."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen7==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen7."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen7."','".date_format(date_create('now'),'Y-m-d') ."')";
			 $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}
		if ($sen8==''){  
		}else{
			$sql = "UPDATE `tblcandidate` SET `TotalVotes`= `TotalVotes` + 1 
					WHERE `StudentID` ='".$sen8."' AND DATE_FORMAT( `RunningDate` , '%Y' )= DATE_FORMAT(NOW() , '%Y' )";
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();

				$sql ="INSERT `tblvotes` (`Voters`, `Candidate`, `VoteDate`)
			 VALUES ('".$_SESSION['CVCodeNo']."','".$sen8."','".date_format(date_create('now'),'Y-m-d') ."')";
			 
	          $mydb->setQuery($sql);
	          $mydb->executeQuery();
		}

		$sql = "DELETE FROM `tblvotingcode` WHERE `CodeNo`='" .$_SESSION['CVCodeNo']."'";
		$mydb->setQuery($sql);
	    $mydb->executeQuery();
		?>

		<script type="text/javascript">
		alert("Votes have already been submitted.")
		</script>
	<?php
	    // message("Voting codes does not exist or already used!", "error");
		redirect("login.php");
		// $studarray = array('' => , );
 
		//   $sql = "UPDATE `tblcandidate` SET `TotalVotes`= WHERE `StudentID` AND `RunningDate`";
	 
	}

} 
?>
