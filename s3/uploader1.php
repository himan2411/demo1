<?php
include "conn.php";	
session_start();
$Index_No=$_SESSION['Index_No'];
$Aadhar_No=$_SESSION['Aadhar_No'];
if(!isset($_SESSION['Index_No'])) 
 {
		header("location:login.php");
 }
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$type=$_SESSION['type'];
//echo $type;
//$_SESSION['Standard']=$Standard;

	
?>
    <form action="uploader.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>