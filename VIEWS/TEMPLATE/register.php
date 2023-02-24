<!DOCTYPE html>
<html>
    <head>
        <meta charset="">
        <meta>
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
                    <form class="form_register" >
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
                        <input type="submit" id="register" name = "register" value = "Register" class="registerbtn" onclick="emailVaidation()">
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
			var pass = document.getElementById('pass');
            var con_pass = document.getElementById('confirm_pass');

			var regbutton = document.getElementById('register');

            var url = "http://localhost/MindScope-Web-App/CONTROL/register_proc.php"
            function emailValidation(){
			var mailreg = /^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])/;

			if(mailreg.test(uemail.value)){
				// mailreg.test(uemail.match)
				alert('email is vald');
				handleAjax();
				return false;
			}
			else{
				alert('email is not vald');
				return false;
			}
		}

        handleAjax(){
            
			ajax.onreadystatechange = handler;

            //make a request
            ajax.open('POST', url);

            //create parameters
            const params = 'fname='+firstName+'&lname='+lastName+'&email='+uemail+'&user_type='+student_councelor+'&pass='+pass+'&confirm_pass='+con_pass+'&register='+regbutton;

            ajax.setRequestHeader(
                "Content-Type",
                "application/x-www-form-urlencoded"
            );
            ajax.send(params)

        }

        function handler() {
  				// Process the server response here.
  				if (ajax.readyState === XMLHttpRequest.DONE) {
				  // Everything is good, the response was received.
  					if (ajax.status === 200) {
					  // Perfect!
  						alert('successfully register')
  						return false;
					} else {
					  // There was a problem with the request.
						alert('something went wrong')
						return false;
					  // For example, the response may have a 404 (Not Found)
					  // or 500 (Internal Server Error) response code.
					}

				} 
			}


        </script>

    </body>
</html>