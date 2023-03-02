<?php
     include "../MODEL\db.php";
    session_start();
    $loggedin_session = $_SESSION['login_user']; //user email

    if(!isset($loggedin_session) || $loggedin_session==NULL) {
    header("Location: login.php");
    }
?>