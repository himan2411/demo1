<?php
 
   include("conn.php");
  echo "ASasA";
 	session_start();
 if(isset($_POST['submit']))
	{
		
	  
	echo $desc = $_POST['desc'];
	//$_POST['password'];
  
  
  
 
		$sql = "Send details of Students who are excel in";
		
		$sql2 = "SELECT DISTINCT `Index_No` FROM `school_registration` Where `Index_No` IS NOT NULL ";
		
  if(!empty($_POST['District']))
				{
					$District = $_POST['District'];
					
					$sql2 .= " AND ";
					
			
					foreach($District as $Dist)
					{
					   $sql2 .= "`District` =  '$Dist' OR";
					   
					}
					$sql2 .= "`District` =  '' ";
					
				}
				if(!empty($_POST['School_type']))
				{
					$School_type = $_POST['School_type'];
					
						$sql2 .= " AND ";
					
			
					foreach($School_type as $Schl_type)
					{
					   $sql2 .= "`School_type` =  '$Schl_type' OR";
					   
					}
					$sql2 .= "`School_type` =  '' ";
					
				}
				
				
				

				if(!empty($_POST['type']))
				{
					$type1 = $_POST['type'];
					
					
					
					foreach($type1 as $type)
					{
					   $sql .= " $type And";
					   
					}
					$sql .= " he/she is an obidient student of your school.  ";
				}
				
				
				$sql5 = "INSERT INTO `requests`(`id`, `request`) VALUES ('','$sql')";
	$result5 = $conn->query($sql5);
     		

    //$password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password'])); 
     //$username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
    
	 
    //echo $password = md5($password);
	 
	 

	
		header("location:requestMeri.php");
    
} else {
    echo "0 results";
}
   
	?> 
	
	
	