<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php

include('config.php');
session_start();
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$cid = $_SESSION['username'];
$sql = "select *from student where cid=$cid";
$result=$conn->query($sql);
$result=$result->fetch_assoc();
$s_id = $result['s_id'];
$d_id=$result['branch'];
$sem=$result['sem'];
//$sql="select *from attendance where s_id=$s_id";
//$result=$conn->query($sql);
$sql2 = "select *from subject where d_id=$d_id and sem=$sem";
$sub=$conn->query($sql2);
echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
echo  '<script type="text/javascript">';
echo  "google.charts.load('current', {'packages':['corechart']});";
echo   "google.charts.setOnLoadCallback(drawChart);";
echo   "function drawChart() {";
echo    "var data = google.visualization.arrayToDataTable([
          ['name', 'Per'],";

while($row=$sub->fetch_assoc()){
$su_id=$row['su_id'];	
$sql="select *from attendance where s_id=$s_id and su_id=$su_id";
//echo $sql;
$lectures=0;
$present=0;
$result=$conn->query($sql);
while($data=$result->fetch_assoc()){
$lectures = $lectures +$data['lectures'];
$present = $present + $data['status'];
}
//echo 'Subject: '.$row['name']."</br>";
//echo 'Total lecture: '.$lectures."</br>";
//echo 'Attended: '.$present."</br>";
$per=($present/$lectures)*100;
//echo 'Percentage: '.$per."%</br>";
echo "['".$row['name']."',".$present."],";

//echo "</br><hr>";
}
?>
]);
var options = {
          title: 'Attendance'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

</head>
<body>
<a href="student.php">Home<br/><br/><br/></a>
<h1>Attendance Details</h1>
<?php
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$cid = $_SESSION['username'];
$sql = "select *from student where cid=$cid";
$result=$conn->query($sql);
$result=$result->fetch_assoc();
$s_id = $result['s_id'];
$d_id=$result['branch'];
$sem=$result['sem'];
//$sql="select *from attendance where s_id=$s_id";
//$result=$conn->query($sql);
$sql2 = "select *from subject where d_id=$d_id and sem=$sem";
$sub=$conn->query($sql2);
while($row=$sub->fetch_assoc()){
$su_id=$row['su_id'];	
$sql="select *from attendance where s_id=$s_id and su_id=$su_id";
//echo $sql;
$lectures=0;
$present=0;
$result=$conn->query($sql);
while($data=$result->fetch_assoc()){
$lectures = $lectures +$data['lectures'];
$present = $present + $data['status'];
}
echo 'Subject: '.$row['name']."</br>";
echo 'Total lecture: '.$lectures."</br>";
echo 'Attended: '.$present."</br>";
$per=($present/$lectures)*100;
echo 'Percentage: '.$per."%</br>";
echo "</br><hr>";
}
?>

<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
