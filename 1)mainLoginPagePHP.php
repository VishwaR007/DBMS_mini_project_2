<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}


$stmt = $con->prepare("SELECT * FROM login_page WHERE `email` = ?");
$stmt->bind_param("s", $_POST['email']);
$stmt->execute();
$res = $stmt->get_result();

var_dump($stmt);
echo "   hai   ";
var_dump($res);

echo "hai1";

if ($res->num_rows != 0) {
    echo "Invalid email not student";
    $stmt1 = $con->prepare("SELECT * FROM login_page WHERE `email` = ?");
    $stmt1->bind_param("s", $_POST['email']);
    $stmt1->execute();
    $res = $stmt1->get_result();

    echo "hai2";

    if ($res->num_rows == 0) {
        echo "Invalid email not teacher";
    } else {
        $row = $res->fetch_assoc();
        if ($row['password'] === $_POST['password']) {
            echo "Login Successfully Teacher";

            header("Location:2)mainPage.html");
        } else {
            echo "Invalid password";
        }
    }
} 