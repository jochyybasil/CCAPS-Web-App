<?php
include('session.php');

// get user ID from session
$user_id = $_SESSION['loggedin_session'];

// retrieve user's bookings from database
$sql = "SELECT * FROM bookings WHERE user_id = '$user_id'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

            <?php
                if(!isset($loggedin_session)){
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="register.php">Sign up</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="login.php">Login</a>
                </div>';
                }else{
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="student_profile.php">My Profile</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="logout.php">Logout</a>
                </div>';
                }
            ?>

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

    <h1>My Bookings</h1>

    <table>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["booking_date"]."</td>";
                echo "<td>".$row["booking_time"]."</td>";
                echo "<td>".$row["booking_location"]."</td>";
                echo "<td><a href='delete_booking.php?id=".$row["booking_id"]."'>Delete</a> | <a href='update_booking.php?id=".$row["booking_id"]."'>Update</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No bookings found.</td></tr>";
        }
        ?>

    </table>

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

