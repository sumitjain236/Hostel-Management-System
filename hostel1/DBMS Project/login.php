<?php
session_start();
//$selected_radio = $_POST['tab1'];
$db = mysqli_connect("localhost","root","","hostel1");
if(isset($_POST['submits'])){
	
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($_POST['email']) && !empty($_POST['password'])){


$result = mysqli_query($db, "select * from login where email = '$email' and password = '$password'")
                or die("Faild to query database " .mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['email']== $email && $row['password'] == $password){
	$_SESSION['login']=$email;
	$_SESSION['id']=$id;
	header("Location:studdashboard.php");
	
} else {
    echo "Faild to login!";
}
}
else{
	echo "<script>alert('Enter Username/Email or password');</script>";
}
}
if(isset($_POST['submita'])){


$username =$_POST['username'];
$adminpassword = $_POST['adminpassword'];
$username = stripcslashes($username);
$adminpassword = stripcslashes($adminpassword);
if(!empty($_POST['username']) && !empty($_POST['adminpassword'])){


$result1 = mysqli_query($db, "select * from adminlogin where username = '$username' and adminpassword = '$adminpassword'")
                or die("Faild to query database " .mysqli_error());
$row1 = mysqli_fetch_array($result1);
if ($row1['username']== $username && $row1['adminpassword'] == $adminpassword){
	$_SESSION['login']=$username;
	$_SESSION['id']=$id;
    header("Location:admindashboard.html");
} else {
    echo "Faild to login!";
}
}
else{
	echo "<script>alert('Enter Username/Email or password');</script>";
	
}
}
?>

<link rel="stylesheet" href="logcss.css">
<div class="login-wrap">
	<div class="login-html">
	<form action="" class="mt" method="post">
		<input id="tab-1" type="radio" name="tab1" value = "student_login" class="sign-in" checked><label for="tab-1" class="tab">Student Login</label>
		<input id="tab-2" type="radio" name="tab1"  value = "admin_login" class="sign-up"><label for="tab-2" class="tab">Admin Login</label>
		<div class="login-form">
		
			
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Email</label>
						<input id="user" type="text" class="input" name="email">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In" name ='submits'>
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="forgotpwd.php">Forgot Password?</a>
					</div>
					<!--div class ='hr'></div-->
					<div class ='foot-lnk'>
						<a href ='http://localhost/hostel1/DBMS%20Project/createacc.php'>Create Account</a>
					</div>
				</div>
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name="username">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="adminpassword">
					</div>
				   
					<div class="group">
						<input type="submit" class="button" value="Sign In" name = 'submita'>
					</div>
					<div class="hr"></div>
					
				</div>
		
			</div>
		</form>
	</div>
</div>


