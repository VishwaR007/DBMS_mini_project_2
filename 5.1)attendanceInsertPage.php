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
if($stmt = $con->prepare('SELECT a_id FROM attendance_list WHERE a_id = ?')){
    $stmt->bind_param('s', $_POST['a_id']);
    $stmt->execute();
    $stmt->store_result();
                        
    if($stmt->num_rows>0){
        echo "already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO attendance_list (`a_id`, `e_id`, `attendance`, `date`) VALUES (?, ?, ?, ?)')){
            $stmt->bind_param('ssss', $_POST['a_id'], $_POST['e_id'], $_POST['attendance'], $_POST['date']);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:5)attendanceDisplayPage.php");
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
            <form action="5.1)attendanceInsertPage.php" method="post">
       
                <label for="empid"> a_id : </label>
                <input type="text" class="form-control" id="empid" name="a_id">
                <label for="empname"> e_id : </label>
                <input type="text" class="form-control" id="empname" name="e_id">
                <label for="gender"> attendance : </label>
                <input type="text" class="form-control" id="gender" name="attendance">
                <label for="address"> date : </label>
                <input type="text" class="form-control" id="address" name="date">
        
                
                <div class="lastBox">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>