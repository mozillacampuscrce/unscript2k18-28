<?php
include('config.php');
$t_id =$_POST['t_id'];	
$cid=$_POST['cid'];	
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$designation=$_POST['designation'];
$contact=$_POST['contact'];
$d_id=$_POST['d_id'];
$password=md5($_POST['password']);

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}

if(isset($_POST['edit'])){
echo "edit";
$sql = "update teacher set cid=$cid,name='$name',emailid='$emailid',designation='$designation',contact_no='$contact',d_id='$d_id',password='$password' where t_id=$t_id";
$result=$conn->query($sql);
}
else{
	echo "delete";
$sql = "delete from teacher where t_id=$t_id";
$result=$conn->query($sql);	
}
header('location:view_all.php');
?>
