<?php
require_once "../include/initialize.php";
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$db = new Database();

switch ($action) {
    case 'add':
        doInsert();
        break;

    case 'edit':
        doEdit();
        break;

    case 'delete':
        doDelete();
        break;

    case 'photos':
        doupdateimage();
        break;

    case 'checkid':
        Check_StudentID();
        break;

}
function doInsert()
{
    global $db;
    if (isset($_POST['save'])) {

        if ($_POST['StudentID'] == "" or $_POST['Firstname'] == "" or $_POST['Lastname'] == ""
            or $_POST['Middlename'] == "" or $_POST['CourseID'] == "none" or $_POST['Address'] == ""
            or $_POST['ContactNo'] == "") {
            $messageStats = false;
            message("All fields are required!", "error");
            redirect('index.php?view=add');
        } else {

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
                    $stud = new Student();
                    $stud->StudentID = $_POST['StudentID'];
                    $stud->Firstname = $_POST['Firstname'];
                    $stud->Lastname = $_POST['Lastname'];
                    $stud->Middlename = $_POST['Middlename'];
                    $stud->CourseID = $_POST['CourseID'];
                    // $stud->photo = $_FILES['photo'];
                    $stud->Address = $_POST['Address'];
                    $stud->BirthDate = $birthdate;
                    $stud->Age = $age;
                    $stud->Gender = $_POST['optionsRadios'];
                    $stud->ContactNo = $_POST['ContactNo'];
                    $stud->YearLevel = $_POST['YearLevel'];
                    $stud->create();

                    // $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
                    // $autonum->auto_update(2);

                    message("New student created successfully!", "success");
                    redirect("index.php");

                }

            }
        }
    }

}

function doEdit()
{
    if (isset($_POST['save'])) {

        if ($_POST['StudentID'] == "" or $_POST['Firstname'] == "" or $_POST['Lastname'] == ""
            or $_POST['Middlename'] == "" or $_POST['CourseID'] == "none" or $_FILES['StudPhoto'] == "none" or $_POST['Address'] == ""
            or $_POST['ContactNo'] == "") {
            $messageStats = false;
            message("All fields are required!", "error");
            redirect('index.php?view=add');
        } else {

            $birthdate = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

            $age = date_diff(date_create($birthdate), date_create('today'))->y;
            if ($age < 15) {
                message("Invalid age. 15 years old and above is allowed.", "error");
                redirect("index.php?view=view&id=" . $_POST['StudentID']);

            } else {

                // echo  $_POST['optionsRadios'];
                $stud = new Student();
                $stud->StudentID = $_POST['IDNO'];
                $stud->Firstname = $_POST['Firstname'];
                $stud->Lastname = $_POST['Lastname'];
                $stud->Middlename = $_POST['Middlename'];
                $stud->CourseID = $_POST['CourseID'];
                $stud->StudPhoto = $_FILES['StudPhoto'];
                $stud->Address = $_POST['Address'];
                // $stud->BirthDate         = date_format(date_create($_POST['BirthDate']),'Y-m-d');
                $stud->BirthDate = $birthdate;
                $stud->Age = $age;
                $stud->Gender = $_POST['optionsRadios'];
                $stud->ContactNo = $_POST['ContactNo'];
                $stud->YearLevel = $_POST['YearLevel'];

                $stud->studupdate($_POST['StudentID']);

                message("Student has been updated!", "success");
                redirect("index.php?view=view&id=" . $_POST['StudentID']);
            }

        }

    }

}

function doDelete()
{
    $id = $_GET['studid'];

    $student = new Student();
    $student->delete($id);

    $stud = new Student();
    // $stud->Stud_Status = '';
    $stud->update($_GET['studid']);
    message("Student(s) already Deleted!", "success");
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
    $location = "photo/" . $myfile;

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
            $stud->StudPhoto = $location;
            $stud->studupdate($_POST['StudentID']);
            redirect("index.php?view=view&id=" . $_POST['StudentID']);

        }
    }

}

function Check_StudentID()
{
    global $db;

    // $stud = New Student();
    // $res = $stud->single_student($_POST['IDNO']);

    $sql = "SELECT * FROM tblstudent WHERE StudentID='" . $_POST['IDNO'] . "'";
    $res = mysqli_query($db->conn, $sql) or die(mysqli_error());
    $maxrow = mysqli_num_rows($res);
    if ($maxrow > 0) {
        # code...
        echo "Student ID already in use!";
    }

}
