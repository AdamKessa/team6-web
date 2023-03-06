<?php
$servername="db";
$username="team6";
$password="team6";
$dbname="team6-web";
// creating connection


// Connect to MySQL database
$conn = new mysqli ($servername, $username, $password, $dbname);


// check the connection
if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
    echo "connect failed";
}



?>

