<?php
$servername="db";
$username="team6";
$password="team6";
$dbname="team6-web";
$conn=new mysqli ($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

?>