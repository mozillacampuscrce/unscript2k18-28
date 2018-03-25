<?php
session_start();
include('config.php');
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$sem = $_POST['sem'];
$d_id = $_POST['branch'];
$su_id =$_POST['su_id'];
$type = $_POST['type'];
$total = $_POST['total'];

$sql="select s_id from student where sem=$sem and branch=$d_id";
echo $sql;
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	$s_id = $row['s_id'];
	if(isset($_POST[$s_id])){
		echo $s_id;
		$mo = $_POST[$s_id];
		echo $mo;
		$sql2 = "insert into marks(s_id,su_id,d_id,sem,outoff,mo,type) values($s_id,$su_id,$d_id,$sem,$total,$mo,'$type')";
		$e = $conn->query($sql2);
		if($e){
			header('location:marks.php');
		}
		else{
			echo $e."Error while inserting";
		}
	}
	}
?>