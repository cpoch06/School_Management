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

//Construct SQL
$sql_insert = "INSERT INTO `tbl_userplan` (`plan_id`, `plan_name`, `plan_price`, `plan_users`, `plan_storage`, `plan_availability`, `plan_access`, `plan_ordered`) 
                VALUES (NULL, 
                '".$planname."', 
                ".$planprice.", 
                '".$planuser."', 
                ".$planstorage.", 
                ".$planavailable.", 
                '".$planaccess."', 
                '1');
                ";

// Execute SQL Statement
$q = mysqli_query($conn,$sql_insert);

header("location: ./course.php");

// Check if the database returned anything
if($q){
    header("location: ./course.php");
}else{
    die("Error adding new course: " . mysqli_error($conn));
}

//var_dump($q);

// Check if query is executed successfully

// Redirect to course.php
if($q){
    header("Location: course.php");
}else{
    die("Error adding new course: " . mysqli_error($conn));

}

// if(mysqli_error($conn)){
//     die(mysqli_error($conn));
// }

?>

