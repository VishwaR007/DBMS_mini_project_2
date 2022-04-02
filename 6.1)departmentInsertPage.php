<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(mysqli_connect_error()){
    exit('Error connecting to the database' . mysqli_connect_error());
}



if(isset($_POST['Submit'])){
if($stmt = $con->prepare('SELECT d_no FROM department_list WHERE d_no = ?')){
    $stmt->bind_param('s', $_POST['d_no']);
    $stmt->execute();
    $stmt->store_result();
                        
    if($stmt->num_rows>0){
        echo "already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO department_list (`d_no`, `d_name`, `admin`, `strength`) VALUES (?, ?, ?, ?)')){
            $stmt->bind_param('ssss', $_POST['d_no'], $_POST['d_name'], $_POST['admin'], $_POST['strength']);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:6)departmentDisplayPage.php");
        }else{
            echo "Error Occured";
        }
    }
    $stmt->close();
}else{
    echo "Error Occured at last";
}
$con->close();
}
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
            <form action="6.1)departmentInsertPage.php" method="post">
       
                <label for="empid"> d_no : </label>
                <input type="text" class="form-control" id="empid" name="d_no">
                <label for="empname"> d_name : </label>
                <input type="text" class="form-control" id="empname" name="d_name">
                <label for="gender"> admin : </label>
                <input type="text" class="form-control" id="gender" name="admin">
                <label for="address"> strength : </label>
                <input type="text" class="form-control" id="address" name="strength">
        
                
                <div class="lastBox">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>