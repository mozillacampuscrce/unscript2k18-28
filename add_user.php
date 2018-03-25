<?php
session_start();
include('config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){	
$cid=$_POST['cid'];	
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$designation=$_POST['designation'];
$contact_no=$_POST['phone'];
$d_id=$_POST['branch'];
$password=md5($_POST['password']);
$_SESSION['status']="";
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$sql= "insert into teacher(cid,name,emailid,designation,contact_no,d_id,password) values($cid,'$name','$emailid','$designation','$contact_no','$d_id','$password')";
$result = $conn->query($sql);
if($result){
	$_SESSION['cid']=$cid;
	header('location:add_subjects.php');
}
}
?>



<!DOCTYPE html>
<html>
		<head>
				<title>Add New</title>
				<link rel="stylesheet" type="text/css" href="add_user_style.css"/>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>

		<body>
			

			<div class="bgimage"> <!-- This is for background image -->
				<div class="menu"> <!--This is for the main main -->
					<div class="left_menu"><!-- This is for the right menu -->
						<h2>Dashboard</h2>
					</div>

					<div class="right_menu"><!-- This is for the left menu -->
						<ul>
							<li class="add"><a href="add_user.php"><i class="fa fa-plus"> Add New</i></a></li>
							<li id="home"><a href="admin.php">Home</a></li>
							<li id="about">Login</li>
							<li id="blog">Signin</li>
							<li id="blog">Logout</li>

							
						</ul>
					</div><!-- This is for the left menu -->

				
					    <div class="main_new">
            
        				</div>
    
    	<div class="tables_center">
    		<form action="" method="POST">

				<input placeholder="Last-Name Middle-Name First-Name"  type="text" name="name"  id="move"required><br /><br />
				<input placeholder="Id"   type="text" name="cid" required><br /><br />
				<input placeholder="e-mail" type="text" name="emailid" id="pincode" required><br /><br />
				<input placeholder="Password"  type="password" name="password"   id="pass" required><br />
				<br /> <input type="text" placeholder="Contact no." name="phone"><br /><br />
                  <select name="branch">
                  <option value="1">IT</option>
                  <option value="2">Comps</option>
                  <option value="3">Mech</option>
                  </select><br /><br />
                   <select name="designation">
                  <option value="Prof">Prof</option>
                  <option value="HOD">HOD</option>
                  </select><br /><br />
				<button  type="submit" >Submit</button>

	</form>
    	</div>
					

				</div><!-- This is for the main menu -->


			</div><!-- This is for background image -->
			<div class="footer">
				
				<div class="foot">
					<a href="#">About</a> 
					<a href="#">Contact</a> 
					<a href="#">Updates</a>
					<a href="#">Carrer</a>
				</div>
				<div id="copyright">
				</div>
			</div>	
		</body>
</html>
