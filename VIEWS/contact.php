<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="contact.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">            

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
  <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<header>
    <!-- top text -->
    <div class="container-fluid">
        <div class="col">
            <div class="row">
                <div class="box">
                    <a href="VIEWS/index.php" class="toptext" style="text-decoration: none;">MindScope</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

            <div class="d-flex">
                <a class="nav-link" href="VIEWS/register.php">Sign up</a>
                <span class="mx-3">|</span>
                <a class="nav-link" href="VIEWS/login.php">Login</a>
              </div>
              


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="VIEWS/index.php" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/events.php" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/resources.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/blogs.php" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
<!-- <br>
<div class="page-content">
	<div class="contact-banner">
		<h1 class="get-in-touch">Get in touch</h1>
		<p class="question">Have a question? Please use the form below and we will get back to you shortly.</p>

	</div>
	<div>
		<form method="post" action="">
		<input id="name"  name = "name"type="text"  placeholder="Name" required>
		<input id="email" name="email" type="text"  placeholder="Email" required>
		<br>
		<input id="phone" name="phone" type="text"  placeholder="phone"required>
		<br>
		<input id="message" name="message" type="text"  placeholder="type message here..." required>
		<br>
</form>
	</div>

	</div>
<p>
		<input id="submit" name = "submit" type="button" value="Submit"></p> -->

 
  <div class="contact-container">
    <div class="contact-content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt" style="color:brown;"></i>
          <div class="topic">Address</div>
          <div class="text-one">Berekuso, Ghana</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt" style="color:brown;"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+233 57 985 8075</div>
          <div class="text-two">+233 55 625 7687</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope" style="color:brown;"></i>
          <div class="topic">Email</div>
          <div class="text-one">MinScope.live@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form method="POsT">
        <div class="input-box">
          <input mame="username" type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input mame="PHONE" type="text" placeholder="Enter your phone number">
        </div>
        <div class="input-box">
          <input name="email" type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
        <input type="text" name="message" placeholder="Enter your message">
        </div>
        <div class="button">
          <input type="button" name="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>







</body>
<?php 
    // include(db.php);

    if(isset($_POST["submit"])){
        $name =$_POST["username"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        $message =$_POST["message"];

        $sql  = "INSERT INTO Contact (uname, utel_number, uemail, message_details)
        VALUES ('$name', '$phone', '$mail','$message')";

       $result= $conn->query($sql);

       if($result){
        echo "<script> alert('message sent');</script>";
       }
       else{
            echo "<script> alert('message failed to send');</script>";
       }
    }

?>
</html>