

<!DOCTYPE html>
<html>
		<head>
				<title>Add New</title>
				<link rel="stylesheet" type="text/css" href="view_all_style.css"/>
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

				
					    <div id="main_new" class="menu">
            				


            				<?php
include('config.php');
//include('session.php');

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}
$sql = "select *from teacher";
$result=$conn->query($sql);

echo "<table border='2'>
	<tr>
	<th>Sr.No</th>
	<th>ID No</th>
	<th>Name</th>
	<th>Email ID</th>
	<th>Designation</th>
	<th>Subject ID</th>
	<th>Deapartment ID</th>
	<th>Password</th>
	</tr>";
	while($row=$result->fetch_assoc()){
	echo '<form action=edit.php method="post">';	
	echo '<tr>';
	echo'<td>  <input type=text name="t_id" value ='.$row['t_id'].' readonly></td>';
	echo'<td>  <input type=text name="cid" value ='.$row['cid'].'></td>';
	echo"<td>  <input type=text name='name' value ='".$row['name']."'></td>";
	echo'<td>  <input type=text name="emailid" value ='.$row['emailid'].'></td>';
	echo'<td>  <input type=text name="designation" value ='.$row['designation'].'></td>';
	echo'<td>  <input type=text name="contact" value ='.$row['contact_no'].'></td>';
	echo'<td>  <input type=text name="d_id" value ='.$row['d_id'].'></td>';
	echo'<td>  <input type=text name="password" value ='.$row['password'].'></td>';
	echo'<td><input type=submit name="edit" value=Edit></td>';
	echo'<td><input type=submit name="delete" value=Delete></td>';
	echo'</tr>';
	echo'</form>';
}
echo "</table>";
?>


                
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

							
