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
$sql2 = "select *from marks where s_id=$s_id and d_id=$d_id and sem=$sem";
$sub=$conn->query($sql2);
//$sql="select *from suject where su_id=";
$data=$conn->query($sql);
while($row=$sub->fetch_assoc()){
echo "Subject ".$row['su_id']."</br>";
echo "Exam ".$row['type']."</br>";
echo "Marks Obtained ".$row['mo']."</br>";
echo "Outoff ".$row['outoff']."</br>";
echo "</br></br><hr>";
}
?>