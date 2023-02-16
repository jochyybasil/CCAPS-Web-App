<?php
include("db.php");

// create customer account
if(isset($_POST["register"])){

    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $mail = $_POST["email"];
    $passw = $_POST["pass"];
    $confirm_passw = $_POST["confirm_pass"];
    $user_status = $_POST["user_type"];

    if($confirm_passw = =$passw){

        $login_sql="INSERT INTO Web_user (userFname, userLname, email_address, user_password)
         VALUES ('$first_name', '$last_name', '$mail', md5('$password'))";

        $result= $conn->query($login_sql);

        if($result){

            
             header("Location: login.php");
             exit();
        }
        else{
            echo <script> alert("Please enter the same password")</script>
            header("Location: register.php");
             exit();
        }
    }
}
?>