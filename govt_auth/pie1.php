<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
</head>
<body>
<?php
require "conn.php";
$sql1 = "SELECT sc.District as district,sum(s.Ext_Cultural) as cultural FROM students s,schools sc where s.Index_No=sc.Index_No group by sc.District ORDER BY `cultural` DESC limit 5";
$data=$conn->query($sql1);
?>
<p id="demo"></p>
<p id="dem"></p>
<p id="de"></p>
<div id="myChart"></div>
<script>var counter=[];var district=[];var counter1=[];var counter2=[]; var i=0;var j=0;var k=0;
<?php 
while($info=mysqli_fetch_array($data)){
    
	?>
	district[i]=<?php echo '"'.$info[0].'",'; ?>
	counter[i++]=<?php echo $info[1].','; ?>
	
	
	
	
	<?php }?>
	
		
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
 	  text: 'ANALYSIS OF TOP 5 DISTRICTS ACTIVELY PARTICIPATING IN CULTURAL (2017)',
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
			values : [counter[0]],
			text: district[0],
		  backgroundColor: '#50ADF5',
		},
		{
		  values: [counter[1]],
		  text: district[1],
		  backgroundColor: '#FF7965'
		},
		{
		  values: [counter[2]],
		  text: district[2],
		  backgroundColor: '#FFCB45'
		},
		{
		  text: district[3],
		  values: [counter[3]],
		  backgroundColor: '#6877e5'
		},
		{
		  text: district[4],
		  values: [counter[4]],
		  backgroundColor: '#6FB07F'
		}
	]
};
 
zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: 900, 
	width: 900 
});
	</script>
	



</body>
</html>