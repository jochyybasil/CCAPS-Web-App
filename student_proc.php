<?php 
    include 'db.php';
    include "session.php";

//$loggedin_session
    if(isset($_POST['Update Profile'])){

    $fname =  $_POST['user_fname'];
    $lname =  $_POST['user_lname'];
    $gender =  $_POST['user_gender'];
    $phoneN =  $_POST['user_phone'];
    $major =  $_POST['user_major'];

    $sql = "UPDATE user_profile SET userFname='$fname', userLname='$lname', gender='$gender', phone_number='$phoneN', department='$major' WHERE web_userID = $loggedin_userID";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_image;

    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'image is too large';
        }else{
            $image_update_query = mysqli_query($conn, "UPDATE `user_profile` SET user_image = '$update_image' WHERE web_userID = $loggedin_userID") or die('query failed');
            if($image_update_query){
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
            }
            $message[] = 'image updated succssfully!';
        }
    }

    }

?>