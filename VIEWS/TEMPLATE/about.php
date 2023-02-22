<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body class="gradient-overlay" style="background: linear-gradient(to bottom, rgba(145, 29, 29, 0.826), rgba(145, 29, 29, 0.826));>
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
                <a class="nav-link" href="#">Sign up</a>
                <span class="mx-3">|</span>
                <a class="nav-link" href="login.php">Login</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link active">About</a>
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

    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3">About</h2>
                            <p class="mb-4">In a bid to encourage the holistic health and well-being of our students, the Office of Student & Community Affairs provides counselling, coaching and academic advising services (CCA) for the student body. Students have someone to talk to about academics as well as social life. Should you need to book an appointment for any member of the CCA team kindly click on this link. Time management, Conflict resolution, Anxiety, Addictions, Depression and Relationship challenges</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-cover" src="IMAGES/about_page_header.jpg" /></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row g-0">
            <div class="col">
            </div>
                <div class="intro intro-update border rounded" style="margin-top: 80px; margin-bottom: 80px">
                    <div class="text">
                        <h2>Mission Statement</h2>
                        <p>Our mission is to promote students' well-being within a safe and confidential environment through a range of psychological support and consultation services.</p>
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