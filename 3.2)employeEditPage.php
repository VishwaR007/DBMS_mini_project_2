<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}



$employe_id = $_GET['edit'];

$stmt = ("SELECT * FROM employe_display WHERE employe_id='$employe_id'");
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
            <form action="3.3)employeDeletePage.php" method="post">
       
                <label for="empid">Employe ID : </label>
                <input type="text" class="form-control" id="empid" name="employe_id" value=<?php echo $row['employe_id'] ?>>
                <label for="empname">Employe Name : </label>
                <input type="text" class="form-control" id="empname" name="employe_name" value=<?php echo $row['employe_name'] ?>>
                <label for="gender">Gender : </label>
                <input type="text" class="form-control" id="gender" name="gender" value=<?php echo $row['gender'] ?>>
                <label for="address">Address : </label>
                <input type="text" class="form-control" id="address" name="address" value=<?php echo $row['address'] ?>>
                <label for="email">Email : </label>
                <input type="text" class="form-control" id="email" name="email" value=<?php echo $row['email'] ?>>
                <label for="phonenum">Phone Number : </label>
                <input type="text" class="form-control" id="phonenum" name="phone_number" value=<?php echo $row['phone_number'] ?>>
                <label for="dep">Department : </label>
                <input type="text" class="form-control" id="dep" name="department" value=<?php echo $row['department'] ?>>
        
                
                <div class="lastBox">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>