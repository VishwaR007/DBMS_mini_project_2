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
    $employe_id = $_GET['delete'];
    $stmt3 = ("DELETE FROM employe_display WHERE employe_id='$employe_id'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:3)employeDisplayPage.php');
    } else {
        echo "fail";
    }
}


// THIS IS FOR UPDATE BUTTON
if (isset($_POST['update'])) {

    var_dump($_POST);

    echo $_POST['employe_id'];

    $employe_id = $_POST['employe_id'];
    $employe_name = $_POST['employe_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];

    $stmt2 = ("UPDATE employe_display SET `employe_id`='$employe_id',  `employe_name`='$employe_name', `gender`='$gender', `address`='$address', `email`='$email', `phone_number`='$phone_number', `department`='$department' WHERE employe_id='$employe_id'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        header('Location:3)employeDisplayPage.php');
    } else {
        echo "fail";
    }
}


?>