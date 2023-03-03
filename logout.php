<?php
 include "db.php";
 include  "session.php";

session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: login.php?logout=true");
?>