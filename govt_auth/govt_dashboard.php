<!DOCTYPE html>
<?php
include "conn.php";	
Session_Start();
?>

<html lang="en">
<head>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title></title>
   </head>
<body>


     <?php include("header.php");?>
	 <div>
		
	<!--<p><a href="filterpie.php">View District Wise Male & Female Ratio</a></p>-->
	
	

     
        <div class="container" style="border:none;"> 
                
                <div class="row">
                    <div class="" style="margin-left:-18%;">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <p><b>View District Wise Male & Female Ratio</b></p>
                                        <div>
            
		 		 <form method="GET" action="">


<div class="input-field col s3">
    <select name="District" id="District" > 
      <option value="" disabled selected>Select District</option>
      <option value="Ahmedabad">AHMEDABAD</option>
      <option value="Surat">SURAT</option>
      <option value="Vadodara">VADODRA</option>
      <option value="Kheda">KHEDA</option>
     
    </select>
    
  </div> 
  <input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Apply Filter" />
			
			</form>
			<?php
			if(isset($_GET['submit'])){
			$_SESSION['District'] = $_GET['District'];
			}
?>
<div id="myChart" style="margin-top:5%;"></div>
</div>
</div>    
</span>
</div>


</div>
</div>
</div> 
  <?php
include "conn.php";	

if(isset($_GET['submit']))
	{
		$District = $_GET['District'];
	
		$sql1 = "SELECT count(s.gender) FROM students s,schools sc where s.Index_No=sc.Index_No and s.gender=1 and sc.District='$District' order by s.gender";
		$data=$conn->query($sql1);
		$sql2 = "SELECT count(s.gender) FROM students s,schools sc where s.Index_No=sc.Index_No and s.gender=0 and sc.District='$District' order by s.gender";
		$dataa=$conn->query($sql2);

		$info=mysqli_fetch_array($data);
		$inf=mysqli_fetch_array($dataa);



	}
?>




<script>
	
	
		var myConfig = {
 	type: "pie", 
 	backgroundColor: "#2B313B",
 	plot: {
 	  borderColor: "#2B313B",
 	  borderWidth: 5,
 	  // slice: 90,
 	  valueBox: {
 	    placement: 'out',
 	    text: '%t\n%npv%',
 	    fontFamily: "Open Sans"
 	  },
 	  tooltip:{
 	    fontSize: '18',
 	    fontFamily: "Open Sans",
 	    padding: "5 10",
 	    text: "%npv%"
 	  },
 	  animation:{
      effect: 2, 
      method: 5,
      speed: 500,
      sequence: 1
    }
 	},
 	source: {
 	  text: 'gs.statcounter.com',
 	  fontColor: "#8e99a9",
 	  fontFamily: "Open Sans"
 	},
 	title: {
 	  fontColor: "#fff",
	  align:"CENTER",
 	  text: 'Ratio of Males and Females of \n Primary Schools in \n<?php echo $District?> ',
 	  align: "left",
 	  offsetX: 15,
 	  fontFamily: "Open Sans",
 	  fontSize: 25
 	},
 	subtitle: {
 	  offsetX: 20,
 	  offsetY: 10,
 	  fontColor: "#8e99a9",
 	  fontFamily: "Open Sans",
 	  fontSize: "16",
 	  align: "left"
 	},
 	plotarea: {
 	  margin: "20 0 0 0"  
 	},
	series : [
		{
			values : [<?php echo $info[0] ?>],
			text: "Male",
		  backgroundColor: '#50ADF5',
		},
		{
		  values: [<?php echo $inf[0] ?>],
		  text: "Female",
		  
		  backgroundColor: '#FF7965'
		}
	]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: 300, 
	width: 450
});
	</script>
           

            

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
	
	
	
	<p><a href="pie.php">View Top 5 District in Sports and their percentage of contribution</a></p>

   <p> <a href="pie1.php">View Top 5 District in Cultural and their percentage of contribution</a></p>
        
	<p><a href="pie2.php">View Top 5 District in External Academics and their percentage of contribution</a></p>
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