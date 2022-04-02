<?php


$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}


// THIS IS FOR DELETE BUTTON
if (isset($_GET['delete'])) {
    $s_id = $_GET['delete'];
    $stmt3 = ("DELETE FROM salary_record WHERE s_id='$s_id'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:4)salaryRecordDisplayPage.php');
    } else {
        echo "fail";
    }
}


// THIS IS FOR UPDATE BUTTON
if (isset($_POST['update'])) {

    $s_id = $_POST['s_id'];
    $e_id = $_POST['e_id'];
    $basic_salary = $_POST['basic_salary'];
    $bonus = $_POST['bonus'];
    $pf = $_POST['pf'];
    $dp = $_POST['dp'];

    $stmt2 = ("UPDATE salary_record SET `s_id`='$s_id', `e_id`='$e_id', `basic_salary`='$basic_salary', `bonus`='$bonus', `pf`='$pf', `dp`='$dp' WHERE s_id='$s_id'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        header('Location:4)salaryRecordDisplayPage.php');
    } else {
        echo "fail";
    }
}


?>