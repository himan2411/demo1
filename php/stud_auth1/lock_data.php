	<?php
	
	include "conn.php";
	session_start();
	$Index_No=$_SESSION['Index_No'];
  


  
    
			$sql = "SELECT * FROM `Student` where  Index_No='$Index_No'";
			$result = $conn->query($sql);
      while($row1 = $result->fetch_assoc())
	  { 	
 
			if($row1['Status']=='Pass')
			{
					
				$temp=$row1['C_Percentage'];
				if($temp!=0){
				$temp=$temp*($row1['Standard']-1);
				$temp=$temp+$row1['Percentage'];
				$temp=$temp/($row1['Standard']);
				}
				else{
					$temp=$row1['Percentage'];
				}
				
				$temp1=$row1['C_Ext_Academics'];
				if($temp1!=0){
				$temp1=$temp1*($row1['Standard']-1);
				$temp1=$temp1+$row1['Ext_Academics'];
				$temp1=$temp1/($row1['Standard']);
				}
				else{
					$temp1=$row1['Ext_Academics'];
				}
				
				$temp2=$row1['C_Ext_Sports'];
				if($temp2!=0){
				$temp2=$temp2*($row1['Standard']-1);
				$temp2=$temp2+$row1['C_Ext_Sports'];
				$temp2=$temp2/($row1['Standard']);
				}
				else{
					$temp2=$row1['Ext_Sports'];
				}
				$temp3=$row1['C_Ext_Cultural'];
				if($temp3!=0){
				$temp3=$temp3*($row1['Standard']-1);
				$temp3=$temp3+$row1['C_Ext_Cultural'];
				$temp3=$temp3/($row1['Standard']);
				}
				else{
					$temp3=$row1['Ext_Cultural'];
				}
				
				echo $temp4=$row1['Gr_No'];
				echo $temp5=$row1['Standard']+1;
				echo $temp6=$row1['Aadhar_No'];
				echo $temp7=$row1['Percentage'];
				echo $temp8=$row1['Ext_Academics'];
				echo $temp9=$row1['Ext_Cultural'];
				echo $temp10=$row1['Ext_Sports'];
				echo $temp11=$temp+$temp1+$temp2+$temp3;
				$sql1="UPDATE Student  SET Standard='$temp5',Percentage=0,C_Percentage='$temp',Ext_Academics=0,C_Ext_Academics='$temp1',Ext_Sports=0,
			C_Ext_Sports='$temp2',Ext_Cultural=0,C_Ext_Cultural='$temp3',Combined_Credit='$temp11',Status=NULL WHERE Gr_No='$temp4' AND Index_No='$Index_No'";
					$conn->query($sql1);
					
					
				$sql2="SELECT Link FROM Extra_Cur where Aadhar_No='$temp6'";
				echo $temp12=$conn->query($sql2);
				if($row=$temp->fetch_assoc()==TRUE){
				while($row1 = $temp12->fetch_assoc()){
				
				$sql4="INSERT INTO Warehouse(Aadhar_No, Standard, Index_No, Percentage, Ext_Academics,Ext_Cultural,Ext_Sports,Credit_Score,Certi_Link)
				VALUES('$temp6','$temp5','$Index_No','$temp7','$temp8','$temp9','$temp10','$temp11','$temp12')";
				$conn->query($sql4);
				}
				$sql3="DELETE FROM Extra_Cur WHERE Index_No='$Index_No'";
			
				
				$conn->query($sql3);
				}
			}
			else{
				
			}
            
          header("location:index.php");  

	  
       
	}
   
?>