<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rant Box</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <!-- top text -->
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
                    <a href="VIEWS/index.php" class="nav-link active" aria-current="page">Home</a>
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

    <!-- messaging -->
    <h2 style="text-align: center;">Rant Box</h2>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container1">
                    <img src="https://icon-library.com/images/counseling-icon/counseling-icon-21.jpg" alt="Avatar" style="width:100%;">
                    <p>Hey there! What do you have on your mind? This is a safe space, so you can pour your heart out.</p>
                    <span class="time-right">11:00</span>
                    </div>
                
                    <div class="container1 darker">
                    <img src="john_manful.jpg" alt="Avatar" class="right" style="width:100%;">
                    <p style="text-align: right;">Hey! I'm fine. Thanks for asking!</p>
                    <span class="time-left">11:01</span>
                    </div>
                
                    <!-- <div class="container">
                    <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                    <p>Sweet! So, what do you wanna do today?</p>
                    <span class="time-right">11:02</span>
                    </div> -->
                
                    <div class="container1 darker">
                    <img src="john_manful.jpg" alt="Avatar" class="right" style="width:100%;">
                    <p style="text-align: right;">I'm honestly tired of school. When does it ever end? I want out. Ughhh!!!!</p>
                    <span class="time-left">11:05</span>
                    </div>
                
                
                    <div class="container1 container1-chatsubmit">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Send a message...</label>
                                      </div>
                                      <br>
                                      <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Send</button>
                                    </div>
                                </div>
                            </div>
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
                <li><a href="VIEWS/contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
    </footer>

</body>
</html>