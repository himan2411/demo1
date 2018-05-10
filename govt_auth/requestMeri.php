<!DOCTYPE html>
<?php
include "conn.php";	
?>

<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

	 
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Request Meritorious</title>
	 



   </head>
<body>

     <?php include("header.php");?>
        <div class="container" style="border:none;"> 
                
                <div class="row">
                    <div class="" style="margin-left:0%;">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h5><b>Request Meritorious</b></h5>
                                        <div>
            
		 		 <form method="POST" action="requestMeri_process.php">
			  <p>
      <input type="checkbox" name="type[]" value="Ext_Academics" id="Academics" />
      <label for="Academics">External Academics</label>
   &nbsp
   &nbsp
  
  
      <input type="checkbox" name="type[]" value="Ext_Cultural" id="Cultural" />
      <label for="Cultural">Cultural</label>
    &nbsp
   &nbsp
   
     <input type="checkbox" name="type[]" value="Ext_Sports" id="Sports" />
      <label for="Sports">Sports</label>
	  <div id="chart1" style="float:right;"></div>

	
	<div class="input-field col s3">
    <select name="District" id="District" multiple > 
      <option value="" disabled selected  >Select District</option>
      <option value="Ahmedabad">Ahmedabad</option>
      <option value="Surat">Surat</option>
      <option value="Vadodara">Vadodra</option>
      <option value="Kheda">Kheda</option>
      <option value="Rajkot">Rajkot</option>
      <option value="Dahod">Dahod</option>
      
    </select>
    <label>Select District</label>
  </div> 
  



	  
<br>
<br>


  <p> <div style="    margin-left:0%;">
    <h5 > <b style="    margin-left:-20%;">School Type</b></h5>
   <input type="checkbox" name="School_type[]" value="RURAL" id="RURAL" />
      <label for="RURAL">RURAL</label>
    &nbsp
   &nbsp
 
   <input type="checkbox" name="School_type[]" value="URBAN" id="URBAN" />
      <label for="URBAN">URBAN</label>
   
	 </div>
 



	  
<br>						  
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Enter further description here</span>
  </div>
  <textarea class="form-control" name="desc" aria-label="With textarea" required></textarea>
</div>
						</p>
						
   
			
			<input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Request Students" />
			
			<br>
			<br>
			</form>
			
              </p>
			  
      
                                                        </div>
                                                      </div>    
                                        </span>
                                </div>
                 
                            
                    </div>
                </div>
            </div> 
            

            

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="app.js"></script>
    <script>
	 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

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