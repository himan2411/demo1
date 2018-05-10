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
                                    <h2><b>Select Student</b></h2>
                                        <div>
                                            
                                                <div class="row">

												<form class="col s12">
				

		<div class="input-field col s3">
	  <form action="" method="GET">
      <select name="ac" id="ac" onchange="this.form.submit();">
	  <option  value="" ,id="val">Select Standard</option>
      <option  value="1" ,id="val">1</option>
      <option  value="2",id="val">2</option>
      <option  value="3",id="val">3</option>
      <option  value="4",id="val">4</option>
      <option  value="5",id="val">5</option>
      <option  value="6",id="val">6</option>
      <option  value="7",id="val">7</option>
      <option  value="8",id="val">8</option>	
    </select>
    <label>Select Standard</label>
	
		</form>
		</div>
  
						
  
  
    
  </form>
              
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
			
			if(isset($_GET['ac'])){
			 $aaa = $_GET['ac'];
			
				 $sql = "SELECT * FROM `Student` where Index_No = '$Index_No' AND Standard='$aaa'";
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
             <!-- Modal Trigger 
             <button data-target="<?php echo $grnum?>" class="btn modal-trigger">More Details</button>-->
             <button data-target="<?php echo $grnum."1";?>" class="btn modal-trigger">Send Details</button>
             

             <!-- Modal Structure -->
             <div id="<?php echo $grnum?>" class="modal modal-fixed-footer">
               <div class="modal-content">
                
                  <h4>Student's Information</h4>

                  <div class="row">
                      
					  <div class="input-field col s6">
                                <input id="GR_no" type="number" class="validate">
                                <label for="GR_no">G.R. Number: <?php echo $grnum;
									$_SESSION["Gr_No"] = $grnum;
									?></label>
                      </div>
					  <div class="input-field col s6">
								
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
                                      <input id="dob" type="text" class="datepicker">
                                      <label for="dob">Birth Date: <?php echo $row1['DOB'];?></label>
                                    </div>
					</div>
					<div>
                      <div class="input-field col s6">
                        <input id="parent_name" type="text" class="validate">
                        <label for="parent_name">Father's Name: <?php echo $row1['Father_Name'];?></label>
                      </div>
					  <div class="input-field col s6">
                        <input id="parent_name" type="text" class="validate">
                        <label for="parent_name">Mother's Name: <?php echo $row1['Mother_Name'];?></label>
                      </div>
                    </div>
                    <div class="row">
                          
                          <div class="input-field col s6">
                                  <input id="Contact" type="number" class="validate">
                                  <label for="Contact">Contact: <?php echo $row1['Contact_No'];?></label>
                          </div>
						  <div class="input-field col s6">
                              <input id="parent_email" type="email" class="validate">
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
											
												</div> <br>
                                            
												
												<div class="input-field col s12">  
                                              
                                            
											  <select name="type1" id="type1" >
											  <option  value="">Select Rank</option>
											  <option  value="1" >First</option>
											  <option  value="2">Second</option>
											  <option  value="3">Third</option>	
											</select>
											<div class="input-field col s12">
											  <select name="val1" id="val1" >
											  <option  value=""  >Select Category</option>
											  <option  value="District" >District</option>
											  <option  value="State">State</option>
											  <option  value="National">National</option>	
											  
											  <option  value="Interschool" >Interschool</option>
											</select>
											
											</div> <br>
												</div>
												<div class="row">

                                                <div class="input-field col s12">
                                                  <input type="text" name="certi" id="certi">
                                                  <label for="task">Competition Name</label>
                                                </div>
												</div> 
											</div>
											 <input type="submit" value="Upload Certificate" class="btn">
											
											  											  <br>
											  <br>
											  <br>
                          
                                      
                                  
                                 
                                    
                                    

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
			
			<form>
             <div id="<?php echo $grnum."1";?>" class="modal modal-fixed-footer">
               <div class="modal-content">
                
                  <h4>Student's Information</h4>
	
                  <div class="row">
                      
					  <div class="input-field col s6">
                                
                                G.R. Number: <?php echo $grnum;
									$_SESSION["Gr_No"] = $grnum;
									?>
                      </div>
					  <div class="input-field col s6">
                           Standard: <?php echo $row1['Standard'];?>
                          </div>
                      <!--div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name"></label>
                      </div-->
                    </div>
                    <div class="row">
						<div class="input-field col s6">
					  Student's Name: <?php echo $fullname;?>
                      </div>
					  <div class="input-field col s6">
                                     Birth Date: <?php echo $row1['DOB'];?>
                                    </div>
					</div>
					<div>
                      <div class="input-field col s6">
                        Father's Name: <?php echo $row1['Father_Name'];?>
                      </div>
					  <div class="input-field col s6">
                        Mother's Name: <?php echo $row1['Mother_Name'];?>
                      </div>
                    </div>
                    <div class="row">
                          
                          <div class="input-field col s6">
                                 Contact: <?php echo $row1['Contact_No'];?>
                          </div>
						  <div class="input-field col s6">
                             E-mail: <?php echo $row1['Email_Id'];?>
                      </div>
                      </div>
                      <div class="row">
                              
                              
                      </div>
                <h4>School Academic</h4>
                        <div class="row">
                           <div class="input-field col s7">
                            Percentage: <?php echo $row1['Percentage'];?>
                          </div>
                        </div>
						
						
						<!--	<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Enter description here</span>
  </div>
  <textarea class="form-control" name="desc" id="desc" aria-label="With textarea" required></textarea>
</div>
						<script>
						var desc = document.getElementById("desc").value;
						
						
						</script>
						--><?php 
						 $sql1="SELECT `request_id` FROM `suggested_students` order by`request_id` desc limit 1";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	?>
				<a href="studentsToBeSuggested_process.php?id=<?php echo $row1['id'];?>"> <button class="btn">Send</button></a>
				 
						
                                              </form>
											  											  <br>
											  <br>
											  <br>
                          
                                      
                                  
                                 
                                     
                                    

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
</body>
</html>