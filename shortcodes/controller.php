<?php
require_once "../include/initialize.php";
if (!isset($_SESSION['ACCOUNT_ID'])) {
    redirect(web_root . "index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
    case 'generate':
        doInsert();
        break;

}

function doInsert()
{
    global $mydb;

    if (isset($_POST['generate'])) {

        function createRandomPassword()
        {

            $chars = "abcdefghijkmnopqrstuvwxyz023456789";

            srand((double) microtime() * 1000000);

            $i = 0;

            $pass = '';
            while ($i <= 7) {

                $num = rand() % 33;

                $tmp = substr($chars, $num, 1);

                $pass = $pass . $tmp;

                $i++;

            }

            return $pass;

        }

        $autonum = new Autonumber();
        $autonum->auto_update(1);

        $autonum = new Autonumber();
        $autoPrint = $autonum->set_autonumber(1);

        for ($i = 0; $i < $_POST['NoVotingCode']; $i++) {
            # code...
            $confirmation = createRandomPassword();

            // echo $confirmation .'<br/>';

            $sql = "INSERT INTO tblvotingcode (CodeNo,GenerateDate,CVUse,AuthPrint) VALUES ('{$confirmation}',NOW(),1,'{$autoPrint->AUTO}')";
            $mydb->setQuery($sql);
            $mydb->executeQuery();

        }

        redirect('printcodes.php');

    }
}
