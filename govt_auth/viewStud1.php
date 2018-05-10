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
            <div class="" style="margin-left:-18%;width:145%;">
               <div id="main" class="card">
                  <div class="card-content">
                     <span class="card-title">
                        <h5><b>External Criteria</b></h5>
                        <div>
                           <form method="POST" action="">
                              <p>
                                 <input type="checkbox" name="type[]" value="Ext_Academics" id="Academics" />
                                 <label for="Academics"> Academics</label>
                                 &nbsp
                                 &nbsp
                                 <input type="checkbox" name="type[]" value="Ext_Cultural" id="Cultural" />
                                 <label for="Cultural">Cultural</label>
                                 &nbsp
                                 &nbsp
                                 <input type="checkbox" name="type[]" value="Ext_Sports" id="Sports" />
                                 <label for="Sports">Sports</label>
                              <div class="input-field col s3" >
                                 <select name="Level" multiple  >
                                    <option value="" disabled selected>Choose Level</option>
                                    <option value="3">National</option>
                                    <option value="2">State</option>
                                    <option value="1">District</option>
                                    <option value="0">InterSchool</option>
                                 </select>
                                 <label>Select Level</label>
                              </div>
                              <div class="input-field col s3">
                                 <select name="District[]" multiple id="District"  >
                                    <option value="" disabled selected>Select District</option>
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
                              <br>
                              <div class="input-field col s3">
                                 <input id="percentage" type="text" name="Percentage" class="validate">
                                 <label for="Percentage">Enter Min Percentage</label>
                              </div>
                              <div class="input-field col s3">
                                 <select multiple name="Standard[]" multiple >
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
                              <div class="input-field col s3">
                                 <select name="age"  >
                                    <option value="" disabled selected>Select age</option>
                                    <option value="6"> Under 6</option>
                                    <option value="7">Under 7</option>
                                    <option value="8">Under 8</option>
                                    <option value="9">Under 9</option>
                                    <option value="10">Under 10</option>
                                    <option value="11">Under 11</option>
                                    <option value="12">Under 12</option>
                                    <option value="13">Under 13</option>
                                    <option value="14">Under 14</option>
                                    <option value="15">Under 15</option>
                                    <option value="16">Under 16</option>
                                 </select>
                              </div>
                              <br>
                              <br><br>
                              <p> 
                              <div style="    margin-left: 28%;">
                                 <h5><b>School Type</b></h5>
                                 <input type="checkbox" name="School_Type[]" value="RURAL" id="RURAL" />
                                 <label for="RURAL">RURAL</label>
                                 &nbsp
                                 &nbsp
                                 <input type="checkbox" name="School_Type[]" value="URBAN" id="URBAN" />
                                 <label for="URBAN">URBAN</label>
                              </div>
                              <div style="margin-top: -7%;">
                                 <h5><b>Gender</b></h5>
                                 <input type="checkbox" name="Gender[]"  value="Male" id="Male" />
                                 <label for="Male">Male</label>
                                 &nbsp
                                 &nbsp
                                 <input type="checkbox" name="Gender[]"  value="Female" id="Female" />
                                 <label for="Female">Female</label>
                              </div>
                              <div class="input-field col s3">
                                 <input id="percentage" type="text" name="Limit" class="validate">
                                 <label for="Limit">Limit no. of Students.</label>
                              </div>
                              </p>
                              <br>	
                              <input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Apply Filters" />
                              <br>
                              <br>
                           </form>
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
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    if(isset($_POST['submit']))
                                    {
                                    	
                                    	
                                    	/*$type1 = $_POST['type'];
                                    	foreach($type1 as $i)
                                    	{
                                    		echo $i;
                                    	}
                                    	*/
                                    	
                                    	$sql1 = "SELECT DISTINCT `Index_No` FROM `extra_curriculums` Where `Index_No` IS NOT NULL ";
                                    	
                                    	$sql3 = "SELECT DISTINCT `Aadhar_No` FROM `extra_curriculums` Where `Gr_No` IS NOT NULL ";
                                    	
                                    	$sql = "SELECT * FROM `students` where `Aadhar_No` IS NOT NULL ";
                                    	
                                    	$sql2 = "SELECT DISTINCT `Index_No` FROM `schools` Where `Index_No` IS NOT NULL ";
                                    	
                                    		$sql5 = "SELECT YEAR(CURDATE()) - YEAR(DOB)  FROM student";
                                    	$result5 = $conn->query($sql5);
                                    
                                    	
                                    	$temp=0;
                                    	$x=0;
                                    
                                    			
                                    			
                                    			
                                    			
                                    			if(!empty($_POST['District']))
                                    			{
                                    				$District = $_POST['District'];
                                    				
                                    				$sql2 .= " AND ";
                                    				
                                    		
                                    				foreach($District as $Dist)
                                    				{
                                    				   $sql2 .= "`District` =  '$Dist' OR";
                                    				   
                                    				}
                                    				$sql2 .= "`District` =  '' ";
                                    				$temp=2;
                                    				$x=1;
                                    					
                                    			}
                                    			if(!empty($_POST['School_Type']))
                                    			{
                                    				$School_Type = $_POST['School_Type'];
                                    				
                                    					$sql2 .= " AND ";
                                    				
                                    		
                                    				foreach($School_Type as $Schl_type)
                                    				{
                                    				   $sql2 .= "`School_Type` =  '$Schl_type' OR";
                                    				   
                                    				}
                                    				$sql2 .= "`School_Type` =  '' ";
                                    				
                                    				
                                    				$temp=2;
                                    				$x=1;
                                    				
                                    			}
                                    			
                                    				if(!empty($_POST['Level']))
                                    			{
                                    				$Level = $_POST['Level'];
                                    				$sql1.= "AND `Category` = '$Level' AND `Index_No` IN";
                                    				$sql3.= "AND `Category` = '$Level' AND `Index_No` IN";
                                    				$temp=1;
                                    				$x=0;
                                    			}
                                    			
                                    			
                                    			if($temp==1)
                                    			{
                                    					$sql4 = "
                                    					
                                    					$sql1 ($sql2)";
                                    					
                                    					$sql5 = "
                                    					
                                    					$sql3 ($sql2)";
                                    					
                                    					$sql.="And `Index_No` IN ($sql4) And `Aadhar_No` IN ($sql5)";
                                    			
                                    			}
                                    			
                                    			if($temp==2)
                                    			{
                                    					$sql.= " And `Index_No` IN ($sql2)";
                                    			
                                    			}
                                    			
                                    			
                                    			
                                    			if(!empty($_POST['Gender']))
                                    			{
                                    				$Gender = $_POST['Gender'];
                                    				
                                    				$sql .= " AND (";	
                                    					foreach($Gender as $gend)
                                    				{
                                    				   $sql .= " `Gender` =  '$gend' OR ";
                                    				   
                                    				}
                                    				$sql .= "`Gender` =  '' )";
                                    				
                                    			}
                                    			
                                    			if(!empty($_POST['Standard']))
                                    			{
                                    				$Standard = $_POST['Standard'];
                                    				
                                    				$sql .= " AND (";	
                                    					foreach($Standard as $Stand)
                                    				{
                                    				   $sql .= " `Standard` =  '$Stand' OR ";
                                    				   
                                    				}
                                    				$sql .= "`Standard` =  '' )";
                                    				
                                    			}
                                    			
                                    			if(!empty($_POST['Percentage']))
                                    			{
                                    				$Percentage = $_POST['Percentage'];
                                    				
                                    				$sql .= " And  `Percentage` >= '$Percentage'" ;
                                    				
                                    				
                                    			}
                                    			
                                    		
                                    			if(!empty($_POST['age']))
                                    			{
                                    				$age = $_POST['age'];
                                    				 $sql .= "AND  (SELECT YEAR(CURDATE()) - YEAR(DOB) ) <  '$age' ";
                                    				   
                                    				
                                    			}
                                    			
                                    			if(!empty($_POST['type']))
                                    			{
                                    				$type1 = $_POST['type'];
                                    				
                                    				$sql .= " ORDER BY ";
                                    				
                                    				foreach($type1 as $type)
                                    				{
                                    				   $sql .= " $type+";
                                    				   
                                    				}
                                    				$sql .= " 1 DESC  ";
                                    			}
                                    			
                                    			
                                    			
                                    			if(!empty($_POST['Limit']))
                                    			{
                                    				$Limit = $_POST['Limit'];
                                    				
                                    				$sql .= " LIMIT $Limit" ;
                                    				
                                    			}
                                    
                                    
                                    $sql;//Final query generated 
                                    
                                    $sql5 = "SELECT YEAR(CURDATE()) - YEAR(DOB) AS age FROM students";
                                    $result5 = $conn->query($sql5);
                                    
                                    $result = $conn->query($sql);
                                    
                                    
                                         while($row1 = $result->fetch_assoc())
                                      {
                                    		$row5 = $result5->fetch_assoc();
                                    
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
                                    <td><?php 
                                       if( $row1['Gender'] == '0')
                                       {
                                       echo "Female";
                                       }
                                       else{
                                       echo "Male";
                                       }
                                       ?>
                                    </td>
                                    <td><?php echo $row1['Standard'];?></td>
                                    <td><?php echo $row1['Percentage'];?></td>
                                    <td><?php echo $row1['Ext_Academics'];?></td>
                                    <td><?php echo $row1['Ext_Sports'];?></td>
                                    <td><?php echo $row1['Ext_Cultural'];?></td>
                                    <td>
                                       <div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div>
                                       <div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div>
                                       <div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div>
                                    </td>
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