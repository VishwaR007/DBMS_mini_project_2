<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}



$s_id = $_GET['edit'];

$stmt = ("SELECT * FROM salary_record WHERE s_id='$s_id'");
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
            <form action="4.3)salaryRecordDeletePage.php" method="post">
       
                <label for="empid"> s_id : </label>
                <input type="text" class="form-control" id="empid" name="s_id" value=<?php echo $row['s_id'] ?>>
                <label for="empname"> e_id : </label>
                <input type="text" class="form-control" id="empname" name="e_id" value=<?php echo $row['e_id'] ?>>
                <label for="gender"> basic_salary : </label>
                <input type="text" class="form-control" id="gender" name="basic_salary" value=<?php echo $row['basic_salary'] ?>>
                <label for="address"> bonus : </label>
                <input type="text" class="form-control" id="address" name="bonus" value=<?php echo $row['bonus'] ?>>
                <label for="email"> pf : </label>
                <input type="text" class="form-control" id="email" name="pf" value=<?php echo $row['pf'] ?>>
                <label for="phonenum"> dp : </label>
                <input type="text" class="form-control" id="phonenum" name="dp" value=<?php echo $row['dp'] ?>>
        
                
                <div class="lastBox">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>