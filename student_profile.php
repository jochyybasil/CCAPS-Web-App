<?php 
    include "db.php";
    include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="CSS/stylesheet.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/profile.css? <?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</head>
    <header>
    <!-- top text -->
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col">
                <div class="box">
                    <a href="index.php" class="toptext nav-link" style="text-decoration: none; padding:14px;">MindScope</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

        <?php
                if(!isset($loggedin_session)){
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="register.php">Sign up</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="login.php">Login</a>
                </div>';
                }else{
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="student_profile.php">My Profile</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="logout.php">Logout</a>
                </div>';
                }
        ?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="events.php" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>

    <?php
      
      
     $query = "SELECT * FROM user_profile WHERE web_userID = '$loggedin_userID' ";
     //execute the query 
     $result = $conn->query($query);
     if ($result) {
         $row = mysqli_fetch_assoc($result);
      }
   ?>

    <form method="post">  
    <div class="profile-pic-container">
        <div class="profile-pic">
            <?php
            if($row['user_image'] == ''){
                echo '<img src="images/default-avatar.png" style="border-radius:50%">';
            }else{
                echo '<img src="uploaded_img/'.$row['user_image'].'" style="border-radius:50%">';
            }
            if(isset($message)){
                foreach($message as $message){
                echo '<div class="message">'.$message.'</div>';
                }
            }
            ?>
        </div>

        <div class="info-content">
        <br>
        <span>update photo:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" >
        </div>
    </div>
    </form>

    <form action="student_proc.php" method="POST">
        <div class="profile-info-container info-content" style="padding-left:20px; padding-top:10px;"> 
            <label> First Name: </label>
            <input name="user_fname" placeholder="First Name" value="<?php echo $row['userFname']; ?>" type="text">
            <br>
            <label>Last Name: </label>
            <input name="user_lname" placeholder="Last Name" value="<?php echo $row['userLname']; ?>" type="text">
            
            <br>
            <label> Gender: </label>
            <input name="user_gender" placeholder="gender" value="<?php echo $row['gender']; ?>" type="text">
           
            <br>
            <label> Date of Birth: </label>
            <input name="user_dob" placeholder="dob" value="<?php echo $row['DOB']??"N/A"; ?>" type="date">

            <br>
            <br>
            <label> Mobile: </label>
            <input name="user_phone" placeholder="phone" value="<?php echo $row['phone_number']; ?>" type="text">

            <br>
            <label> Major: </label>
            <input name="user_major" placeholder="major" value="<?php echo $row['department']; ?>" type="text">
            
            <br>
            <input type="submit" class="edit-profile-text" name="update_profile" value ="Update Profile" ></p>


        </div>
    </form>



</body>

</html>
