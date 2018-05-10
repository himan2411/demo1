<?php
require "conn.php";

    if(isset($_POST['submit'])){
    
			$Gr_No=$_POST['Gr_No'];
            
            $Aadhar_No=$_POST['Aadhar_No'];
            $Student_Name=$_POST['Student_Name'];

            $Father_Name=$_POST['Father_Name'];
            $Mother_Name=$_POST['Mother_Name'];
			$Email_Id=$_POST['Email_Id'];
            $Contact_No=$_POST['Contact_No'];
            $DOB=$_POST['DOB'];

            $Gender=$_POST['Gender'];
            $Standard=$_POST['Standard'];
            $Percentage=$_POST['Percentage'];
            
            $sql = "INSERT INTO Student (Gr_No,Index_No, Aadhar_No,Student_Name,Father_Name,Mother_Name,Contact_No,Email_Id,DOB,Gender,Standard)
						VALUES ('$Gr_No', 'GJ01CU','$Aadhar_No','$Student_Name','$Father_Name','$Mother_Name','$Contact_No','$Email_Id','$DOB','$Gender','$Standard' )";

						if ($conn->query($sql) === TRUE) {
							echo "New record created successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
            
       
	}
    else{
            phpAlert(   "Error !!\\n\\n No Such JAIL ID Exists!!"   );
    } 
?>