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
    $d_no = $_GET['delete'];
    $stmt3 = ("DELETE FROM department_list WHERE d_no='$d_no'");
    $stmt3_run = mysqli_query($con, $stmt3);

    if ($stmt3_run) {
        echo "Success";
        header('Location:6)departmentDisplayPage.php');
    } else {
        echo "fail";
    }
}


// THIS IS FOR UPDATE BUTTON
if (isset($_POST['update'])) {

    var_dump($_POST);

    // echo $_POST['employe_id'];

    $d_no = $_POST['d_no'];
    $d_name = $_POST['d_name'];
    $admin = $_POST['admin'];
    $strength = $_POST['strength'];

    $stmt2 = ("UPDATE department_list SET `d_no`='$d_no',  `d_name`='$d_name', `admin`='$admin', `strength`='$strength' WHERE d_no='$d_no'");
    $stmt2_run = mysqli_query($con, $stmt2);

    if ($stmt2_run) {
        echo "Success";
        header('Location:6)departmentDisplayPage.php');
    } else {
        echo "fail";
    }
}


?>