<?php

// Include Database Connection
include("include/db-connection.php");

// Build Query
$id = $_GET["pl_id"]; // get Plan ID from method GET

$sql = "DELETE FROM `tbl_userplan` WHERE `plan_id` = ".$id;

// Execute SQL Statement
$q = mysqli_query($conn,$sql);

header("location: ./course.php"); 

if(!mysqli_error()){

  //echo "Plan is deleted ...";
  header("location: ./course.php"); // redirect URL

}else{

  die(mysqli_error());

}
?>
