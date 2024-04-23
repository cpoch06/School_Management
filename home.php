<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="sticky-top">
       <?php
        include("include/header.php");
        ?>
    </header>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Welcome to School Registration</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt
                        facilisis, velit nunc bibendum sapien, vel bibendum sapien.</p>
                    <a href="course.php" class="btn btn-primary">Get Started</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x500" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-book"></i>
                        <h3>Learn Online</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt
                            facilisis, velit nunc bibendum sapien, vel bibendum sapien.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Expert Teachers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt
                            facilisis, velit nunc bibendum sapien, vel bibendum sapien.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-users"></i>
                        <h3>Community</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt
                            facilisis, velit nunc bibendum sapien, vel bibendum sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Join Our Community Today</h2>
                </div>
                <div class="col-md-6">
                    <a href="course.php" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

   <?php
    include("include/footer.php");
   ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>