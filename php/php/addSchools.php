<?php
require "conn.php";
    if(isset($_POST['submit'])){
    
			$School_Name=$_POST['School_Name'];
            $Address=$_POST['Address'];
            $District=$_POST['District'];
            $Index_No=$_POST['Index_No'];
            $Password=$_POST['Password'];
            $Email_Id=$_POST['Email_Id'];
            $Phone_No=$_POST['Phone_No'];
			$Board=$_POST['Board'];
            $Type=$_POST['Type'];   
            $R_Name = $_POST["R_Name"];
            $R_Email = $_POST["R_Email"];
            $Mobile_No = $_POST["Mobile_No"];
            $R_Password=$_POST['R_Password'];

                    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    //         if (empty($_POST["Index_No"])) {
                    //             $Required = "Required";
                    //         } else {
                    //             $Index_No = test_input($_POST["Index_No"]);
                    //         }

                    //         if (empty($_POST["Password"])) {
                    //             $Required = "Required";
                    //         } else {
                    //             $Password = test_input($_POST["Password"]);
                    //         }
                            
                    //         if ($_POST["Password"] != $Confirm_Password ) {
                    //             $No_Match = "Passwords doesn't match";
                    //         } 

                    //         if (empty($_POST["R_Password"])) {
                    //             $Required= "Required";
                    //         } else {
                    //             $R_Password = test_input($_POST["R_Password"]);
                    //         }
                            
                    //         if (empty($_POST["Confirm_Password"])) {
                    //             $Required = "Required";
                    //         } else {
                    //             $Confirm_Password = test_input($_POST["Confirm_Password"]);
                    //         }

                    //         if ($_POST["R_Password"] != $R_Confirm_Password ) {
                    //             $No_Match = "Passwords doesnt match";
                    //         }  
                    // }

echo $sql = "SELECT * FROM School_Index WHERE Index_No ='$Index_No' and Password ='$Password'";

if ($conn->query($sql)) {

    echo      $sql11 = "INSERT INTO School_Registration (School_Name,Index_No,Address, District, Email_Id, Phone_No,Board,Type) VALUES ('$School_Name','$Index_No','$Address','$District','$Email_Id','$Phone_No','$Board','$Type')";

    echo       $sql1 = "INSERT INTO School_Representative (Index_No, R_Name, R_Email,R_Password,Mobile_No) VALUES ('$Index_No','$R_Name','$R_Email','$Password','$Mobile_No')";

            if (($conn->query($sql11)) && ($conn->query($sql1)) )  {
                echo "School Registered ";
            } else {
                //else
                }
            }
else{
    echo "School index or password did not match";
    }
}
?>