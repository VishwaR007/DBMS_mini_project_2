<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

$stmt = ("SELECT * FROM attendance_list ORDER BY a_id ASC");
$stmt_run = mysqli_query($con, $stmt);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="3)employeDisplayPageStyle.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container1">

        <div class="middleContainer">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">a_id</th>
                        <th scope="col">e_id</th>
                        <th scope="col">attendance</th>
                        <th scope="col">date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_array($stmt_run)) { ?>
                            <tr>
                                <th><?php echo $row['a_id']; ?></th>
                                <td><?php echo $row['e_id']; ?></td>
                                <td><?php echo $row['attendance']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><a href="5.2)attendanceEditPage.php?edit=<?php echo $row['a_id'] ?> " class="btn btn-success"> Edit </a></td>
                                <td><a href="5.3)attendanceDeletePage.php?delete=<?php echo $row['a_id'] ?> " class="btn btn-danger"> Delete </a></td>
                            </tr>
                        <?php } ?>

                </tbody>
            </table>
        </div>

        <div class="insertButton">
            <a href="5.1)attendanceInsertPage.php" class="btn btn-primary"> Insert </a>
        </div>

        <div class="exit">
            <a href="2)mainPage.html" class="btn btn-info">
                <h4>Exit</h4>
            </a>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>