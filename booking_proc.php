<?php
include "../MODEL/session.php";
$apt_date = $_POST["apt_date"]; // appointment date
$apt_start_time = $_POST["start_time"]; // start time
$therapy_type = $_POST["category"]; // therapy category
$user_comment = $_POST["message"]; // comment 
$staff_name =  explode(' ',$_POST["staff_name"]); // instructor name 
$staff_fname = $staff_name[0];
$staff_lname = $staff_name[1];

//VALIDATIONS

// Validate appointment date
if (empty($apt_date)) {
  die("Error: Appointment date cannot be empty.");
}

if (strtotime($apt_date) < strtotime('today')) {
  die("Error: Appointment date must be in the future.");
}

// Validate appointment start time
if (empty($apt_start_time)) {
  die("Error: Appointment start time cannot be empty.");
}

if (strtotime($apt_start_time) < strtotime('now')) {
  die("Error: Appointment start time must be in the future.");
}

// Validate therapy type
if (empty($therapy_type)) {
  die("Error: Therapy type cannot be empty.");
}

$valid_therapy_types = array("therapy_type1", "therapy_type2", "therapy_type3"); // replace with valid therapy types from database
if (!in_array($therapy_type, $valid_therapy_types)) {
  die("Error: Invalid therapy type.");
}

// Validate user comment
$max_comment_length = 300; // replace with maximum comment length from database
if (strlen($user_comment) > $max_comment_length) {
  die("Error: Comment is too long.");
}

// Validate staff name
if (empty($staff_name)) {
  die("Error: Staff name cannot be empty.");
}

$valid_staff_names = array("staff_name1", "staff_name2", "staff_name3"); // replace with valid staff names from database
if (!in_array($staff_name, $valid_staff_names)) {
  die("Error: Invalid staff name.");
}

// Get the instructor ID using the instructor's first and last name
$instructor_query = "SELECT web_userID FROM web_user WHERE userFname='$staff_fname' AND userLname='$staff_lname'";
$instructor_result = $conn->query($instructor_query);

if ($instructor_result->num_rows > 0) {
  $instructor_row = $instructor_result->fetch_assoc();
  $instructor_id = $instructor_row["web_userID"];

  // Insert the booking information into the database
  $bkg_sql = "INSERT INTO booking (appionment_date, start_time, StudentID, InstructorID, user_comment, therapyID) 
  VALUES ('$apt_date','$apt_start_time','$loggedin_id', '$instructor_id', '$user_comment', '$therapy_type')";

  if ($conn->query($bkg_sql) === TRUE) {
    echo "Booking successful!";
  } else {
    echo "Error: " . $bkg_sql . "<br>" . $conn->error;
  }
} else {
  echo "Instructor not found";
}

$conn->close();
?>