
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
    <link rel="stylesheet" href="CSS/res_style.css" <?php echo time(); ?>>
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

            <div class="d-flex">
            <a class="nav-link" href="register.php">Sign up</a>
                <span class="mx-3">|</span>
                <a class="nav-link" href="login.php">Login</a>
              </div>
              


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="events.php"  class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link active" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>


    <div class="container" style="font-weight:bolder;">
        <div class="row">
            <div class="col">
            <div class="circle_case">
        
        <div  id="div1">
            <span class="circ"> Peer Counselors </span>
            <br>
            <br>
            <br>
            <br>
            <span class="circ"> Yoga & Breathing Videos </span>
           
        </div>

        <div id="div2">
            <span class="circ"> Peer Tutors </span>
            <br>
            <br>
            <br>
            <br>
            <span class="circ"> Talent Hunt </span>
           
        </div>

        <div id="div3">
            <span class="circ"> Mental Health </span>
            <br>
            <br>
            <br>
            <br>
            <span class="circ"> Club Registration Form </span>
            
        </div>
    </div>
            </div>
        </div>
    </div>

    



  <!-- footer -->
  <footer class="bg-dark py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 MindScope Live. All Rights Reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list-unstyled float-md-end">
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
</body>
</html>

