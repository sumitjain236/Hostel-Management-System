<?php
session_start();
$db = mysqli_connect("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
$id = $_GET['rn'];
$query = "UPDATE grievances set Status = 'C' where id = $id";
$data = mysqli_query($db,$query);
if ($data) {
	
	echo "<font color = 'green'>Record delete successfully";
	header("Location:StudGrievResponse.php");
}
else{
	
	echo "<font color = 'red'>Failed to delete Record";
	header("Location:StudGrievResponse.php");
}


?>