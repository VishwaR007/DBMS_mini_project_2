<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}



$d_no = $_GET['edit'];

$stmt = ("SELECT * FROM department_list WHERE d_no='$d_no'");
$stmt_run = mysqli_query($con, $stmt);


$row = mysqli_fetch_array($stmt_run);
// var_dump($row);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="3.1)employeInsetPageStyle.css" class="rel">
    <title>Document</title>
</head>

<body>

    <div class="container1">
        
        <div class="container2">
            <form action="6.3)departmentDeletePage.php" method="post">
       
                <label for="empid"> d_no : </label>
                <input type="text" class="form-control" id="empid" name="d_no" value=<?php echo $row['d_no'] ?>>
                <label for="empname"> d_name : </label>
                <input type="text" class="form-control" id="empname" name="d_name" value=<?php echo $row['d_name'] ?>>
                <label for="gender"> admin : </label>
                <input type="text" class="form-control" id="gender" name="admin" value=<?php echo $row['admin'] ?>>
                <label for="address"> strength : </label>
                <input type="text" class="form-control" id="address" name="strength" value=<?php echo $row['strength'] ?>>
        
                
                <div class="lastBox">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>