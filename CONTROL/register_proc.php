<?php
include "../MODEL\db.php";

echo "you've reached proc";
// create customer account
if(isset($_POST["Register"])){

    echo "submitted through register";

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

    if($confirm_passw == $passw){

        $login_sql="INSERT INTO Web_user (userFname, userLname, email_address, user_status, user_password)
         VALUES ('$first_name', '$last_name', '$mail','$status', '$encrypted_pass')";

        $result= $conn->query($login_sql);

        if($result){
            if ($status == 1){
                header("Location: dashboard.html");
		        exit();
            }
            else{
               header("Location: http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/");
               exit();
            }
             
        }
        else{
            echo '<script> alert("Please enter the same password")</script>';
            header("Location: register.php");
            exit();
        }
    }
}
?>