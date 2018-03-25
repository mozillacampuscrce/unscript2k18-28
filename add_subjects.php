<?php
include('config.php');
session_start();
//include('session.php');
$status="";
if(isset($_SESSION['status'])){
$status = $_SESSION['status'];
}
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}

$sql = "select *from subject";
$result=$conn->query($sql);
	
echo "<table border='1'>
	<tr>
	<th>su_id</th>
	<th>t_id</th>
	<th>d_id</th>
	<th>sem</th>
	</tr>";
	while($row=$result->fetch_assoc()){
	echo '<form action=insert_subjects.php method="post">';	
	echo '<tr>';
	echo'<td>  <input type=text name="su_id" value ='.$row['su_id'].' readonly></td>';
	echo'<td>  <input type=text name="name" value ='.$row['name'].'></td>';
	echo'<td>  <input type=text name="d_id" value ='.$row['d_id'].'></td>';
	echo'<td>  <input type=text name="sem" value ='.$row['sem'].'></td>';
	echo'<td><input type=submit name="add" value=Add Subjects></td>';
	echo'</tr>';
	echo'</form>';
}
echo "</table>";
echo $status;
?>