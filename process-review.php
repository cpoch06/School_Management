<?php
    session_start();

    // Include Database Connection
    include("include/db-connection.php");

    // Build Query
    $name = $_POST["txt_name"]; // get data from POST method
    $email = $_POST["txt_email"];
    $rating = $_POST["txt_rating"];
    $review = $_POST["txt_review"];

    //Construct SQL
    $sql_insert = "INSERT INTO `tbl_review`(`review_id`, `username`, `email`, `rating`, `review`)
    VALUES (NULL,
            '".$name."',
            '".$email."',
            ".$rating.",
            '".$review."'
            )";

    // Execute SQL Statement
    $q = mysqli_query($conn, $sql_insert);

    // Check if the database returned anything

    if ($q) {
        echo "Review has been added successfully.";
        header("location: ./contact.php");
    } else {
        echo "Error adding Review.";
    }
?>

<?php
if (!mysqli_error()) {
  echo ('Data is added successfully');
  header("location: ./contact.php");

} else {

  die("Error inserting ....");
  echo mysqli_error();

}