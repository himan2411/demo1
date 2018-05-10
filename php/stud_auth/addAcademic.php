	<?php
	
	include "conn.php";
	session_start();
	echo $Gr_No=$_SESSION['Gr_No'];
	echo $Index_No=$_SESSION['Index_No'];
	echo $Standard=$_SESSION['Standard'];

				
			
			echo $type=$_GET['type'];
			echo $rank=$_GET['type1'];
			echo $category=$_GET['val1'];
			echo $certi=$_GET['certi'];
			
	$_SESSION["type"] =$type;
	$_SESSION["rank"]=$rank;
	$_SESSION["category"]=$category;
	$_SESSION["certi"]=$certi;

			
			
		
		$sql1="SELECT Credit_Points FROM Credit_Mapping WHERE Rank = '$rank' and Category = '$category'";
		$result2= $conn->query($sql1);
		 while($row1 = $result2->fetch_assoc()){
			 $temp1=$row1['Credit_Points'];
		if($type == 'Academics')
		{
		$sql3="UPDATE Student SET Ext_Academics=Ext_Academics+'$temp1' WHERE Gr_No='$Gr_No' AND Index_No='$Index_No' And Standard='$Standard'";
		}
		else if($type == 'Sports' )
		{

			$sql3="UPDATE Student SET Ext_Sports=Ext_Sports+'$temp1' WHERE Gr_No='$Gr_No' AND Index_No='$Index_No' And Standard='$Standard'";
		}
		else
		{
				$sql3="UPDATE Student SET Ext_Cultural=Ext_Cultural+'$temp1' WHERE Gr_No='$Gr_No' AND Index_No='$Index_No' And Standard='$Standard'";
		}
			$result3=$conn->query($sql3);
	
		 }
          header("location:..\s3\uploader1.php");  

	  
       

   
?>