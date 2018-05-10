<!DOCTYPE html>

<?php
	session_start();
  if(isset($_SESSION['Index_No'])) 
 {
       //header("location: index.php");
					 
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
     <title>Login1</title>
   </head>
<body>
    <nav>
        <div class="nav-wrapper blue">
         <!-- SIDENAV -->
        
     

        <a href="#" class="brand-logo center">GSEB School Management</a>

        

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="..\dashboard\dashboard.html">Home</a></li>
        </ul>
        </div>
    </nav>    <div class="container">
                
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            
                            
<div class="card-content">
		<span class="card-title"> 
				<div>
					<center><h4>Government Representative Login</h4></center>
						<div class="row">
			<form class="col s8" method="POST" action="login_process.php" style="margin-left:35%;">
			
				<div class="row">
						<div class="input-field col s6">
						  <input id="percentage" type="text" name="username" class="validate">
						  <label for="name">Index Number</label>
						</div><br><br><br>
						<div class="input-field col s6">
						  <input id="last_name" type="password" name="password" class="validate">
						  <label for="last_name">Password</label>
						</div><br><br><br>
						<input class="waves-effect waves-light btn blue" type="submit" value="Login" />
						    
				</div>
            </form>
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

    <script>
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