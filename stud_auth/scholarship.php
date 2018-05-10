<!DOCTYPE html>
<?php
include "conn.php";	
session_start();

	 
?>
<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Scholarship</title>
   </head>
<body>
    <?php include("header.php");?>
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h2><b>add student</b></h2>
                                  </span>
                                        <div>
                                            <h4>Student's Information</h4>
                                                <div class="row">
                                                        
																
																<!--<div class="row">-->
																
															<div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Gr_No" name="Gr_No" type="text" autofocus  class="validate">
                                                                    <label for="Gr_No">Gr_No</label>
                                                                </div>
                                                               
                                                 
														  <div class="input-field col s6">
                                                                    <input id="Scholarship_Name" name="Scholarship_Name" type="text" autofocus  class="validate">
                                                                    <label for="Scholarship_Name">Scholarship_Name</label>
                                                          </div>
                                                          
                                                               
                                                </div>
                                                 <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Address" name="Address" type="text" autofocus  class="validate">
                                                                    <label for="Address">Address</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Amount" name="Amount" type="text" autofocus  class="validate">
                                                                    <label for="Amount">Amount</label>
                                                                </div>
                                                            </div>
                                                               
                                                   </div>
                                                            
                                                            <input class="btn waves-effect waves-light" type="submit"  name="submit" id="submit" value="Add Studentscholarship" />
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