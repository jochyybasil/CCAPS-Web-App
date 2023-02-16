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
                    <p id="redirect-login">Already have an account?<a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
    </body>
</html>i