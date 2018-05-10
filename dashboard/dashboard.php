<!DOCTYPE html>
<html lang="en">
<?php
require "conn.php"; ?>
<head>
<link type="text/javascript" src="../js/chart.js" />

     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">


     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Home Page</title>
   </head>
   				<head>




<body bgcolor="white">
        <nav>
        <div class="nav-wrapper light blue">
         <!-- SIDENAV -->
		 <div>
        
     
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><img src="logo.jpeg" alt="HTML5 Icon" style="width:64px;height:64px;"></li>
			<li><a href="registerSchoolR.php">Register School Representative</a></li>
			<li><a href="..\stud_auth\login.php">School Representative Login</a></li>
			<li><a href="..\govt_auth\login.php">Government Authority Login</a></li>
		</ul>
        <a href="#"  class="brand-logo center"><font color="black"></font></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="contact_us.html">Contact Us</a></li>
			<li><a href="..\dashboard\aboutpage.php">About Us</a></li>
        </ul>
		</div>
       <!--  DC Popup Dialog Start 
<a href="javascript:popup('EMAIL ID: hackathon562@gmail.com');">Contact US</a>
<div id="dialog-overlay"></div>
<div id="dialog-box">
<div class="dialog-content">
<div id="dialog-message"></div>
<a href="#" class="button">Close</a>
</div>
</div>
<!-- DC Popup Dialog End
	   
	   
	   <ul id="slide-out" class="left side-nav">
                <li><a href="..\add_school\addSchool.html">Register School</a></li>
				<li>
                    <div class="divider"></div>
                </li>
                <li><a href="..\stud_auth\login.php">School Representative</a></li>
				<li>
                    <div class="divider"></div>
                </li>
                <li><a href="..\govt_auth\login.php">Government Authority</a></li>
                <li>
                    <div class="divider"></div>
                </li>
               
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>-->

        
        
        </div>
    </nav>
	<!--<div align=CENTER>
	<a class="waves-effect pink btn" align="CENTER" href="..\govt_auth\login.php">Government Authority Login</a>
	<a class="waves-effect pink btn" align="CENTER" href="..\stud_auth\login.php">School Representative Login</a>
	<a class="waves-effect pink btn" align="CENTER" href="..\add_school\addSchool.html">Add School</a>
	<a class="waves-effect pink btn" align="CENTER" href="..\add_school\addSchool.html">Contact Us</a>
	<a class="waves-effect pink btn" align="CENTER" href="..\add_school\addSchool.html">About Us</a>
	-->
				<div class="container">
                <div class="row">
                <div class="col s12">
                <div id="main" class="card">
                <div class="card-content">
                <span class="card-title"> 
                <h1 align=center><b>Portal for finding meritorious students in primary section</b></h1>
<?php
$sql = "SELECT District FROM schools group by District";
$data=$conn->query($sql);
?>
<p id="demo"></p>
<p id="dem"></p>
<div id="myChart"></div>
<script>var counter=[]; var i=0;</script>
<?php 
while($info=mysqli_fetch_array($data)){
    $v=$info['District'];
	$sql1 = "SELECT s.Student_Name FROM students s,schools sc where s.Index_No=sc.Index_No and s.Status='1' and sc.District='$v'";
	$dataa=$conn->query($sql1);
	 $count=mysqli_num_rows($dataa);
	?>
	<script>
	counter[i++]=<?php echo $count; ?>
	</script>
	<?php }$data=$conn->query($sql);?>
	
<script>var counter1=[]; var j=0;</script>
	<?php 
while($info=mysqli_fetch_array($data)){
    $v=$info['District'];
	$sql2 = "SELECT s.Student_Name FROM students s,schools sc where s.Index_No=sc.Index_No and s.Status='0' and sc.District='$v'";
	$dataaa=$conn->query($sql2);
	 $count1=mysqli_num_rows($dataaa);
	?>
	<script>
	counter1[j++]=<?php echo $count1; ?>
	</script>
	<?php }?>

<script>
var myData=[<?php 
$data=$conn->query($sql);
while($info=mysqli_fetch_array($data))
    echo '"'.$info['District'].'",';
?>];
zingchart.render({
    id:"myChart",
    width:800,
    height:900,
    data:{
    "type":"bar",
    "title":{
        "text":"Cumilative Pass(Blue)/Fail(Red) Graph of Past Years until 2017"
    },
	"offset":"-40",
    "scale-x":{
        "labels":myData,
		
    },
    "series":[
        {  "values":counter },
			{"values":counter1}
]
}
});


</script>
                </span>
                </div>
                </div>
                </div>
                </div>
				</div>
				
            
            
            

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>