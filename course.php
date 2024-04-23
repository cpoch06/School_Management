<?php
session_start();

// check are you login?
include("include/check-login.php");

// Include Database Connection
include("include/db-connection.php");

// Build Query
$sql = "SELECT * FROM `tbl_userplan` ORDER BY `tbl_userplan`.`plan_ordered` ASC";

// Execute SQL Statement
$q = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Course</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pricing.css">

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function askdelete() {
            if (confirm("Are you sure to delete?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <header class="sticky-top">
        <?php include("include/header.php");
        ?>

    </header>

    <main>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Plan List</h1>

        </div>


        <div class="row text-center">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plan Name</th>
                        <th scope="col">Plan Price</th>
                        <th scope="col">Plan User</th>
                        <th scope="col">Plan Storage</th>
                        <th scope="col">Plan Availability</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_assoc($q)) {

                        ?>
                        <!-- Block Data -->
                        <tr>
                            <th scope="row">
                                <?php echo $row["plan_id"] ?>
                            </th>
                            <td>
                                <?php echo $row["plan_name"] ?>
                            </td>
                            <td>
                                <?php echo $row["plan_price"] ?>
                            </td>
                            <td>
                                <?php echo $row["plan_users"] ?>
                            </td>
                            <td>
                                <?php echo $row["plan_storage"] ?>
                            </td>
                            <td>
                                <?php echo $row["plan_availability"] ?>
                            </td>
                            <td>
                                <a href="course-detail.php?pl_id=<?php echo $row["plan_id"] ?>">detail</a> |
                                <a href="course-edit.php?pl_id=<?php echo $row["plan_id"] ?>">edit</a> |
                                <a href="process-delete.php?pl_id=<?php echo $row["plan_id"] ?>"
                                    onclick="return askdelete()">delete</a>
                            </td>

                        </tr>
                        <!-- Block Data -->

                        <?php

                    }

                    ?>
                </tbody>
            </table>

        </div>
    </main>

</body>

</html>