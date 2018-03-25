<?php
session_start();
include('config.php');
$su_id =$_POST['su_id'];		
$cid=$_SESSION['cid'];
$d_id=$_POST['d_id'];
$name=$_POST['name'];
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$sql="select t_id from teacher where cid=$cid";
$tid = $conn->query($sql);
$tid=$tid->fetch_assoc();
$t_id=$tid['t_id'];
$sql="insert into teach_stud_rel(t_id,su_id,d_id) values($t_id,$su_id,$d_id);";
$result = $conn->query($sql);
if($result){
$_SESSION['status']="Subject ".$name." added";	
}
else{
$_SESSION['status']="Subject ".$name." already exists";
}
header('location:add_subjects.php');

?>