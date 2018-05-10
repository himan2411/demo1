<!DOCTYPE html>
<?php
include "conn.php";	
session_start();
if(!isset($_SESSION['SIndex_No'])) 
 {
		echo $sql = "select * from Student where Index_No='$Index_No'";
		header("location:login.php");
					 
 }
$StudIndex_No=$_SESSION['SIndex_No'];

	 
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
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h2><b>View/Update Student Data</b></h2>
                                        <div>
												
                                                <div class="row">

											
				

		<div class="input-field col s3">
	  <form method="POST">
       <select  name="Standard"  onchange="this.form.submit()"> 
      <option value="" disabled selected>Select Standard</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select>
    <label>Select Standard</label>
	
		</form>
		</div>
  
						<br>	
  
    
  
              
         <table class="striped ">
        <thead>
          <tr>
              <th>GRNO</th>
              <th>Name</th>
              <th>Edit Data</th>

          </tr>
        </thead>
 
	
        <tbody>
		
			<?php	
			if(isset($_POST['Standard'])){
			 $aaa= $_POST['Standard'];
			
				echo $sql = "SELECT * FROM `Student` where Index_No = '$StudIndex_No' AND Standard='$aaa'";
					$result = ($conn->query($sql));
				  while($row1 = $result->fetch_assoc())
				  {
		?>
		 <tr>
		 
            <td><?php 
				$_SESSION["Standard"] =$row1['Standard'];
				echo $grnum = $row1['Gr_No'];
			?></td>
            <td><?php echo $fullname =  $row1['Student_Name'];?></td>
		
            <th>
             <!-- Modal Trigger -->
             <button data-target="<?php echo $grnum?>" class="btn modal-trigger">More Details</button>

             <!-- Modal Structure -->
             <div id="<?php echo $grnum?>" class="modal modal-fixed-footer">
               <div class="modal-content">
                
                  <h4>Student's Information</h4>

                  <div class="row">
                      
					  <div class="input-field col s6">
                                <input id="GR_no" type="text" class="validate">
                                <label for="GR_no">G.R. Number: <?php echo $grnum;
									$_SESSION["Gr_No"] = $grnum;
									?></label>
                      </div>
					  <div class="input-field col s6">
                            <input id="std" type="number" class="validate">
                            <label for="standard">Standard: <?php echo $row1['Standard'];?></label>
                          </div>
                      <!--div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name"></label>
                      </div-->
                    </div>
                    <div class="row">
						<div class="input-field col s6">
					  <input id="first_name" type="text" class="validate">
                        <label for="first_name">Student's Name: <?php echo $fullname;?></label>	
                      </div>
					  <div class="input-field col s6">
                                      <input id="dob" type="text" class="datepicker" onblur="date_validate()">
                                      <label for="dob">Birth Date: <?php echo $row1['DOB'];?></label>
                                    </div>
					</div>
					<div>
                      <div class="input-field col s6">
                        <input id="Father_name" type="text" class="validate"  onblur="name_validate(document.getElementById('Father_Name'))">
                        <label for="Father_Name">Father's Name: <?php echo $row1['Father_Name'];?></label>
                      </div>
					  <div class="input-field col s6">
                        <input id="Mother_Name" type="text" class="validate" onblur="name_validate(document.getElementById('Mother_Name'))">
                        <label for="parent_name">Mother's Name: <?php echo $row1['Mother_Name'];?></label>
                      </div>
                    </div>
                    <div class="row">
                          
                          <div class="input-field col s6">
                                  <input id="Contact" type="number" class="validate" onblur="contact_validate()">
                                  <label for="Contact">Contact: <?php echo $row1['Contact_No'];?></label>
                          </div>
						  <div class="input-field col s6">
                              <input id="parent_email" type="email" class="validate" onblur="mail_validate()">
                              <label for="parent_email">E-mail: <?php echo $row1['Email_Id'];?></label>
                      </div>
                      </div>
                      <div class="row">
                              
                              
                      </div>
                <h4>School Academic</h4>
                        <div class="row">
                           <div class="input-field col s7">
                            <input id="percentage" type="number" class="validate">
                            <label for="percentage">Percentage: <?php echo $row1['Percentage'];?></label>
                          </div>
                        </div>
						 <input type="button" onclick="viewStud.php" value="Update details" class="btn">
						<br><br>
						<h4>Extra Curriculum</h4>
                                        <div class="card-content">
                                            <span class="card-title"></span>
											<form action="addAcademic.php" method="GET">
											
											<div class="input-field col s12">
											  <select name="type" id="type" >
											  <option  value="" ,name="val2",id="val2">Select Type</option>
											  <option  value="Academics" ,name="val2",id="val2">Academics</option>
											  <option  value="Sports",name="val2",id="val2">Sports</option>
											  <option  value="Cultural",name="val2",id="val2">Cultural</option>
												</select>
											
											</div> 
											<br>
												<div class="input-field col s12">  
                                              
                                            
											  <select name="type1" id="type1" >
											  <option  value="">Select Rank</option>
											  <option  value="1" >First</option>
											  <option  value="2">Second</option>
											  <option  value="3">Third</option>	
											</select>
											</div>
											<div class="input-field col s12">
											  <select name="val1" id="val1" >
											  <option  value=""  >Select Category</option>
											  <option  value="District" >District</option>
											  <option  value="State">State</option>
											  <option  value="National">National</option>	
											  
											  <option  value="Interschool" >Interschool</option>
											</select>
											
											</div> <br>
												
												<div class="row">

                                                <div class="input-field col s12">
                                                  <input type="text" name="certi" id="certi">
                                                  <label for="task">Competition Name</label>
                                                </div>
												</div> 
											</div>
											 <input type="submit" value="Upload Certificate" class="btn">
												
                                              </form>
											  											  <br>
											  <br>
											  <br>
                          
                                      
                                  
                                 
                                     
                                        <!--<form action="..\s3\uploader.php" method="POST">
											<input type="submit" value="Upload Certificates">
										</form>-->
                                    

               <!--         <div class="card-action">
                          <h5 id="task-title">All Certificate</h5>
                          
                          <ul class="collection"></ul>
                          <a href="#" class="clear-tasks btn black">Clear Certificate</a>
                        </div> -->
                                      
                                        
                    
              </div>
                  <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
					   
                  </div>
            </div>
             
            </th>
          </tr>
			<?php }}?>
		
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
	<script>
		function contact_validate()
			{
				var a=document.getElementById("Contact").value;
				var len=a.length;
				if(a.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)&&len==10)
				{
					document.getElementById("Contact_No").style.borderColor="green";
					document.getElementById("submit").disabled=false;
				}
				else
				{
					document.getElementById("Contact_No").style.borderColor="red";
					document.getElementById("Contact_No").placeholder="\t\t\tPlease enter a valid Contact number";
					document.getElementById("submit").disabled=true;
				} 
			}
			function date_validate()
			{
				var a=document.getElementById("dob").value;
				var eighteenYearsAgo = moment().subtract(5, "years");
				var birthday = moment(date);
				if (!birthday.isValid())
				{
				return "invalid date";    
				}	
				else if (eighteenYearsAgo.isAfter(birthday))
				{	
					return "okay, you're good";    
				}
				else 
				{
					alert("Sorry your child does not belong here");
				}
			}
		</script>
		<script>
			function mail_validate()
			{
				var a=document.getElementById("Email_Id").value;
				if(a.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))
				{
					document.getElementById("Email_Id").style.borderColor="green";
					document.getElementById("submit").disabled=false;
				}
				else
				{
					document.getElementById("Email_Id").style.borderColor="red";
					document.getElementById("Email_Id").placeholder="\t\t\t Please enter a valid Email ID";
					document.getElementById("submit").disabled=true;
				} 
			}
		</script>
		<script>
			function name_validate(a)
			{
				var b=a.value;
				if(b.match(/^[A-Za-z\s]+$/))
				{
					a.style.borderColor="green";
					document.getElementById("submit").disabled=false;
				}	
				else
				{
					a.style.borderColor="red";
					a.placeholder="\t\t\t\t  Please enter a valid Name";
					document.getElementById("submit").disabled=true;
				}
			}
		</script>
		<script>
			function adhar_validate()
			{
				var a=document.getElementById("Aadhar_No").value;
				var len=a.length;															
				if(a.match(/([0-9]{12})$/)&&len==12)
				{
					document.getElementById("Aadhar_No").style.borderColor="green";
					document.getElementById("submit").disabled=false;
				}	
				else
				{
					document.getElementById("Aadhar_No").style.borderColor="red";
					document.getElementById("Aadhar_No").placeholder="\t\t\tPlease enter a valid Aadhar number";
					document.getElementById("submit").disabled=true;
				}
			}
		</script>
</body>
</html>