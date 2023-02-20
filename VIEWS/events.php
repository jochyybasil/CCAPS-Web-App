<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css" <?php echo time(); ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <!-- top text -->
    <div class="container-fluid">
        <div class="col">
            <div class="row">
                <div class="box">
                    <a href="#" class="toptext" style="text-decoration: none;">MindScope</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

            <div class="d-flex">
                <a class="nav-link" href="#">Sign up</a>
                <span class="mx-3">|</span>
                <a class="nav-link" href="#">Login</a>
              </div>
              


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- counselling picture header-->
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 p-0" style="background-image: url(https://www.ashesi.edu.gh/images/2018_Website/Student_Life/Ashesi_StudentLife-Banner4.jpg); background-size: cover; height: 370px;">
            <div class="gradient-overlay" style="background: linear-gradient(to bottom, rgba(172, 63, 63, 0.726), rgba(172, 63, 63, 0.726)); height: 100%;">
                <div class="text-wrapper">
                    <h1 class="text-white">Counselling, Coaching & Advising</h1>
                    <h1 class="text-white">For Your Better Life</h1>
                    <br>
                    <p class="text-white" style="font-weight: bolder; font-size: larger;">100% Confidential</p>
                    <br>
                </div>
            </div>
          </div>
        </div>
    </div>
    

    <!-- footer -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <footer class="footer mt-auto py-3 bg-light">
                    <div class="container-fluid">
                      <span class="text-muted">© 2023 My Company, Inc.</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
      

     
</body>
</html>