<?php
 
   include("conn.php");
  session_start();
   
 //  echo $_POST['contact'];
 // echo $_POST['password'];
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
     
      $username = mysql_real_escape_string($_POST['username']);
       $password = mysql_real_escape_string($_POST['password']); 
     
	 
	 
	 
	 
	 $sql = "SELECT * FROM `School_Representative` WHERE `Index_No` = '$username' AND `R_Password`='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['Index_No'] = $row['Index_No'];
		
		header("location:index.php");
    }
} else {
    echo "0 results";
}
   }
	?> 
	
	
	