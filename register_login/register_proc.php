<?php
include("db.php");

// create customer account
if(isset($_POST["register"])){

    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $mail = $_POST["email"];
    $passw = $_POST["pass"];
    $confirm_passw = $_POST["confirm_pass"];

    if($confirm_passw = =$passw){

        $sql="INSERT INTO Web_user (userFname, userLname, Inst_ID, DOB, phone_number, email_address, department, gender)
         VALUES ('$first_name', '$last_name', '$mail', md5('$password'))";
        $result= $conn->query($sql);
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