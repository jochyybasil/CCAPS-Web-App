<?php

include "db.php";


// check if login form was submitted, else redirect/return back to login page
if (isset($_POST['login'])){


 	if((!empty($_POST['email'])) || (!empty($_POST['pass'])) )
	    {
	        $error = "*" . "Please fill all the required fields \n";
	    }


    // collect form data and store in variables
	$email = $_POST['email'];
	$passw = $_POST['pass'];


    
    // write a select query limiting/filtering by username

	$query = "SELECT * FROM Web_user WHERE email_address='$email' ";


	//execute the query 
	$result = $conn->query($query);
	

	if ($result) {

        $row = mysqli_fetch_assoc($result);


        // fetch these data from the table: user_id, user_name, user_pass, user_role and user_status.
		$user_id = $row["web_userID"];
        $user_email = $row['email_address'];
		$user_status = $row["user_status"];
        $user_psd = $row["user_password"];

       
    

		if (md5($passw) ==  $user_psd) {

            // start a session
            session_start();
            $_SESSION["login_id"] = $user_id;
            $_SESSION["login_user"] = $user_email;
            $_SESSION['success'] = "You are logged in";
            $_SESSION['status'] = $user_status;

            // if user role is admin send to adimpage
            if ($user_status == 1){
                header('Location: dashboard.php');
                //echo"redirect to dash";
                // echo "<script>alert('successfully logged in to dash');
                //window.location.href = 'dashboard.php';</script>";
                // exit();
                }

            else if ($user_status == 2){
                // echo"redirect to index";
                // echo "<script>window.location.href = 'index.php';</script>";
                header('Location: index.php');
                // exit();
                }

            }
        else{
            echo "incorrect password";
        }
	
	}

    else {
            // echo "back to login";
            echo "<script>alert(' log in failed');
            window.location.href = 'login.php';</script>";
	  		exit();	  	
        }

    }


	$conn->close();

?>