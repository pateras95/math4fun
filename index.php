<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ./Routes/loginRoute.php");
    exit;
}else{
    header("location: ./Routes/mainRoute.php");
    exit;
}
?>