<?php
	session_start();
	include('config.php');
	$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);

	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br>";
	mysqli_select_db($conn,DB_DATABASE);
		
	$name=$_POST['name'];
	$id=$_POST['id'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
	$branch=$_POST['branch'];
	$password=md5($_POST['pass']);
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];

	$sql="insert into student(name,cid,contact_no,emailid,branch,password,dob,sem) values('$name','$id','$phone','$email','$branch','$password','$dob','$sem')" or die("Failed to Query database ".mysql_error());
	$res=mysqli_query($conn,$sql);
	if($res){
	header('location:login.php');
	}
	else{
		echo "User already exists";
	}	
?>
