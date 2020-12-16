<?php
$selected_radio = $_POST['tab1'];
$db = mysqli_connect("localhost","root","","hostel1");
if($selected_radio == 'student_login'){
	
$email = $_POST['email'];
$password = $_POST['password'];
$email = stripcslashes($email);
$password = stripcslashes($password);


$result = mysqli_query($db, "select * from login where email = '$email' and password = '$password'")
                or die("Faild to query database " .mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['email']== $email && $row['password'] == $password){
    echo "Login success!!! Welcome " .$row['email'];
} else {
    echo "Faild to login!";
}
}
if($selected_radio=='admin_login'){


$username =$_POST['username'];
$adminpassword = $_POST['adminpassword'];
$username = stripcslashes($username);
$adminpassword = stripcslashes($adminpassword);


$result1 = mysqli_query($db, "select * from adminlogin where username = '$username' and adminpassword = '$adminpassword'")
                or die("Faild to query database " .mysqli_error());
$row1 = mysqli_fetch_array($result1);
if ($row1['username']== $username && $row1['adminpassword'] == $adminpassword){
    echo "Login success!!! Welcome " .$row1['username'];
} else {
    echo "Faild to login!";
}
}
?>