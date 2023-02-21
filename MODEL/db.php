<?php

$servername ="";
$username ="";
$password = "";
$dbname = "";

$conn = mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connection failed", $conn->connect_error);
}
// jjsut because
?>