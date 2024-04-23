<?php

// Include Database Connection
include("include/db-connection.php");

// Build Query
$planname = $_POST["txt_planname"]; // get data from POST method
$planprice = $_POST["txt_price"];
$planuser = $_POST["txt_planuser"];
$planstorage = $_POST["txt_planstorage"];
$planavailable = $_POST["txt_planavailable"];
$planaccess = $_POST["txt_planaccess"];

$id = $_POST["txt_planid"];

//Construct SQL

$sql_update = " UPDATE `tbl_userplan` SET
              plan_name	= '".$planname."',
              plan_price = ".$planprice.",
              plan_users = '".$planuser."',
              plan_storage = ".$planstorage.",
              plan_availability = ".$planavailable.",
              plan_access = '".$planaccess."'
              WHERE `tbl_user_plan`.`plan_id` = ". $id;

     
// Execute SQL Statement
$q = mysqli_query($conn,$sql_update);

header("location: ./course.php");

if(!mysqli_error()){  // NOT Error

  header("location: ./course.php"); // redirect the url.

}else { // Eror

  die("Database cannot update your request...<br>".mysqli_error());
}

?>