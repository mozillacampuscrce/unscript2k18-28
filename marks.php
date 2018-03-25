<!DOCTYPE html>
<html>
		<head>
				<title>Teacher Dashboard</title>
				<link rel="stylesheet" type="text/css" href="marks_style.css"/>
		</head>

		<body>
			

			<div class="bgimage"> <!-- This is for background image -->
				<div class="menu"> <!--This is for the main main -->
					<div class="left_menu"><!-- This is for the right menu -->
						<h2>Dashboard</h2>
					</div>

					<div class="right_menu"><!-- This is for the left menu -->
						<ul>
							<li id="home"><a href="teacher.php">Home</a></li>
							<li id="about">Login</li>
							<li id="blog">Signin</li>
							<li id="blog">Logout</li>

							
						</ul>
					</div><!-- This is for the left menu -->
					<div class="con">
				<form action="" method="post">
				<select name="branch">
                  <option value="1">IT</option>
                  <option value="2">Comps</option>
                  <option value="3">Mech</option>
                  </select>

					<select name="sem">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  </select>
                   <button type="submit"  class="loadbtn">Load</button>


					                 
</form>
</div>

<?php
session_start();
include('config.php');
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=="POST"){
$sem = $_POST['sem'];
$d_id= $_POST['branch'];

$sql="select *from subject where sem=$sem";
$result = $conn->query($sql);

echo "<form action='marks_insert.php' method=post>";
echo "<select name='su_id'>";
while($row=$result->fetch_assoc()){
echo '<option value='.$row['su_id'].'>'.$row['name'].'</option>';
}
echo "</select>";

echo "<br /><br /><input type='text' name='total' placeholder='Total Marks'><br /><br />";
echo "<input type='text' name='type' placeholder='Exam'>";
$sql="select *from student where sem=$sem and branch=$d_id";
$result = $conn->query($sql);
echo "<table border='1'>
	<tr>
	<th>Sr.No</th>
	<th>Name</th>
	</tr>";
	while($row=$result->fetch_assoc()){	
	echo '<tr>';
	echo'<td>  <input type=text name=s_id value ='.$row['s_id'].' readonly></td>';
	echo'<td>  <input type=text name=name value ='.$row['name'].' readonly></td><br /><br /><br />';
	echo'<td>  <input type=text name='.$row['s_id'].' placeholder ="Marks Obtained" ></td><br /><br />';
	echo'</tr>';
	
}
echo'<td><input type=submit name="Submit"></td>';
echo "</table><br /><br />";
echo "<input type=hidden name='sem' value='$sem' readonly>";
echo "<input type=hidden name='branch' value='$d_id' readonly>";
echo'</form>';
}
?>



					</div><!-- This is for the main menu -->


			</div><!-- This is for background image -->
			<div class="footer">
											<li id="service">About</li>
							<li id="works">Contact</li>
				<div id="copyright">
				</div>
			</div>	
		</body>
</html>