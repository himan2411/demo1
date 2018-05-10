 <form method="POST">
		
			  <p>
      <input type="checkbox" name="type[]" value="Aadhar_No" id="Academics" />
      <label for="Academics">Aadhar_No</label>
   &nbsp
   &nbsp
   &nbsp
  
      <input type="checkbox" name="type[]" value="Percentage" id="Cultural" />
      <label for="Cultural">Percentage</label>
    &nbsp
   &nbsp
   &nbsp
     <input type="checkbox" name="type[]" value="Sports" id="Sports" />
      <label for="Sports">Sports</label>
    </p>
		<br>	
			<input class="waves-effect waves-light btn blue" name="submit" type="submit" value="Submit" /> 
			
			</form>
			
			<?php 
		   echo   $sql = "SELECT * FROM `Student` WHERE";
		   
		  if(isset($_POST['submit']))
		  {
				if(!empty($_POST['type']))
				{
					foreach($_POST['type'] as $type)
					{
						echo $sql .= " `$type` = '$type' AND";
					}
				}
		  }
		?>