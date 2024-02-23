<?php
require_once "../include/initialize.php";
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
    case 'add':
        doInsert();
        break;

    case 'edit':
        doEdit();
        break;

    case 'photos':
        doupdateimage();
        break;

    case 'delete':
        doDelete();
        break;

}

function doInsert()
{
    global $mydb;
    if (isset($_POST['save'])) {

        if ($_POST['StudentID'] == "Select" or $_POST['Position'] == "Select" or $_POST['PartyList'] == ""
            or $_POST['RunningDate'] == "" or $_POST['Platform'] == "") {
            $messageStats = false;
            message("All fields are required!", "error");
            redirect('index.php?view=add');
        } else {

            $sql = "SELECT * FROM `tblcandidate` WHERE `Position` IN ('President', 'Vice-President')
			AND `PartyList` ='" . $_POST['PartyList'] . "' AND `Position` ='" . $_POST['Position'] . "'";
            $mydb->setQuery($sql);
            $result = $mydb->executeQuery();
            $maxrow = $mydb->num_rows($result);

            if ($maxrow > 0) {

                message($_POST['PartyList'] . " has already a " . $_POST['Position'], "error");
                redirect('index.php?view=add');

            } else {

                $candidate = new Candidate();
                $candidate->StudentID = $_POST['StudentID'];
                $candidate->Position = $_POST['Position'];
                $candidate->PartyList = $_POST['PartyList'];
                $candidate->RunningDate = date_format(date_create($_POST['RunningDate']), 'Y-m-d');
                $candidate->Platform = $_POST['Platform'];
                // $candidate->photo = $_FILES['Photo'];
                $candidate->create();

                $stud = new Student();
                $stud->Cand_Status = 'Candidate';
                $stud->update($_POST['StudentID']);

                // $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
                // $autonum->auto_update(2);

                message("New Candidate created successfully!", "success");
                redirect("index.php");
            }

        }
    }

}

function doEdit()
{
    if (isset($_POST['save'])) {

        if ($_POST['Position'] == "Select" or $_POST['PartyList'] == ""
            or $_POST['RunningDate'] == "" or $_POST['Platform'] == "") {
            $messageStats = false;
            message("All fields are required!", "error");
            redirect('index.php?view=edit&id=' . $_POST['CandidateID']);
        } else {

            $candidate = new Candidate();
            // $candidate->StudentID         = $_POST['StudentID'];
            $candidate->Position = $_POST['Position'];
            $candidate->PartyList = $_POST['PartyList'];
            $candidate->RunningDate = date_format(date_create($_POST['RunningDate']), 'Y-m-d');
            $candidate->Platform = $_POST['Platform'];
            // $candidate->Photo = $_FILES['Photo'];
            $candidate->update($_POST['CandidateID']);

            // $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
            // $autonum->auto_update(2);

            message("Candidate has been updated!", "success");
            redirect("index.php");
        }

    }

}

function doDelete()
{

    $id = $_GET['canid'];

    $candidate = new Candidate();
    $candidate->delete($id);

    $stud = new Student();
    $stud->Cand_Status = '';
    $stud->update($_GET['studid']);

    message("Candidate already Deleted!", "success");
    redirect('index.php');

}
function doupdateimage()
{
    $allowedMimeTypes = array("image/jpeg", "image/png");
    $allowedExtensions = array("jpg", "jpeg", "png");

    $fileMimeType = $_FILES['photo']['type'];
    $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

    if (!in_array($fileMimeType, $allowedMimeTypes) || !in_array(strtolower($fileExtension), $allowedExtensions)) {
        // Invalid file format or extension
        message("Invalid image file format. Allowed formats: JPG, JPEG, PNG,", "error");
        redirect("index.php?view=view&id=" . $_GET['id']);
    }
    $errofile = $_FILES['photo']['error'];
    $type = $_FILES['photo']['type'];
    $temp = $_FILES['photo']['tmp_name'];
    $myfile = $_FILES['photo']['name'];
    $location = "./candidate/photo/" . $myfile;

    if ($errofile > 0) {
        message("No Image Selected!", "error");
        redirect("index.php?view=view&id=" . $_GET['id']);
    } else {

        @$file = $_FILES['photo']['tmp_name'];
        @$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        @$image_name = addslashes($_FILES['photo']['name']);
        @$image_size = getimagesize($_FILES['photo']['tmp_name']);

        if ($image_size == false) {
            message("Uploaded file is not an image!", "error");
            redirect("index.php?view=view&id=" . $_GET['id']);
        } else {
            //uploading the file
            move_uploaded_file($temp, "photo/" . $myfile);

            $stud = new Student();
            $stud->photo = $location;
            $stud->studupdate($_POST['StudentID']);
            redirect("index.php?view=view&id=" . $_POST['StudentID']);

        }
    }

}
