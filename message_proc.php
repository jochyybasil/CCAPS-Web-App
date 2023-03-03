<?php
    session_start();
    include('session.php');

    // Check if the required form fields are not empty
    if (empty($_POST["sender_name"]) || empty($_POST["message"]) || empty($_POST["receiver_name"])) {
        // display an error message and stop the execution of the script
        die("Please fill all the required fields");
    }

    $sender_name = $_POST["sender_name"];
    $message_content = $_POST["message"];
    $receiver_name =  explode(' ', $_POST["receiver_name"]);
    $receiver_fname = $receiver_name[0];
    $receiver_lname = $receiver_name[1];

    if (!preg_match("/^[a-zA-Z ]*$/", $receiver_name) || strlen($receiver_name) > 50) {
        // display an error message and stop the execution of the script
        die("Invalid receiver name");
    }

    // Check if the receiver name exists in the database
    $instructor_id_query = "SELECT web_userID FROM web_user WHERE userFname='$receiver_fname' AND userLname='$receiver_lname'";
    $instructor_id_result = mysqli_query($connection, $instructor_id_query);
    if (mysqli_num_rows($instructor_id_result) != 1) {
        // display an error message and stop the execution of the script
        die("Receiver name does not exist");
    }

    $instructor_id_row = mysqli_fetch_assoc($instructor_id_result);
    $instructor_id = $instructor_id_row['web_userID'];

    $mess_sql = "INSERT INTO messages (sender_name, message_content, receiver_name) 
    VALUES ('$sender_name','$message_content', '$instructor_id')";
    
?>

