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
if($stmt = $con->prepare('SELECT employe_id FROM employe_display WHERE employe_id = ?')){
    $stmt->bind_param('s', $_POST['employe_id']);
    $stmt->execute();
    $stmt->store_result();
                        
    if($stmt->num_rows>0){
        echo "USN already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO employe_display (`employe_id`, `employe_name`, `gender`, `address`, `email`, `phone_number`, `department`) VALUES (?, ?, ?, ?, ?, ?, ?)')){
            $stmt->bind_param('sssssds', $_POST['employe_id'], $_POST['employe_name'], $_POST['gender'], $_POST['address'], $_POST['email'], $_POST['phone_number'], $_POST['department']);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:3)employeDisplayPage.php");
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
            <form action="3.1)employeInsertPage.php" method="post">
       
                <label for="empid">Employe ID : </label>
                <input type="text" class="form-control" id="empid" name="employe_id">
                <label for="empname">Employe Name : </label>
                <input type="text" class="form-control" id="empname" name="employe_name">
                <label for="gender">Gender : </label>
                <input type="text" class="form-control" id="gender" name="gender">
                <label for="address">Address : </label>
                <input type="text" class="form-control" id="address" name="address">
                <label for="email">Email : </label>
                <input type="text" class="form-control" id="email" name="email">
                <label for="phonenum">Phone Number : </label>
                <input type="text" class="form-control" id="phonenum" name="phone_number">
                <label for="dep">Department : </label>
                <input type="text" class="form-control" id="dep" name="department">
        
                
                <div class="lastBox">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>