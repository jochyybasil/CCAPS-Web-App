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
                    <a class="nav-link" href="register.php">Sign up</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link" href="login.php">Login</a>
                </div>
                


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
                        <button type="submit" name ="login" class="loginbtn">Log In</button>
                    </form>
                    <p id="redirect-signup">Don't have an account?<a href ="register.php">Sign Up</a></p>
                </div>
            </div>
        </div>
    </body>
</html>