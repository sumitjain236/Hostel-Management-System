<?php
session_start();
$db = new mysqli("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
if(isset($_POST['submit'])){
$FirstName = $_POST['FirstName'];

$EmailID = $_POST['EmailID'];

$Password  =$_POST['Password'];
$CPassword = $_POST['CPassword'];
if($_POST['Password']== $_POST['CPassword']){
	$query = "UPDATE login SET password = '$Password' WHERE FirstName='$FirstName' && email='$EmailID'";
	$stmt = $db->prepare($query);
	if (mysqli_query($db, $query)) {
	
	echo "<script>alert('New record Updated successfully');</script>";
	header("Location:login.php");
	} else {
	echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
              
}	
}

?>
<link rel="stylesheet" href="assets\css\logcss.css">
<div class="login-wrap">

	<div class="login-html">
	<form action="" class="mt" method="post">
		
		<div class="login-form">
			
				
				<div class="group">
					<label for="user" class="label">Enter First Name</label>
					<input id="user" type="text" class="input" name = "FirstName">
				</div>
				<div class="group">
					<label for="user" class="label">Enter Email-ID</label>
					<input id="user" type="text" class="input" name = "EmailID">
				</div>
			
				<div class= "group" >
					<label for="user" class="label">New Password</label>
					<input id="user" type="text" class="input" data-type="password" name = "Password">
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm New Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="CPassword">
				</div>
			   
				<div class="group">
					<input type="submit" class="button" value="Submit" name = "submit">
				</div>
				
			</div>
	
	</form>
	</div>
</div>


