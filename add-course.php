<?php

session_start();

include("include/check-login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="course.css">
</head>

<body>
    <header class="sticky-top">
       <?php
        include("include/header.php");
        ?>
    </header>

    <main>
        <form action="process-add-course.php" class="add-form" method="POST">
            <h1 style="text-align: center;">Add-Course</h1>

            <hr>

            <div class="form-group">
                <label for="course-name">Course Name</label>
                <input type="text" class="form-control" name="txt_planname" placeholder="Enter Course Name" required>
            </div>

            <div class="form-group">
                <label for="course-price">Course Price</label>
                <input type="text" class="form-control" name="txt_price" placeholder="Enter Course Price" required>
            </div>

            <div class="form-group">
                <label for="course-user">Course User</label>
                <input type="text" class="form-control" name="txt_planuser" placeholder="Enter Course User" required>
            </div>

            <div class="form-group">
                <label for="course-storage">Course Storage</label>
                <input type="text" class="form-control" name="txt_planstorage" placeholder="Enter Course Storage" required>
            </div>

            <div class="form-group">
                <label for="course-available">Course Available</label>
                <input type="text" class="form-control"  name="txt_planavailable" placeholder="Enter Course Available" required>
            </div>

            <div class="form-group">
                <label for="course-access">Course Access</label>
                <input type="text" class="form-control" name="txt_planaccess" placeholder="Enter Course Access" required>
            </div>

            <button type="submit" value="submit">Add Course</button>
        </form>

    </main>
    

    <?php
    include("include/footer.php");
   ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>