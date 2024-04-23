<?php
session_start();

// Include Database Connection
include("include/db-connection.php");

// Build Query
$username = $_POST["txt_username"]; // get data from POST method
$email = $_POST["txt_email"];
$password = $_POST["txt_password"];
$confirm_password = $_POST["txt_confirm_password"];

 // Validate the passwordfield if it matches the confirm password
 if ($password != $confirm_password) {
    die("Password does match!");
  }

//Construct SQL
$sql_insert = "INSERT INTO `tbl_account`(`account_id`, `username`, `email`, `password`) 
VALUES (NULL,
        '".$username."',
        '".$email."',
        '".md5($password)."'
        )"
;

 // Execute SQL Statement
 $q = mysqli_query($conn, $sql_insert);

// Check if the database returned anything
if ($q) {
  echo "Account has been added successfully.";
  header("location: ./login.php");
} else {
  echo "Error adding Account.";
}

?>

<?php
if (!mysqli_error()) {
  echo ('Data is added successfully');

} else {

  //die("Error inserting ....");
  echo mysqli_error();

}

?>
```