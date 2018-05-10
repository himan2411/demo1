<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("header.php");?>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>View Students</title>
   </head>
<?php

include "conn.php";	
session_start();

?>
<h1>&nbsp &nbsp Students with conflicts in aadhar details</h1>
		 <table id="getdata" class="table" class="scrollmenu" style="overflow-x:scroll;">
                  <thead>
                    <tr>
                     

                      <th>Aadhar No.</th>&nbsp
                      <th>Name.</th>&nbsp
                      <th>PAN No</th>&nbsp
                      
                    </tr>
                  </thead>
                  <tbody>
				  
<?php				  

					
					  $sql1="SELECT `Student_Name`,`Index_No`,`Gr_No` FROM `students` WHERE `Aadhar_No` NOT IN (SELECT `Aadhar_No` FROM `aadhar` WHERE 1)";
					 //die();
					//echo $result1 = $conn->query($sql1);
					$result2=$conn->query($sql1);
					while ($row2 = $result2->fetch_assoc()) {
					
					
					?>
					<tr>
						<td><?php echo $row2['Student_Name'];?></td>
						<td><?php echo $row2['Index_No'];?></td>
						<td><?php echo $row2['Gr_No'];?></td>
					
					</tr>
                     
<?php
	  }
?>		

</body>
</html>