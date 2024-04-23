
<?php

if( $_SESSION["is_login"] == "yes"){
    // Nothing
}else{
    header("location: ./login.php");
}

// echo "Hello, Mr./Ms. ".$_SESSION["username"];
// echo "ID ".$_SESSION["userid"];
// echo "He is logged in ".$_SESSION["is_login"];

