<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "madan_project";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
}

$stmt = ("SELECT * FROM department_list ORDER BY d_no ASC");
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
                        <th scope="col">d_no</th>
                        <th scope="col">d_name</th>
                        <th scope="col">admin</th>
                        <th scope="col">strength</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_array($stmt_run)) { ?>
                            <tr>
                                <th><?php echo $row['d_no']; ?></th>
                                <td><?php echo $row['d_name']; ?></td>
                                <td><?php echo $row['admin']; ?></td>
                                <td><?php echo $row['strength']; ?></td>
                                <td><a href="6.2)departmentEditPage.php?edit=<?php echo $row['d_no'] ?> " class="btn btn-success"> Edit </a></td>
                                <td><a href="6.3)departmentDeletePage.php?delete=<?php echo $row['d_no'] ?> " class="btn btn-danger"> Delete </a></td>
                            </tr>
                        <?php } ?>

                </tbody>
            </table>
        </div>

        <div class="insertButton">
            <a href="6.1)departmentInsertPage.php" class="btn btn-primary"> Insert </a>
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