<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
</head>
<body>
<?php
require "conn.php";
echo $sql = "SELECT * FROM `student` where Index_No='GJ01CU'";
$data=$conn->query($sql);

?>
<p id="demo"></p>
<p id="dem"></p>
<div id='myChart'></div>
<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['Percentage'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];

myData.toString();
    document.getElementById("demo").innerHTML = myData;
</script>

<script>
<?php
$data=$conn->query($sql);
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['Student_Name'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
myData.toString();
    document.getElementById("dem").innerHTML = myLabels;
zingchart.render({
    id:"myChart",
    width:1000,
    height:450,
    data:{
    "type":"line",
    "title":{
        "text":"Data Pulled from MySQL Database"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});

</script>
</body>
</html>