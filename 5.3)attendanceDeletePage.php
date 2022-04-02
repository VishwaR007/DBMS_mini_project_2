<?php


$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

echo "hai";
var_dump($_POST);

// THIS IS FOR DELETE BUTTON
if (isset($_GET['delete'])) {
    $a_id = $_GET['delete'];
    $stmt3 = ("DELETE FROM attendance_list WHERE a_id='$a_id'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:5)attendanceDisplayPage.php');
    } else {
        echo "fail";
    }
}


// THIS IS FOR UPDATE BUTTON
if (isset($_POST['update'])) {

    var_dump($_POST);

    // echo $_POST['employe_id'];

    $a_id = $_POST['a_id'];
    $e_id = $_POST['e_id'];
    $attendance = $_POST['attendance'];
    $date = $_POST['date'];

    $stmt2 = ("UPDATE attendance_list SET `a_id`='$a_id',  `e_id`='$e_id', `attendance`='$attendance', `date`='$date' WHERE a_id='$a_id'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        header('Location:5)attendanceDisplayPage.php');
    } else {
        echo "fail";
    }
}


?>