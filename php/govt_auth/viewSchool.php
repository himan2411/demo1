<!DOCTYPE html>
<?php
include("conn.php");
	session_start();
 	if(isset($_POST['School_Type']))
		$_SESSION['School_Type'] =$_POST['School_Type'];
	
	if(isset($_POST['District']))
	  $_SESSION['District'] = $_POST['District'];
		
?>
<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>View School</title>
	 

   </head>
<body>
     <?php include("header.php");?>
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
           <h2><b>Filter Information</b></h2>
		
				
		
		<form action="" method="POST">
		<div class="input-field col s3">
    <select name="School_Type" value="<?php echo $_SESSION['School_Type']?>" id="School_Type" onchange="this.form.submit()">
      <option value="" disabled selected><?php echo $_SESSION['School_Type']?></option>
      <option value="RURAL">Rural</option>
      <option value="URBAN">Urban</option>
    </select>
    <label>Select Type</label>
  </div>  
  
 


	<div class="input-field col s3">
    <select name="District" id="District" value="<?php echo $_SESSION['District']?>" onchange="this.form.submit()"> 
      <option value="" disabled selected><?php echo $_SESSION['District']?></option>
      <option value="AHMEDABAD">Ahmedabad</option>
      <option value="SURAT">Surat</option>
      <option value="VADODARA">Vadodra</option>
      <option value="KHEDA">Kheda</option>
    </select>
    <label>Select District</label>
  </div> 
  

</form>  
 <br>
  
<!--  <form action="">
  	  <input type="checkbox" name="District[]"  selected	value="AHMEDABAD" id="AHMEDABAD" />
      <label for="AHMEDABAD"> Ahmedabad</label>
	  &nbsp
   &nbsp
	  <input type="checkbox" name="District[]"  value="VADODARA" id="VADODARA" />
      <label for="VADODARA"> Vadodara</label>
	</form>-->
  <table class="responsive">
        <thead>
          <tr>
              <th>School_Name</th>
             
              <th>Index_No</th>
              <th>Address</th>
              <th>District</th>
            <!--  <th>Registration no.</th>-->
              <th>Email_Id</th>
              <th>Phone_No</th>
             
              <th>Type</th>
              
			  
              <th></th>
          </tr>
        </thead>

        <tbody>
		 <?php 
		  $sql = "SELECT * FROM `School_Registration` WHERE `Index_No` IS NOT NULL ";
		  $sql1 = "The schools displayed are ";
		  
		 
		 	
		 
		 
		
				
				
		 if(isset($_SESSION['School_Type']))
				{
					$School_Type = $_SESSION['School_Type'];
				$sql .= " And  `School_Type` = '$School_Type'";
				$sql1 .= "of $School_Type region" ;
					
				}else{
					
				$sql .= "  And  `School_Type` IS NOT NULL" ;
				}
				
				
				if(isset($_SESSION['District']))
				{
					$District = $_SESSION['District'];
					
					$sql .= " And  `District` = '$District'" ;
					$sql1 .= " In $District district.";
				}else{
					
				}
		
	  
$result = $conn->query($sql);
      while($row1 = $result->fetch_assoc())
	  { 
	  
  ?>
  <br><br><br>
  <p><?php echo $sql1;?></p>
          <tr>
            
            <td><?php echo $row1['School_Name'];?></td>
			<td><?php echo $row1['Index_No'];?></td>
			<td><?php echo $row1['School_Address'];?></td>
			<td><?php echo $row1['District'];?></td>
			<td><?php echo $row1['Email_Id'];?></td>
			<td><?php echo $row1['Phone_No'];?></td>
			
			<td><?php echo $row1['School_Type'];?></td>
			
          </tr>
          
		  
		  <?php
		  
	  
		}
	  ?>
        </tbody>
		
		
      </table>  
                  
                                            
                                                
                 
                            
                    </div>
                </div>
            </div> 
            </div> 

            

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script>
	
	$(document).ready(function() {
    $('select').material_select();
  });
       $(".button-collapse").sideNav();

        // Init Sidenav
        $('.button-collapse').sideNav();
    </script>
    <script>
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    </script>
</body>
</html>