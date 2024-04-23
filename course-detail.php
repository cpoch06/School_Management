<?php

session_start();

//Check if user is login or not
include("include/check-login.php");

// Include Database Connection
include("include/db-connection.php");

// Build Query
$id = $_GET["pl_id"]; // get data from Header
$sql = "SELECT * FROM `tbl_userplan` 
        WHERE plan_id = " . $id;

// Execute SQL Statement
$q = mysqli_query($conn, $sql);

//var_dump($q);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="style.css">
    <title>Course Detail</title>


    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

</head>

<body>

    <header class="sticky-top">

        <?php
        //include header layout
        include("include/header.php");
        ?>

    </header>

    <main class="text-center">
        <div class="row">
            <h1>Course Detail </h1>
        </div>
        <?php
        $row = mysqli_fetch_assoc($q);

        ?>
        <div class="row">
            <div class="col2"><strong style="font-size: 20px;">Course Name:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> <?php echo $row["plan_name"] ?> </p>
            </div>
        </div>

        <div class="row">
            <div class="col2"><strong style="font-size: 20px;">Course Price:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> $ <?php echo $row["plan_price"] ?> </p>
            </div>
        </div>

        <div class="row">
            <div class="col2"><strong style="font-size: 20px;">Course User:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> <?php echo $row["plan_users"] ?> </p>
            </div>
        </div>

        <div class="row">
             <div class="col2"><strong style="font-size: 20px;">Course Storage:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> <?php echo $row["plan_storage"] ?> </p>
            </div>
        </div>

        <div class="row">
             <div class="col2"><strong style="font-size: 20px;">Course Available:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> <?php echo $row["plan_availability"] ?> </p>
            </div>
        </div>

        <div class="row">
            <div class="col2"><strong style="font-size: 20px;">Course Access:</strong></div>
            <div class="col2">
               <p style="font-size: 20px;"> <?php echo $row["plan_access"] ?> </p>
            </div>
        </div>

        <div class="button">
            <a href="course.php" class="btn btn-primary">Back to the course list</a>
        </div>
    </main>
    
    <div class="footer" style="margin-top: 20px;">
        <?php
        //include footer layout
        include("include/footer.php");
        ?>
    </div>

</body>

</html>