<?php
require "conn.php";

    if(isset($_POST['submit'])){
			$Index_No=$_SESSION['Index_No']
			$Gr_No=$_POST['Gr_No'];
            
            $Aadhar_No=$_POST['Aadhar_No'];
            $Student_Name=$_POST['Student_Name'];
			$Name=$_POST['Scholarship_Name'];
            $Address=$_POST['Address'];
			$Amount=$_POST['Amount'];
            $Contact_No=$_POST['Contact_No'];
            
            $sql2 ="SELECT * FROM `student` WHERE `Gr_No`='$Gr_No' AND `Index_No`='$Index_No';" 
			$result = ($conn->query($sql2));
			
            $sql = "INSERT INTO `scholarship`(`Aadhar_No`, `Index_No`, `Gr_No`, `Stud__Name`, `Scholarship_name`, `Amount`, `Address`, `Contact_No`) 
			VALUES ('".$result['Aadhar_No']."', '$Index_No','$Gr_No','".$result['Student_Name']."','$Name','$Amount','$Address','".$result['Student_Name']."' )";

						if ($conn->query($sql) === TRUE) {
							echo "New record created successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
            
       
	}
    else{?>
           <script>
			alert('asd');
		   </script><?php
    } 
?>