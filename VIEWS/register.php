<!DOCTYPE html>
<html>
    <head>
        <meta charset="">
        <meta>
        <title>Register</title>
        <link rel="stylesheet" href="register.css?<?php echo time(); ?>">
    </head>
    <body>
        <header class="Mindscope">
            MindScope
        </header>
        <div class="main">
            <div class="logo">
                <p>Join the Community</p>
                <img id="logo" src="logo.png">
                <p>Counselling, Coaching & Advising<br>for Your Better Life</p>
            </div>
            <div class="register_background">
                <div class="register">
                    <form class="form_register">
                        <input type="text" id="fname" name="fanme" placeholder="First name" required><br>
                        <input type="text" id="lname" name="lanme" placeholder="Last name" required><br>
                        <input type="email" id="email" name="email" placeholder="Email" required><br>
                        <select name="user_type" id="user_type" required>
                            <option value="">---Please choose one-</option>
                            <option value="student">Student</option>
                            <option value="saab">Councellor</option>
                        </select>
                        <input type="password" id="pass" name="pass" placeholder="Password" required><br>
                        <input type="password" id="pass" name="confirm_pass" placeholder="Repeat Password" required><br>
                        <button type="submit" name = "register" class="registerbtn">Register</button>
                    </form>
                    <p id="redirect-login">Already have an account?<a href="VIEWS/login.php">Log In</a></p>
                </div>
            </div>
        </div>

        <script type="text/javascript">

        // validation
		function validateEmail() {
			//get form data
            var firstName = document.getElementById('fname');
			var lastName = document.getElementById('lname');
			var uemail = document.getElementById('email');
            var student_councelor = document.getElementById('user_type');
			var pass = document.getElementById('pass');
            var con_pass = document.getElementById('confirm_pass');

			var regbutton = document.getElementById('register');

			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

			//validate data 
			if (uemail.value.match(mailformat)) {
                hangdleAjax();
				alert('email is valid');
				//call the post method
			}else{
				alert('email is wrong');
				return false;
			}

			alert('this is after validation');
			
			
			//make a post request to register_proc page
			function hangdleAjax() {
                const ajax = new XMLHttpRequest();

                function handler(){
                    // Process the server response here.
                }
                ajax.onreadystatechange = handler;

                // make request
                httpRequest.open('POST','register_proc.php');

                //create parameter
                const params = 'first_name'=${firstName.value}&'last_name'=${lastName.value}
                &'mail'=${uemail.value}&'passw'=${pass.value}&'confirm_passw'=${con_pass.value}
                &'user_status'=${student_counselor.value};


                setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 


					}
	</script>



    </body>
</html>