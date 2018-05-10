<!DOCTYPE html>
<?php
include("conn.php");
	session_start();
	
	$Index_No = $_SESSION['Index_No'];
  if(!isset($_SESSION['Index_No'])) 
 {
       header("location:login.php");
					 
	 }
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
                                        <div>
                                            
                                                <div class="row">

												<form class="col s12">
				
		
		
		<div class="input-field col s3">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">North</option>
      <option value="2">South</option>
      <option value="3">East</option>
      <option value="4">West</option>
    </select>
    <label>Select Region</label>
  </div>  


		<div class="input-field col s3">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Ahmedabad</option>
      <option value="2">Amreli</option>
      <option value="3">Banaskatha</option>
      <option value="4">Bhavnagar</option>
      <option value="5">Dang</option>
      <option value="6">Jamnagar</option>
      <option value="7">Surat</option>
    </select>
    <label>Select District</label>
  </div>    
          <div class="input-field col s3">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Surat</option>
      <option value="2">Ahmedabad</option>
      <option value="3">Bharuch</option>
      <option value="4">Vadodra</option>
      <option value="5">Anand</option>
      <option value="6">Ankleshwar</option>
    </select>
    <label>Select District</label>
  </div>  
		
		
		
		 


						<br>	&nbsp&nbsp&nbsp&nbsp							
<a class="waves-effect waves-light btn">Submit</a>                                            

  
  
    
  </form>
              
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
              <th>Board</th>
              <th>Type</th>
              
			  
              <th></th>
          </tr>
        </thead>

        <tbody>
		 <?php 
		  
		 
	    $sql = "SELECT * FROM `School_Registration`";
$result = $conn->query($sql);
      while($row1 = $result->fetch_assoc())
	  { 
	  
	  
  ?>
          <tr>
            
            <td><?php echo $row1['School_Name'];?></td>
			<td><?php echo $row1['Index_No'];?></td>
			<td><?php echo $row1['Address'];?></td>
			<td><?php echo $row1['District'];?></td>
			<td><?php echo $row1['Email_Id'];?></td>
			<td><?php echo $row1['Phone_No'];?></td>
			<td><?php echo $row1['Board'];?></td>
			<td><?php echo $row1['Type'];?></td>
			
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