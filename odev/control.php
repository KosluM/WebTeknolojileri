<?php 
// Start session
session_start(); 

// Username and password
$username = "admin";
$password = "123456";

if (isset($_POST["ID"]) && isset($_POST["pass"])) { 

    if ($_POST["ID"] === $anvandarID && $_POST["pass"] === $pass) { 
    
    $_SESSION["inloggedin"] = true; 

    header("Location: hakkında.html"); 
    exit; 
    } 
        // Wrong login - message
        else {$wrong = "Bad ID and password, the system could not log you in";} 
}
?>