<?php

session_start();

//Check if user is login or not

include("include/check-login.php");

// Include Database Connection

include("include/db-connection.php");

// Build Query

$query = "SELECT * FROM tbl_review ORDER BY review_id ";

// Execute Query
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$mysqli = new mysqli("localhost", "root", "", "School_Management");

// Close Connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="sticky-top">
        <?php
        include("include/header.php");
        ?>
    </header>

    <div class="container mt-5">
        <h1>Contact Us</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="process-message.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="txt_name" id="name" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="txt_email" id="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="txt_message" rows="5"
                            placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Address</h3>
                <p>123 Main St.</p>
                <p>Anytown, KHM 12345</p>
                <h3>Phone</h3>
                <p>(888) 456-7890</p>
                <h3>Email</h3>
                <p>info@schoolregistration.com</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Reviews</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="process-review.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="txt_name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="txt_email" id="email"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <select class="form-control" name="txt_rating" id="rating">
                            <option value="5">5 stars</option>
                            <option value="4">4 stars</option>
                            <option value="3">3 stars</option>
                            <option value="2">2 stars</option>
                            <option value="1">1 star</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea class="form-control" id="review" name="txt_review" rows="5"
                            placeholder="Enter your review"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-6">
                <h3>Recent Reviews</h3>
                <ul>
                    <?php
                    // Display the three latest reviews from the database
                    $sql = "SELECT * FROM tbl_review ORDER BY review_id DESC LIMIT 4";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {     
                            echo '<li>';
                            echo '<h5>' . $row["username"] . '</h5>';
                            echo '<span class="rating">' . $row["rating"] . '</span>';
                            echo '<p>' . $row["review"] . '</p>';
                            echo '</li>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>


    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2021 School Registration</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline text-right">
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-5Jw3zJzJQzjzJvJ1kz1wJZ5n5t7Jz7eJvJ7vJ6zvZzv7z5zJzJzJzJzJzJzJzJzJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>