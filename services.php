<?php
 include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
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
                <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="services.php" class="nav-link active">Services</a>
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

    <!-- services-->
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 p-0" style="background-image: url(IMAGES/services_header.webp); background-size: cover; height: 370px;">
            <div class="gradient-overlay" style="background: linear-gradient(to bottom, rgba(172, 63, 63, 0.726), rgba(172, 63, 63, 0.726)); height: 100%;">
                <div class="text-wrapper">
                    <h1 class="text-white">Services</h1>
                    <br>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!-- icons link -->
    <div class="container my-24 px-6 mx-auto" style="margin-top: 90px;">
        <section class="mb-32 text-gray-800 text-center">
          <div class="d-flex justify-content-center align-items-start flex-wrap">
            <div class="mx-5 my-2">
              <img src="IMAGES/services_booking.png" class="rounded-circle shadow-lg mb-4" alt="John Doe" style="max-width: 100px" />
              <br>
              <a href="booking.php" class="mb-0" style="text-decoration: none;">Book Appointment</a>
            </div>
            <div class="mx-5">
              <img src="IMAGES/services_chat.png" class="rounded-circle shadow-lg mb-4" alt="Lisa Ferrol" style="max-width: 100px" />
              <br>
              <a href="messaging.php" class="mb-0" style="text-decoration: none;">Chat with a Counsellor</a>
            </div>
          </div>
        </section>
      </div>
      
      <!-- we are here -->
      <div>
        <p style="text-align: center; margin-top: 20px; font-weight: bolder; font-size: larger; margin-bottom: 100px;">We're here for you!</p>
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
