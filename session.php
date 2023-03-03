<?php
    include "db.php";
    session_start();
    if(isset($_SESSION['login_user'])) {
        $loggedin_session = $_SESSION['login_user']; //user email
        $loggedin_userID = $_SESSION["login_id"];
    }
?>
