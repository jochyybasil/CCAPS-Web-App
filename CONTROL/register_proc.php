<?php
ob_start(); // start output buffering
include "../MODEL/db.php";

// create customer account
if(isset($_POST["register"])){
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $mail = $_POST["email"];
    $passw = $_POST["pass"];
    $confirm_passw = $_POST["confirm_pass"];
    $user_status = $_POST["user_type"];
    $encrypted_pass = md5($passw);

    if( $user_status == "student"){
        $status = 2;
    }
    else{
        $status = 1;
    }

    // user check
    $check_sql = "SELECT email_address FROM Web_user WHERE email_address ='$mail' LIMIT 1 ";
    $check_result = $conn->query($check_sql);
    if($check_result->num_rows == 1) {
        header("Location: ../VIEWS/register.php");
        exit();
    }
    else{
        if($confirm_passw == $passw){

            // insert into user table
            $login_sql="INSERT INTO Web_user (userFname, userLname, email_address, user_status, user_password)
             VALUES ('$first_name', '$last_name', '$mail','$status', '$encrypted_pass')";

            $result= $conn->query($login_sql);

            $getUser_id = "SELECT web_UserID from  web_user where email_address ='$mail' ";
            $result_2 = $conn->query($getUser_id);
            if(mysqli_num_rows($result_2) > 0){
                $row = mysqli_fetch_assoc($result_2);
                $savedUser_id = $row['web_UserID'];
            }

            $userProflie_sql = "INSERT INTO user_profile (web_UserID, userFname, userLname, email_address) 
            VALUES ('$savedUser_id','$first_name', '$last_name', '$mail') ";
            $userProfile_result = $conn->query($userProflie_sql);

            if($result){
                if ($status == 1){
                    header("Location: ../VIEWS/dashboard.php");
                    exit();
                }
                else{
                    header("Location: http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/login.php");
                    exit();
                }
                 
            }
            else{
                header("Location: http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/login.php");
                exit();
            }
        }
    }
}

ob_end_flush(); // flush output buffer
?>

