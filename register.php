<?php
 include "session.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
        <link rel="stylesheet" href="CSS/register.css?" <?php echo time(); ?>>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
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

                <div class="d-flex">
                    
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link ">About</a>
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

        
        <div class="main">
            <div class="logo">
                <p>Join the Community</p>
                <img id="logo" src="IMAGES/logo.png">
                <p>Counselling, Coaching & Advising<br>for Your Better Life</p>
            </div>
            <div class="register_background">
                <div class="register">
                    <form class="form_register" action='<?php echo $_SERVER["PHP_SELF"];?>'>
                        <input type="text" id="fname" name="fname" placeholder="First name" required><br>
                        <input type="text" id="lname" name="lname" placeholder="Last name" required><br>
                        <input type="email" id="email" name="email" placeholder="Email" required><br>
                        <select name="user_type" id="user_type" required>
                            <option value="">---Please choose one-</option>
                            <option value="student">Student</option>
                            <option value="saab">Councellor</option>
                        </select>
                        <input type="password" id="pass" name="pass" placeholder="Password" required><br>
                        <input type="password" id="con_pass" name="confirm_pass" placeholder="Repeat Password" required><br>
                        <input type="submit" id="register" name = "register" value = "Register" class="registerbtn" onclick="return emailValidation()">
                    </form>
                    <p style="padding:10px;" id="redirect-login">Already have an account?<a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
        <!-- action = "http://localhost/MindScope-Web-App/CONTROL/register_proc.php" method="POST" -->
        <script>

            var firstName = document.getElementById('fname');
			var lastName = document.getElementById('lname');
			var uemail = document.getElementById('email');
            var student_councelor = document.getElementById('user_type');
			var passd = document.getElementById('pass');
            var con_pass = document.getElementById('con_pass');
			var regbutton = document.getElementById('register');

            var ajax = new XMLHttpRequest();


            var url = "register_proc.php";
            function emailValidation(){

			var mailreg = /^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])/;

			if(mailreg.test(uemail.value)){
				// mailreg.test(uemail.match)
				handleAjax();
				return false;
			}
			else{
				return false;
			}
            }

        function handleAjax(){
            //alert("about ready to post");

			ajax.onreadystatechange = handler;


            //make a request
            ajax.open('POST', url);



            //create parameters
            // const params = 'fname='+firstName.value+'&lname='+lastName.value+'&email='+uemail.value+'&user_type='+student_councelor.value+'&pass='+pass.value+'&confirm_pass='+con_pass.value+'&register='+regbutton.value;

            const params_2 = `register=${encodeURIComponent(regbutton.value)}&fname=${encodeURIComponent(firstName.value)}&lname=${encodeURIComponent(lastName.value)}&email=${encodeURIComponent(uemail.value)}&user_type=${encodeURIComponent(student_councelor.value)}&pass=${encodeURIComponent(pass.value)}&confirm_pass=${encodeURIComponent(con_pass.value)}`;

            //  &user_type=${encodeURIComponent(student_councelor.value)} &pass=${encodeURIComponent(pass.value)}&confirm_pass=${encodeURIComponent(con_pass.value)}

            ajax.setRequestHeader(
                "Content-Type",
                "application/x-www-form-urlencoded"
            );
            ajax.send(params_2);

        }

        function handler() {
           // alert("about ready to post 2");

  				// Process the server response here.
  				if (ajax.readyState === XMLHttpRequest.DONE) {
				  // Everything is good, the response was received.
  					if (ajax.status === 200) {
					  // Perfect!
                          //window.location.href = "login.php";
  						return false;
					} else {
					  // There was a problem with the request.
						return false;
					  // For example, the response may have a 404 (Not Found)
					  // or 500 (Internal Server Error) response code.
					}

				} 
			}


        </script>

    </body>
</html>
