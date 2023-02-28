<?php
include "../MODEL\db.php";

echo "you've reached proc\n";

// create customer account
if(isset($_POST["register"])){

    echo "submitted through register\n";

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
        echo"email taken";
        echo "<script>alert('email taken');</script>";
        // return header("Location:  http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/register.php");
        exit();
    }
    else{
        if($confirm_passw == $passw){

            $login_sql="INSERT INTO Web_user (userFname, userLname, email_address, user_status, user_password)
             VALUES ('$first_name', '$last_name', '$mail','$status', '$encrypted_pass')";
    
            $result= $conn->query($login_sql);
    
            if($result){
                if ($status == 1){
                    //return header("Location:  http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/dashboard.php");
                    exit();
                }
                else{
                   //return header("Location: http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/");
                   exit();
                }
                 
            }
            else{
                echo "did not make it ";
                echo '<script> alert("Please enter the same password")</script>';
                //header("Location: http://localhost/MindScope-Web-App/VIEWS/TEMPLATE/login.php");
                exit();
            }
        }



    }


    
}
?>