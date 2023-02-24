
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
    <link rel="stylesheet" href="CSS/res_style.css" <?php echo time(); ?>>


    <style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-evenly;
			align-items: center;
			margin: 20px;
		}
		.square {
			width: 200px;
			height: 200px;
			margin: 10px;
			box-shadow: 2px 2px 5px #888888;
			position: relative;
            display:flex;
            justify-content:center;
            align-items:center;
		}
		
		.caption {
			text-align: center;
			margin-top: 10px;
			font-size: 18px;
			color: #888888;
		}
	</style>
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
            <a class="nav-link text-nowrap text-truncate" href="register.php">Sign up</a>
            <span class="mx-3">|</span>
            <a class="nav-link text-nowrap text-truncate" href="login.php">Login</a>
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


<div class="container">
		<div class="square">
			<a href="ashesi.edu.gh">Peer Counsellors</a>
			<!-- <div class="caption">Caption A</div> -->
		</div>
		<div class="square">
			<a href="https://www.ashesi.edu.gh">Peer Tutors</a>
			<!-- <div class="caption">Caption B</div> -->
		</div>
		<div class="square">
			<a href="https://www.ashesi.edu.gh">Mental Health Awareness</a>
			<!-- <div class="caption">Caption C</div> -->
		</div>
		<div class="square">
			<a href="https://www.ashesi.edu.gh">Academic Advisor</a>
			<!-- <div class="caption">Caption D</div> -->
		</div>
		<div class="square">
			<a href="messaging.php">Rant Box</a>
			<!-- <div class="caption">Caption E</div> -->
		</div>
	</div>

    



  <!-- footer -->
  <footer class="bg-dark py-3" style="margin-top:120px;">
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

