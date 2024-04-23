<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="sticky-top">
        <?php 
            include("include/header.php");
        ?>
    </header>

    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Why Choose Us?!?</h1>
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

    <section class="location">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x500" alt="Hero Image">
                </div>
                <div class="col-md-6">
                    <h1>Our Location</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam vel tincidunt
                        facilisis, velit nunc bibendum sapien, vel bibendum sapien.</p>
                    <a href="https://www.google.com/maps" class="map-container">Click this link to go to the map</a>
                </div>
            </div>
        </div>
    </section>

    <section class="staff">
        <h2 style="margin-bottom: 50px;">Staff Member</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/250x280" alt="" class="">
                    <h4>John Doe</h4>
                    <p>Principal</p>
                </div>

                <div class="col-md-3">
                    <img src="https://via.placeholder.com/250x280" alt="">
                    <h4>John Doe</h4>
                    <p>Principal</p>
                </div>

                <div class="col-md-3">
                    <img src="https://via.placeholder.com/250x280" alt="">
                    <h4>John Doe</h4>
                    <p>Principal</p>
                </div>

                <div class="col-md-3">
                    <img src="https://via.placeholder.com/250x280" alt="">
                    <h4>John Doe</h4>
                    <p>Principal</p>
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