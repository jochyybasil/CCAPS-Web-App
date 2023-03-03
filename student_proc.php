<?php 
    include 'db.php';
    include "session.php";

    if(isset($_POST["update_profile"])){


    $fname =  $_POST['user_fname'];
    $lname =  $_POST['user_lname'];
    $gender =  $_POST['user_gender'];
    $phoneN =  $_POST['user_phone'];
    $major =  $_POST['user_major'];
    $date_of_birth = $_POST['user_dob'];
    $update_image = $_FILES["image"]["name"];

    

    $update_sql = "UPDATE user_profile 
    SET userFname = '$fname', userLname='$lname', 
    gender='$gender', phone_number='$phoneN', 
    department='$major', DOB='$date_of_birth' WHERE web_userID = $loggedin_userID";

    $result = $conn->query($update_sql);
    if ($result) {
    //header("Location: student_profile.php");
    } 
    else {
    echo "Error updating record: " . $conn->error;
    }

    
    // $update_image_size = $_FILES['update_image']['size'];
    // $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = "pics/".basename($update_image);

    if(!empty($update_image)){
        if($_FILES['image']['size'] > 2000000){
            echo 'image is too large';
        }else{
            $image_update_query =  "UPDATE user_profile SET user_image = '$update_image' WHERE web_userID = $loggedin_userID";
            $result = $conn->query($image_update_query);
            if($image_update_query){
                if (move_uploaded_file($_FILES['image']['tmp_name'], $update_image_folder)){
                    header("Location: student_profile.php");
                }
                else{
                    "update failed";
                }
            }
            else{
                echo"failed";
            }
            
        }
    }



    }else{
        echo"no update";
    }

?>