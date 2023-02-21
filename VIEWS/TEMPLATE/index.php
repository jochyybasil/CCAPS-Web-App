<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet"  href="CSS/stylesheet.css" <?php echo time(); ?>> 
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
      


    <!-- cards -->
    <section class="ftco-intro" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro aside-stretch d-lg-flex w-100">
                        <div class="text">
                            <h2>Anonymous Approach</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad fugiat autem reprehenderit nobis quos dolore a laborum dolor id illo, dicta sapiente nihil sint esse natus alias earum est praesentium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100">
                        <div class="text">
                            <h2>Group Sessions</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum eum fugit mollitia voluptate sapiente ut architecto placeat quos maxime, aspernatur incidunt adipisci accusantium dolorem quod voluptatem at accusamus pariatur delectus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100">
                        <div class="text">
                            <h2>Individual Support</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod asperiores vel voluptas non, ipsa quidem. Aut quia ab sequi, soluta obcaecati quos eius fugit. Fugit magnam ex dicta quasi dolores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- picturetext box -->
    <div class="container" style="margin-top: 80px;">
    <div class="row g-0">
        <div class="col d-flex align-items-center" style="background-color: #ccc;">
            <div class="box-with-picture d-flex" style="height: 300px;">
                <div class=" picture-container" style="width: 50%; height: 100%; background-size: cover;">
                    <img src="https://post.healthline.com/wp-content/uploads/2020/04/therapy-group-therapist-talking-1200x628-facebook-1200x628.jpg" alt="Picture" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="text-container d-flex flex-column justify-content-center" style="width: 50%; text-align: center;">
                    <p style="font-size: larger; font-weight:bolder; padding-right: 10px;">Our mission is to promote students' well-being within a safe and confidential environment through a range of psychological support and consultation services.</p>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary mr-3" style="background-color: white; border-color: white; color:black;">Read More</button>
                        <span style="width: 10px;"></span>
                        <a href="contact.php" class="btn btn-primary" style="background-color: rgba(146, 15, 6); border-color: rgba(146, 15, 6); color:white;">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- circles -->
    <div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: center; margin:20px; margin-top: 80px; margin-bottom: 80px; font-weight:bolder;">
        <div class="row" style="color:white;">
            <div class="col" style="display:inline-flex;">
                <div class="circle" style="background-color: rgba(146, 15, 6); width: 100px; height: 100px; border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 30px 20px 30px;">
                    <a href="booking.php" style="font-size: 15px; text-align: center; text-decoration: none; color:white;">Make a booking</a>
                </div>
                <div class="circle" style="background-color: rgba(146, 15, 6); width: 100px; height: 100px; border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 30px 20px 30px;">
                    <a href="messaging.php" style="font-size: 15px; text-align: center; text-decoration: none; color:white;">Anonymous messaging</a>
                </div>
                <div class="circle" style="background-color: rgba(146, 15, 6); width: 100px; height: 100px; border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 30px 20px 30px;">
                    <a href="resources.php" style="font-size: 15px; text-align: center; text-decoration: none; color:white;">Resources</a>
                </div>
                <div class="circle" style="background-color: rgba(146, 15, 6); width: 100px; height: 100px; border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 30px 20px 30px;">
                    <a href="events.php" style="font-size: 15px; text-align: center; text-decoration: none; color:white;">Events</a>
                </div>
                <div class="circle" style="background-color: rgba(146, 15, 6); width: 100px; height: 100px; border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 30px 20px 30px;">
                    <a href="blogs.php" style="font-size: 15px; text-align: center; text-decoration: none; color:white;">Blogs</a>
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