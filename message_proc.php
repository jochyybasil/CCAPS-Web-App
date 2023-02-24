<?php
    include(session.php);
    $sender_name = $_POST["sender_name"]; // appointment date
    $message_content = $_POST["message"]; // start time
    $receiver_name =  explode(' ',$_POST["receiver_name"]); // instructor name 
    $receiver_fname = $receiver_name[0];
    $receiver_lname = $receiver_name[1];

    //do validation later

    $instructor_id = "SELECT web_userID from web_user where $staff_fname = userFname and $staff_lname = userLname";

    $mess_sql = "INSERT INTO messages (sender_name, message_content, receiver_name) 
    VALUES ('$sender_name','$message_content', '$instructor_id')";
    
?>