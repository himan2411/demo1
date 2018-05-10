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
     <title>View Students</title>
	 


   </head>
<body>

     <?php include("header.php");?>
        <div class="container" style="border:none;"> 
                
                <div class="row">
                    <div class="" style="margin-left:-18%;width:125%;" >
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <center><h3><b>Suggested Students</b></h3></center>
                                        <div>
            
		 		 
			
             
         <table id="getdata" class="table" class="scrollmenu" style="overflow-x:scroll;">
                  <thead>
                    <tr>
                     
                   <th>Id</th>
                     
                      <th>Authority Discription</th> 	
                      <th>Index_No</th>
                      <th>Gr_No</th>
                      <th>Aadhar_No</th>
                      <th>Name</th>
                    
                      <th>Contact</th>
					    <th>Gender</th>
                      <th>Standard</th>
                      <th>Description</th>
                      
                     
                      
                     
                    </tr>
                  </thead>
                  <tbody>
				  
		 <?php
		 
		 
 
	$sql5 = "SELECT * FROM `requests` WHERE 1";
	$result5 = $conn->query($sql5);

	$sql4="SELECT * FROM `students` WHERE `Aadhar_No` IN (SELECT `Aadhar_No` FROM `suggested_students` WHERE 1)";
	$result4 = $conn->query($sql4);
	
	$sql3="SELECT `Description` FROM `suggested_students` WHERE 1";
	$result3 = $conn->query($sql3);
	
	
	
	
      while($row5 = $result5->fetch_assoc())
	  {
			$row1 = $result4->fetch_assoc();
			$row3 = $result3->fetch_assoc();
	
?>
				  
                    <tr>
                    <!--<td><a class="waves-effect waves-light btn blue" href="updateStudent.php" style="margin-left:0%;">Update</a>
					<a class="waves-effect waves-light btn blue" href="deleteStudent.php" style="margin-left:0%;">Delete</a> </td>*/-->
                  
				  
				  <td><?php echo $row5['id'];?></td>
				  <td><?php echo $row5['request'];?></td>
				  
				  <td><?php echo $row1['Index_No'];?></td>
				  <td><?php echo $row1['Gr_No'];?></td>
					<td><?php echo $row1['Aadhar_No'];?></td>
					
					<td><?php echo $row1['Student_Name'];?></td>
					
					<td><?php echo $row1['Contact_No'];?></td>
					<td><?php echo $row1['Gender'];?></td>
					<td><?php echo $row1['Standard'];?></td>
					
					<td><?php echo $row3['Description'];?></td>
				
					
                      
                      <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                    </tr>
                 
                     <?php
	  }
		
  ?>
                    
                   
                    </tbody>
                  </table>    
                                                        </div>
                                                      </div>    
                                        </span>
                                </div>
                 
                            
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