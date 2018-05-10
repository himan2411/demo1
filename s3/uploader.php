<?php
require 'conn.php';
require 'app/start.php';
require 'app/config.php';   

use Aws\S3\S3Exception\S3Exception;

session_start();
$Index_No=$_SESSION['Index_No'];

 
if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    //File Details
    $name = $file['name'];
    $tmp_name= $file['tmp_name'];
	
    $extension = explode('.',$name);
    $extension = strtolower(end($extension));
	
			 $Gr_No=$_SESSION['Gr_No'];
			 $Index_No=$_SESSION['Index_No'];
			 $Standard=$_SESSION['Standard'];
			 $type=$_SESSION['type'];
			 $rank=$_SESSION['rank'];
			echo  $Aadhar_No=$_SESSION['Aadhar_No'];
			 $category=$_SESSION['category'];
			 
	
    //Temp Details
    $key = md5(uniqid());
    $tmp_file_name = "{$key}.{$extension}";
    $tmp_file_path = "files/{$tmp_file_name}";

    //move the file
    move_uploaded_file($tmp_name,$tmp_file_path);
    
    try {
        $s3->putObject([
            'Bucket' => 'hackathoncertibucket',
            'Key' => "uploads/{$key}",
            'Body'=> fopen($tmp_file_path,'rb'),
            'ACL' => 'public-read'
        ]);
        
		$SMS="https://s3.ap-south-1.amazonaws.com/hackathoncertibucket/uploads/";
		$SMS.="$tmp_file_name";
		$X=strrpos($SMS,".");
		$Standard=$_SESSION['Standard'];
		$Z=substr($SMS,0,$X);
        $sql="INSERT INTO `extra_curriculums`(`Index_No`, `Gr_No`, `Aadhar_No`,  `Standard`, `Rank`, `Category`, `Type`, `Link`, `id`) VALUES ('$Index_No','$Gr_No','$Aadhar_No','$Standard',,'$rank','$category','$type','$Z')";

        if ($conn->query($sql) === TRUE)
		{
            echo "New record created successfully";
        } 
		else 
		{
            echo "New record created successfully";
        }
        //Remoev file
       // unlink($tmp_file_path);

    }
	catch(S3Exception $e) {
        die("There was an error uploading thatt file");
    }
	
}
header("location:../stud_auth/viewStud.php");
?>