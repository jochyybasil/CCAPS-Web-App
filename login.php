<?php
 include "session.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
        <link rel="stylesheet" href="CSS/login.css" <?php echo time(); ?>>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    

    <body>
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

                <div class="d-flex">
                    
                </div>
                


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link " aria-current="page">Home</a>
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


        <div class="main">
            <div class="logo">
                <p>Welcome Back</p>
                <img id="logo" src="IMAGES/logo.png">
                <p>Counselling, Coaching & Advising<br>for Your Better Life</p>
            </div>
            <div class="login_background">
                <div class="login">
                    <p>Log In</p>
                    <form class="form_login">
                        <input type="email" id="email" name="email" placeholder="Email" required><br>
                        <input type="password" id="pass" name="pass" placeholder="Password" required><br>
                        <button type="submit"  id= "login" value ="login" name ="login" class="loginbtn" onclick = "return loginValidation()">Log In</button>
                    </form>
                    <p id="redirect-signup">Don't have an account?<a href ="register.php">Sign Up</a></p>
                </div>
            </div>
        </div>

        <script>

            
            var uemail = document.getElementById('email');
            var passd = document.getElementById('pass');
            var loginbutton = document.getElementById('login');

            
            var ajax = new XMLHttpRequest();


            function loginValidation(){

            var mailreg = /^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])/;

            if(mailreg.test(uemail.value)){
                // mailreg.test(uemail.match)
                handleAjax();
                return false;
            }
            else{
                alert('email is not vald');
                return false;
            }
            }

            function handleAjax(){
            //alert("about ready to post");

            ajax.onreadystatechange = handler;


            //make a request
            ajax.open('POST', "login_proc.php");



            //create parameters
            // const params = 'fname='+firstName.value+'&lname='+lastName.value+'&email='+uemail.value+'&user_type='+student_councelor.value+'&pass='+pass.value+'&confirm_pass='+con_pass.value+'&register='+regbutton.value;

            const params = `login=${encodeURIComponent(loginbutton.value)}&email=${encodeURIComponent(uemail.value)}&pass=${encodeURIComponent(passd.value)}`;

            //  &user_type=${encodeURIComponent(student_councelor.value)} &pass=${encodeURIComponent(pass.value)}&confirm_pass=${encodeURIComponent(con_pass.value)}

            ajax.setRequestHeader(
                "Content-Type",
                "application/x-www-form-urlencoded"
            );
            ajax.send(params);

            }

            function handler() {
            // alert("about ready to post 2");

                // Process the server response here.
                if (ajax.readyState === XMLHttpRequest.DONE) {
                // Everything is good, the response was received.
                    if (ajax.status === 200) {
                    // Perfect!
                        // alert('successfully logged in');
                        // window.location.href = "index.php";
                        return false;
                    } else {
                    // There was a problem with the request.
                        alert('something went wrong');
                        return false;
                    // For example, the response may have a 404 (Not Found)
                    // or 500 (Internal Server Error) response code.
                    }

                } 
            }


</script>

    </body>
</html>
