<?php
session_start();
$db = new mysqli("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
if(isset($_POST['submit'])){
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$EmailID = $_POST['EmailID'];
$MobileNumber = $_POST['MobileNumber'];
$pwd  =$_POST['pwd'];
$cpwd = $_POST['cpwd'];
if($_POST['pwd']== $_POST['cpwd']){
	$result = mysqli_query($db, "select * from studentregistration where FirstName = '$FirstName' and LastName = '$LastName' and EmailID='$EmailID'")
                or die("Faild to query database " .mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['FirstName']== $FirstName && $row['LastName'] == $LastName && $row['EmailID'] == $EmailID){
		$query="INSERT INTO login(FirstName,LastName,email,MobileNumber,password)
							values('$FirstName','$LastName','$EmailID','$MobileNumber','$pwd')";
		$stmt = $db->prepare($query);
		if (mysqli_query($db, $query)) {
			header("Location:login.php");
		
		} else {
		echo "<script>alert('Invalid Username/Email or password');</script>";
		}
		
		
	} else {
		echo "Faild to login!";
	}
}
else{
	echo "check your password and confirm password";
}
}
if(isset($_POST['reset'])){
	header("Location:createacc.php");
}	

?>

!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <style>
        
       
        table{
         font-family: verdana; 
         color:#214761; 
         font-size: 16px; 
         font-style: normal;
         font-weight: bold;
          
         border-collapse: collapse; 
         
          
        }
        table.inner{
         border: 100px
        }
        input[type=text], input[type=email], input[type=number]{
         width: 250px;
         padding: 6px 12px;
         margin: 5px 0;
         box-sizing: border-box;
        }
        input[type=submit], input[type=reset]{
         width: 100px;
         padding: 8px 12px;
         margin: 5px 0;
         box-sizing: border-box;
        }
        </style>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
     <form action ="" class ='mt' method = "POST">   
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo1.png" />

                    </a>
                    
                </div>
              
              
            </div>
        </div>
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Student Account Registeration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        
                    </div>
                    </div>
                    <div class="row text-center pad-top">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <table align="center" cellpadding="10" >
                      <tr>
                        <td>First Name</td>
                    
                        <td><input type="text" name="FirstName" maxlength="50"  />
                        (Max 50 Characters Allowed)
                        </td>
                     </tr>
                     <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="LastName" maxlength="50" />
                        (Max 50 Characters Allowed)
                        </td>
                        </tr>
                        <tr>
                            <td>Email ID</td>
                            <td><input type="email" name="EmailID" maxlength="100" /></td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td>
                                <input type="text" name="MobileNumber" maxlength="10" />
                                (10 Digits Allowed)
                                </td>
                                </tr>
                                                    
                                                    <tr>
                                                    <td>Set Password</td>
                                                    <td><input type="password" name="pwd"  /></td>
                                                    </tr>

                                                     <tr>
                                                    <td>Confirm Password</td>
                                                    <td><input type="password" name="cpwd"  /></td>
                                                    </tr>
                                                     <tr>
                                                                    <td colspan="2" align="center">
                                                                    <input type="submit" value="Submit" name = 'submit'>
                                                                    <input type="reset" value="Reset" name = 'reset'>
                                                                    </td>
                                                                    </tr>
                                                     </table>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                                <div class="footer">
      
    
                                                                    <div class="row">
                                                                        <div class="col-lg-12" >
                                                                            &copy; A collective effort by Sumit Jain , Siddhant Dharmatti , Prem Vora , Rupak Ghanpathi 
                                                                        </div>
                                                                    </div>
                                                                
                                                                
                                                                  
                                                        
                                                             <!-- /. WRAPPER  -->
                                                            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                                                            <!-- JQUERY SCRIPTS -->
                                                            <script src="assets/js/jquery-1.10.2.js"></script>
                                                              <!-- BOOTSTRAP SCRIPTS -->
                                                            <script src="assets/js/bootstrap.min.js"></script>
                                                              <!-- CUSTOM SCRIPTS -->
                                                            <script src="assets/js/custom.js"></script>
                                                            
                                                         </form> 
                                                        </body>
                                                        </html>