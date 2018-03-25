<?php
session_start();
include('config.php');
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$sem = $_POST['sem'];
$d_id = $_POST['branch'];
$su_id =$_POST['subject'];
$lectures = $_POST['lectures'];
$date = $_POST['date'];

$sql="select s_id from student where sem=$sem and branch=$d_id";
echo $sql;
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	$s_id = $row['s_id'];
	if(isset($_POST[$s_id])){
		echo $s_id;
		$present=$lectures;
	}
	else{
		$present=0;
	}	
		$sql2 = "insert into attendance(s_id,su_id,d_id,sem,lectures,date,status) values($s_id,$su_id,$d_id,$sem,$lectures,'$date',$present)";
		echo $sql2;
		$e = $conn->query($sql2);
		if($e){
			header('location:attendance.php');
		}
		else{
			echo $e."Error while inserting";
		}
	}

?>