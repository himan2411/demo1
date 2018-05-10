<!DOCTYPE html>
<html lang="en">
<?php
require "conn.php";

    if(isset($_POST['submit']))
	{
		$Index_No=$_SESSION['Index_No'];
		$Gr_No=$_POST['Gr_No'];
        $Aadhar_No=$_POST['Aadhar_No'];
        $Student_Name=$_POST['Student_Name'];
        $Father_Name=$_POST['Father_Name'];
        $Mother_Name=$_POST['Mother_Name'];
		$Email_Id=$_POST['Email_Id'];
        $Contact_No=$_POST['Contact_No'];
        $DOB=$_POST['DOB'];
        $Gender=$_POST['Gender'];
        $Standard=$_POST['Standard'];
        $Percentage=$_POST['Percentage'];
        $sql = "INSERT INTO Student (Gr_No,Index_No, Aadhar_No,Student_Name,Father_Name,Mother_Name,Contact_No,Email_Id,DOB,Gender,Standard)
		VALUES ('$Gr_No', '$Index_No','$Aadhar_No','$Student_Name','$Father_Name','$Mother_Name','$Contact_No','$Email_Id','$DOB','$Gender','$Standard' )";
		if ($conn->query($sql) === TRUE) 
		{
			?>
			<script>
			alert("New record created successfully");
			</script>
		<?php }
		else
		{
			?>
			<script>
			alert("New record created successfully");
			</script>
		<?php 
			header("location:addStudent.php");
		}
    }
?>
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Add Student</title>
</head>
   
   
   
<body>
    <?php include("header.php");?>
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h2><b>Register New Students</b></h2>
									
                                  </span>
                                        <div>
                                            <h4>Student's Information</h4>
											
                                                <div class="row">
													
                                                        <form class="col s12" action="" id="form1" name="form1" method="post">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input required id="Gr_No" name="Gr_No" type="text" autofocus  class="validate">
                                                                    <label for="Gr_No">Gr No</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input required id="Aadhar_No" onfocus=document.getElementById("Aadhar_No").value="" onblur="adhar_validate()" name="Aadhar_No" type="text" autofocus  class="validate">
                                                                    <label for="Aadhar_No">Aadhar No</label><br>
																	<script>
																		function adhar_validate()
																		{
																			var a=document.getElementById("Aadhar_No").value;
																			var len=a.length;
																			
																			if(a.match(/([0-9]{12})$/)&&len==12)
																			{
																				document.getElementById("Aadhar_No").style.borderColor="green";
																			}	
																			else
																			{
																				
																				document.getElementById("Aadhar_No").style.borderColor="red";
																				document.getElementById("Aadhar_No").value="\t\t\tPlease enter a valid Aadhar number";
																			}
																				
																		}
																	
																	</script>
                                                                </div>
                                                          </div>
                                                          <div class="row">
                                                                
                                                                <div class="input-field col s12">
                                                                    <input required id="Student_Name"onfocus=document.getElementById("Student_Name").value="" onblur="name_validate(document.getElementById('Student_Name'))" name="Student_Name" type="text" autofocus  class="validate">
                                                                    <label for="Student_Name">Student Name</label>
																	<script>
																		function name_validate(a)
																		{
																			var b=a.value;
																			
																			if(b.match(/[a-zA-Z\-'\s]+/))
																			{
																				a.style.borderColor="green";
																			}	
																			else
																			{
																				
																				a.style.borderColor="red";
																				a.value="\t\t\t\t  Please enter a valid Name";
																			}
																				
																		}
																	
																	</script>
                                                                </div>
                                                          </div>
                                                          <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input required id="Father_Name" onfocus=document.getElementById("Father_Name").value="" onblur="name_validate(document.getElementById('Father_Name'))"name="Father_Name" type="text" autofocus  class="validate">
                                                                    <label for="Father_Name">Father Name</label>
																	
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input required id="Mother_Name"onfocus=document.getElementById("Mother_Name").value="" onblur="name_validate(document.getElementById('Mother_Name'))" name="Mother_Name" type="text" autofocus  class="validate">
                                                                    <label for="Mother_Name">Mother Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
																
																
																
																
                                                                <div class="input-field col s6">
                                                                    <label for="Contact_No">Contact No</label>
																	<input required id="Contact_No"placeholder="+91"onfocus=document.getElementById("Contact_No").value="" onblur="contact_validate()" type="text"  name="Contact_No" type="text" autofocus  class="validate">
                                                                    <script>
																		
																		function contact_validate()
																		{
																				var a=document.getElementById("Contact_No").value;
																				var len=a.length;
																				
																			  if(a.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)&&len==10)
																					{
																				  document.getElementById("Contact_No").style.borderColor="green";
																					}
																				  else
																					{
																					document.getElementById("Contact_No").style.borderColor="red";
																					document.getElementById("Contact_No").value="\t\t\tPlease enter a valid Contact number";
																					} 
																		}
																	
																	</script>
                                                                </div>
																
                                                                <div class="input-field col s6">
                                                                    <input required id="Email_Id" onfocus=document.getElementById("Email_Id").value="" onblur="mail_validate()" name="Email_Id" type="text" autofocus  class="validate">
                                                                    <label for="Email_Id">Email Id</label>
																	<script>
																		
																		function mail_validate()
																		{
																				var a=document.getElementById("Email_Id").value;
																				
																			  if(a.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))
																					{
																				  document.getElementById("Email_Id").style.borderColor="green";
																					}
																				  else
																					{
																					document.getElementById("Email_Id").style.borderColor="red";
																					document.getElementById("Email_Id").value="\t\t\t Please enter a valid Email ID";
																					} 
																		}
																	
																	</script>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <label for="DOB">DOB</label>
																	<br>
																	<input required id="DOB" name="DOB" type="date" autofocus  class="validate">
                                                                    
                                                                </div>
															
																<br>
																<div><br>
                                                                <input type="radio" name="Gender" value="Male" id="Male" />
																	  <label for="Male">Male</label>
																	&nbsp
																   														 
																   <input required type="radio" name="Gender" value="Female" id="Female" />
																	  <label for="Female">Female</label>
																</div>
																</div>
                                                            <div class="row">
															 
                                                                <div class="input-field col s6">
                                                                    <select name="Standard" required onchange="showUser1(this.value)"> 
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
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input required id="Percentage"onfocus=document.getElementById("Percentage").value="" onblur="percentage_validate()" name="Percentage" type="text" autofocus  class="validate">
                                                                    <label for="Percentage">Percentage</label>
																	<script>
																		function percentage_validate()
																		{
																				var a=document.getElementById("Percentage").value;
																				
																			  if(a.match(/^(\d+|\d+[.]\d+)%?$/)&&a<=100)
																					{
																				  document.getElementById("Percentage").style.borderColor="green";
																					}
																				  else
																					{
																					document.getElementById("Percentage").style.borderColor="red";
																					document.getElementById("Percentage").value="\t\t\t\tPlease enter a valid Percentage value";
																					} 
																		}
																	</script>
                                                                </div>
																
                                                            </div>
                                                            <input class="btn waves-effect waves-light" type="submit"  name="submit" id="submit" value="Add Student" />
                                                          </form>
                                                        </div>
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