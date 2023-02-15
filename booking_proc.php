
<? php
include(session.php);
$apt_date = $_POST["apt_date"]; // appointment date
$apt_start_time = $_POST["start_time"]; // start time
$therapy_type = $_POST["category"]; // therapy category
$user_comment = $_POST["message"]; // comment 
$staff_name =  $_POST["staff_name"]; // instructor name 


//DO VALIDATION LATER

$bkg_sql_select_insid = "SELECT web_userID from web_user where "

$bkg_sql = "INSERT INTO booking (appionment_date, start_time, StudentID, InstructorID, user_comment, therapyID) 
VALUES ('$apt_date','$apt_start_time','$loggedin_id') ";

?>