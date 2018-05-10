<!DOCTYPE html>
<?php
include "conn.php";	
session_start();
if(!isset($_SESSION['SIndex_No'])) 
 {
		echo $sql = "select * from Student where Index_No='$Index_No'";
		header("location:login.php");
					 
 }
	
$Index_No=$_SESSION['SIndex_No'];
 
?>

<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

		<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>View Students</title>
	 


   </head>
<body>

     <?php include("header.php");?>
        <div class="container" style="border:none;"> 
                
                <div class="row">
                    <div class="" style="margin-left:-18%;">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h5><b>External Criteria</b></h5>
                                        <div>
            
			
              </p>
         <table id="getdata" class="table" class="scrollmenu" style="overflow-x:scroll;">
                  <thead>
                    <tr>
                     
					  <th>Gr No</th>
                      <th>Aadhar No</th>
                      <th>Index No</th>
                      <th>Name</th>
                      
                     
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Standard</th>
                      <th>Percentage</th>
                      
                      <th>Ext_Academics</th>
                     
                      <th>Ext_Sports</th>
                      <th>Ext_Cultural</th>
                      <th>Desc</th>
                     
                    </tr>
                  </thead>
                  <tbody>
				  
		 <?php
 if(isset($_POST['submit']))
	{
		
		
		
	$sql5 = "SELECT YEAR(CURDATE()) - YEAR(DOB) AS age FROM student";
	$result5 = $conn->query($sql5);
$result = $conn->query($sql);


      while($row1 = $result->fetch_assoc())
	  {
			$row5 = $result5->fetch_assoc()
	
?>
				  
                    <tr>
                    <!--<td><a class="waves-effect waves-light btn blue" href="updateStudent.php" style="margin-left:0%;">Update</a>
					<a class="waves-effect waves-light btn blue" href="deleteStudent.php" style="margin-left:0%;">Delete</a> </td>*/-->
                  <td><?php echo $row1['Gr_No'];?></td>
					<td><?php echo $row1['Aadhar_No'];?></td>
					<td><?php echo $row1['Index_No'];?></td>
					<td><?php echo $row1['Student_Name'];?></td>
					
					<td><?php echo $row1['Contact_No'];?></td>
					<td><?php echo $row1['Email_Id'];?></td>
					<td><?php echo $row5['age'];?></td>
					<td><?php echo $row1['Gender'];?></td>
					<td><?php echo $row1['Standard'];?></td>
					<td><?php echo $row1['Percentage'];?></td>
					
					<td><?php echo $row1['Ext_Academics'];?></td>
					<td><?php echo $row1['Ext_Sports'];?></td>
					<td><?php echo $row1['Ext_Cultural'];?></td>
					
                      
                      <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                    </tr>
                 
                     <?php
	  }
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