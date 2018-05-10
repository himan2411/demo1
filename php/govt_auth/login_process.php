<?php
 
   include("conn.php");
  session_start();
   
 //  echo $_POST['contact'];
 // echo $_POST['password'];
	 
	  if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    
      $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
       $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password'])); 
     
	  
	 $password = md5($password);
	 
	 
	 $sql = "SELECT * FROM `Authority_Index` WHERE Index_No = '$username' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['Index_No'] = $row['Index_No'];
		
		header("location:showAllSchools.php");
    }
} else {
    echo "0 results";
}
   }
	?> 
	
	
	