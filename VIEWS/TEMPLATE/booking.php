<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="CSS/stylesheet.css <?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col">
                <div class="box">
                    <a href="VIEWS/index.php" class="toptext nav-link" style="text-decoration: none; padding:14px;">MindScope</a>
                </div>
            </div>
        </div>
    </div>


    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

            <div class="d-flex">
                <a class="nav-link" href="VIEWS/register.php">Sign up</a>
                <span class="mx-3">|</span>
                <a class="nav-link" href="VIEWS/login.php">Login</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="VIEWS/index.php" class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/events.php" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/resources.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="VIEWS/blogs.php" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="box box-bookhead text-wrapper">
                    <div class="col-12 p-0" style="background-image: url(https://www.talkspace.com/blog/wp-content/uploads/2018/04/free-online-therapy-versus-paid-counseling_1320W-JW-1.jpg); background-size:contain;width:400px; height:100px">
                            <div class="text-wrapper">
                                <h2 style="font-weight: bolder;">Book an Appointment with the CCA Team</h2>
                            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main booking container -->
    <div class="container">
        <div class="card bookingbox">
            <div class="card-body">
              <h4 class="card-title">Select Service</h4>
              <a href="#" class="card-link">Book One-on-One Session</a>
              <a href="#" class="card-link">Book Group Session</a>
            </div>
        </div>
        <div class="card bookingbox" style="margin-top: 2px;">
            <div class="card-body">
              <h4 class="card-title">Select Time</h4>
              <input type="date" name="mydate" class="form-control" min="2023-01-01" max="2023-12-31">
            </div>
        </div>
        <div class="card bookingbox" style="margin-top: 2px;">
            <div class="card-body">
              <h4 class="card-title">Add your details</h4>
              <input type="text" placeholder="Full Name"></input>
              <br>
              <input type="email" placeholder="Email" style="margin-top: 5px;"></input>
              <br>
              <input type="number" placeholder="Phone Number" style="margin-top: 5px;"></input>

              <p style="margin-top: 50px;">Please let us know if you have any special requests. Thank you.</p>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Notes(Optional)</label>
              </div>
              <br>
              <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Submit</button>
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
                <li><a href="VIEWS/contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
    </footer>
      
</body>
</html>