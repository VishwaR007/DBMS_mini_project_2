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
if($stmt = $con->prepare('SELECT s_id FROM salary_record WHERE s_id = ?')){
    $stmt->bind_param('s', $_POST['s_id']);
    $stmt->execute();
    $stmt->store_result();
                        
    if($stmt->num_rows>0){
        echo "USN already exists. Try again";
    }
    else{
        if($stmt = $con->prepare('INSERT INTO salary_record (`s_id`, `e_id`, `basic_salary`, `bonus`, `pf`, `dp`) VALUES (?, ?, ?, ?, ?, ?)')){
            $stmt->bind_param('ssddds', $_POST['s_id'], $_POST['e_id'], $_POST['basic_salary'], $_POST['bonus'], $_POST['pf'], $_POST['dp']);
            var_dump($_POST);
            $stmt->execute();
            echo "Succesfully registered";
            header("Location:4)salaryRecordDisplayPage.php");
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
            <form action="4.1)salaryRecordInsertPage.php" method="post">
       
                <label for="empid"> s_ID : </label>
                <input type="text" class="form-control" id="empid" name="s_id">
                <label for="empname"> e_ID : </label>
                <input type="text" class="form-control" id="empname" name="e_id">
                <label for="gender"> Basic Salary : </label>
                <input type="text" class="form-control" id="gender" name="basic_salary">
                <label for="address"> Bonus : </label>
                <input type="text" class="form-control" id="address" name="bonus">
                <label for="email"> pf : </label>
                <input type="text" class="form-control" id="email" name="pf">
                <label for="phonenum"> dp : </label>
                <input type="text" class="form-control" id="phonenum" name="dp">
        
        
                
                <div class="lastBox">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                </div>
        
            </form>
        </div>

    </div>

</body>

</html>