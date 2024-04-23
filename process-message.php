<?php
    session_start();

    // Include Database Connection
    include("include/db-connection.php");

    // Build Query
    $name = $_POST["txt_name"]; // get data from POST method
    $email = $_POST["txt_email"];
    $message = $_POST["txt_message"];

    //Construct SQL
    $sql_insert = "INSERT INTO `tbl_message`(`message_id`, `username`, `email`, `message`)
    VALUES (NULL,
            '".$name."',
            '".$email."',
            '".$message."'
            )";

    // Execute SQL Statement
    $q = mysqli_query($conn, $sql_insert);

    // Check if the database returned anything
    if ($q) {
        echo "Message has been added successfully.";
        header("location: ./contact.php");
    } else {
        echo "Error adding Message.";
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

?>