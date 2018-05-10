	<nav>
			<div class="nav-wrapper blue">
			 <!-- SIDENAV -->
			
		 

			<a href="#" class="brand-logo center">Smart India Hackathon</a>

			<ul id="slide-out" class="left side-nav">
					<li><a href="showAllSchools.php">View Schools</a></li>
					<li><a href="viewSchool.php">Filter Schools</a></li>
					<li><a href="viewStud.php">View Meritorious Students</a></li>
					<li>
						<div class="divider"></div>
					</li>
				   
				<li><a href="logout.php">Log Out</a></li>
				<li>
				
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
    <select name="Level"  onchange="showUser1(this.value)"> 
      <option value="" disabled selected>Choose Level</option>
	  
      <option value="National">National</option>
      <option value="State">State</option>
	  <option value="District">District</option>
	  <option value="InterSchool">InterSchool</option>
      
      </select>
    <label>Select Level</label>
  </div> 
	<div class="input-field col s3">
    <select name="Region"  onchange="showUser1(this.value)"> 
      <option value="" disabled selected>Select Region</option>
      <option value="NORTH">NORTH</option>
      <option value="SOUTH">SOUTH</option>
      <option value="EAST">EAST</option>
      <option value="WEST">WEST</option>	
     
    </select>
    
  </div> 




	<div class="input-field col s3">
    <select name="District"  onchange="showUser1(this.value)"> 
      <option value="" disabled selected>Select District</option>
      <option value="AHMEDABAD">AHMEDABAD</option>
      <option value="SURAT">SURAT</option>
      <option value="VADODARA">VADODRA</option>
      <option value="KHEDA">KHEDA</option>
     
    </select>
    
  </div> 

<br>
<br>
<br>


	  <div class="input-field col s3">
				<input id="percentage" type="text" onchange="this.form.submit()" name="Percentage" class="validate">
				  <label for="Percentage">Enter Min Percentage</label>
		</div>
	
	 
     

	     
    
 
   


	<div class="input-field col s3">
    <select name="Standard"  onchange="this.form.submit()"> 
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
 

  &nbsp
 
 <div style="margin-top: -5%;">
    <h5><b>School Type</b></h5>
   <input type="checkbox" name="School_type" value="RURAL" id="RURAL" />
      <label for="RURAL">RURAL</label>
    &nbsp
   &nbsp
 
   <input type="checkbox" name="School_type" value="URBAN" id="URBAN" />
      <label for="URBAN">URBAN</label>
   
	 </div>
	 
	 
<br><br><br>
	 
	  <div style="margin-top: -5%;">
    <h5><b>Gender</b></h5>
   <input type="checkbox" name="gender" onchange="this.form.submit()" value="Male" id="Male" />
      <label for="Male">Male</label>
    &nbsp
   &nbsp
 
   <input type="checkbox" name="gender" onchange="this.form.submit()" value="Female" id="Female" />
      <label for="Female">Female</label>
   
	 </div>
						  <div class="input-field col s3">
						  <input id="percentage" type="text" name="Limit" class="validate">
						  <label for="Limit">Limit no. of Students.</label>
						</div>
						
						
   
		<br>	
			<input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Apply Filters" />
			
			</form>

				
				</li>
					</ul>
					<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

		   <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="addStudent.html">Register Students</a></li>
				<li><a href="#">Log Out</a></li>
			</ul>-->
				</div>
				
		</nav>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

		<script>
		   $(".button-collapse").sideNav();

			// Init Sidenav
			$('.button-collapse').sideNav();
		</script>
			</div>
		</nav> 
		
