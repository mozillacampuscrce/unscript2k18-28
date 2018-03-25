<?php
include('config.php');
session_start();
if(isset($_SESSION['username'])){
//$username = $_SESSION['username'];
//$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//if($conn->connect_error){
//	die("Connection Failed".$conn->connect_error);
//}
//$sql = "select *from users where username='$username'";
//$result=$conn->query($sql);
//if($result->num_rows<1){
//header('location:home.php');
//}
}
else{
header('location:login.php');
}
?>
