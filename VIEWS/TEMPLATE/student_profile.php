<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="home_page/stylesheet.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="profile.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</head>
<header>
    <!-- top text -->
    <div class="container-fluid">
        <div class="col">
            <div class="row g-0">
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
</header>
<body>

 

<div class="profile-pic-container">
 <div class="profile-pic"> </div>
</div>
 
<div class="profile-info-container info-content"> 
	<label> Name: </label>
	<input name="user_name" value="John Doe" type="text">
	<br>
	
	<label> Gender: </label>
	<input name="user_gender" value="M" type="text">

	<br>
	<label> Mobile: </label>
	<input name="user_phone" value="+233 222 222 2222" type="text">

	<br>
	<label> Email: </label>
	<input name="user_emial" value="john.doe@ashesi.edu.gh" type="text">

	<br>
	<label> Major: </label>
	<input name="user_major" value="Computer Science" type="text">
	<label>Year Group: </label>
	<input name="user-year-group" value="2024" type="text"><br>
	
	
	<p class="edit-profile-text"><a href="index.php" style="text-decoration:none;">Edit Profle</a></p>


</div>
</body>

</html>