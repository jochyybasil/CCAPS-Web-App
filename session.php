<?php
    include('db.php');
    session_start();
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($conn,"select web_userID, email_address from web_user where email ='$user_check'");
    
    $row = mysqli_fetch_assoc($ses_sql,MYSQLI_ASSOC);
    $loggedin_session = $row['email_address'];
    $loggedin_id = $row['web_userID'];

    if(!isset($loggedin_session) || $loggedin_session==NULL) {
    header("Location: login.php");
    }
?>