<head>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</head>
<?php
include "conn.php";	
session_start();
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



<div id="myChart"></div>
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
 	  text: 'Ratio of Males and Females studying in Primary Schools in <?php echo $District?>',
 	  align: "left",
 	  offsetX: 10,
 	  fontFamily: "Open Sans",
 	  fontSize: 25
 	},
 	subtitle: {
 	  offsetX: 10,
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
	height: 500, 
	width: 1000
});
	</script>
