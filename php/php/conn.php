<?php
$servername = "hackathon.cjiw8s8d9hut.ap-south-1.rds.amazonaws.com";
$username = "milind";
$password = "parvatia";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"hackathon");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>