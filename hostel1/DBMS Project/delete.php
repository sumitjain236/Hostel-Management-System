<?php
session_start();
$db = mysqli_connect("localhost","root","","hostel1");
if($db){
	//echo "connected";
}
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
$emailid = $_GET['rn'];
//echo "$emailid";
$query = "DELETE FROM studentregistration WHERE EmailID= $emailid";
$data = mysqli_query($db,$query);
if ($data) {
	
	echo "<font color = 'green'>Record delete successfully";
	header("Location:StudGrievResponse.php");
}
else{
	
	echo "<font color = 'red'>Failed to delete Record";
	//header("Location:admindashboard.html");
}


?>