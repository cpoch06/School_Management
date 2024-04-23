<?php

session_start();


//Check if user is login or not
include("include/check-login.php");

// Include Database Connection
include("include/db-connection.php");

// Build Query
$id = $_GET["pl_id"];
$sql = "SELECT * FROM `tbl_userplan` WHERE plan_id = " . $id;

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
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">



    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .col-4 {
            padding: 10px
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>

            <?php
            //include header layout
            include("include/header.php");
            ?>


        </header>

        <main>
            <div class="row">
                <h1 class="text-center">Form : Edit Plan </h1>
            </div>

            <div class="row text-center">


                <?php
                // get data from record
                $row = mysqli_fetch_assoc($q);

                ?>

                <form action="process-update.php" method="post">

                    <input type="hidden" value="<?php echo $id ?>" name="txt_planid">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan Name:</div>
                        <div class="col-4"><input type="text" name="txt_planname"
                                value="<?php echo $row["plan_name"] ?>"> </div>
                    </div><!-- /Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan Price:</div>
                        <div class="col-4"><input type="text" name="txt_price" value="<?php echo $row["plan_price"] ?>">
                        </div>
                    </div><!-- /Row -->


                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan User:</div>
                        <div class="col-4"><input type="text" name="txt_planuser"
                                value="<?php echo $row["plan_users"] ?>"> </div>
                    </div><!-- /Row -->


                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan Storage:</div>
                        <div class="col-4"><input type="text" name="txt_planstorage"
                                value="<?php echo $row["plan_storage"] ?>"> </div>
                    </div><!-- /Row -->


                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan Availble:</div>
                        <div class="col-4"><input type="text" name="txt_planavailable"
                                value="<?php echo $row["plan_availability"] ?>"> </div>
                    </div><!-- /Row -->


                    <!-- Row -->
                    <div class="row">
                        <div class="col-4">Plan Access:</div>
                        <div class="col-4"><input type="text" name="txt_planaccess"
                                value="<?php echo $row["plan_access"] ?>"> </div>
                    </div><!-- /Row -->


                    <!-- Row -->
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"><input type="submit" name="btn" value="Update"> </div>
                    </div><!-- /Row -->

                </form>


            </div>


        </main>


        <?php
        include('include/footer.php');

        ?>

</body>

</html>