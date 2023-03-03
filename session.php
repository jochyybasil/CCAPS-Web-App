<?php
     include "db.php";
    session_start();
    $loggedin_session = $_SESSION['login_user']; //user email
    $loggedin_userID = $_SESSION["login_id"];

    
    if(!isset($loggedin_session) || $loggedin_session==NULL) {
    header("Location: login.php");
    }
    
    
?>