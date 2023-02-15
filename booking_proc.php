
<? php
include(session.php);
$apt_date = $_POST["apt_date"]; // appointment date
$apt_start_time = $_POST["start_time"]; // start time
$therapy_type = $_POST["category"]; // therapy category
$user_comment = $_POST["message"]; // comment 
$staff_name =  explode(' ',$_POST["staff_name"]); // instructor name 
$staff_fname = $staff_name[0];
$staff_lname = $staff_name[1];

//DO VALIDATION LATER

$instructor_id = "SELECT web_userID from web_user where $staff_fname = userFname and $staff_lname = userLname";

$bkg_sql = "INSERT INTO booking (appionment_date, start_time, StudentID, InstructorID, user_comment, therapyID) 
VALUES ('$apt_date','$apt_start_time','$loggedin_id', '$instructor_id')";

?>