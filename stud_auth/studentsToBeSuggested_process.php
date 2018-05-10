<?php
 
   include("conn.php");
 	session_start();

	  
	echo $Gr_No =  $_SESSION['Gr_No'];
	echo $Index_No = $_SESSION['SIndex_No'];
	
	echo $sql1="SELECT `Aadhar_No` FROM `students` WHERE `Gr_No` = '".$Gr_No."' and `Index_No`='".$Index_No."'";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	
	echo $sql2="SELECT `R_Name` FROM `schools` WHERE `Index_No` = '".$Index_No."' ";
	$result2 = $conn->query($sql2);
	$row2 = $result2->fetch_assoc();
	
	echo $Aadhar_No = $row1['Aadhar_No'];
	echo $R_Name = $row2['R_Name'];
	
	
	 $sql="INSERT INTO `suggested_students` (`request_id`,`Index_No`, `Gr_No`, `Aadhar_No`, `Representative_name`, `Description`) VALUES ('2','".$Index_No."','".$Gr_No."','".$Aadhar_No."','".$R_Name."','khv')";
		$result = $conn->query($sql);
	
	
		if($result)
		{
		header("location:requestPanel.php");
		}else{
			echo mysqli_error();
		}

   
	?> 
	
	
	