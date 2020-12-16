<?php
$db = new mysqli("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
if(isset($_POST['update'])){
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$EmailID = $_POST['EmailID'];
	$MobileNumber = $_POST['MobileNumber'];
	$Gender = $_POST['Gender'];
	$Birthday = $_POST['Birthday'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$PinCode = $_POST['PinCode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	$Room = $_POST['Room'];
	$Sharing = $_POST['Sharing'];
	$Mess = $_POST['Mess'];
	$Fees_Paid = $_POST['Fees_Paid'];
	$GuardianName = $_POST['GuardianName'];
	$GMobileNumber = $_POST['GMobileNumber'];
	$EMobileNumber = $_POST['EMobileNumber'];
	$query = "UPDATE studentregistration 
			  SET EmailID='$EmailID',Gender='$Gender',Birthday='$Birthday',
			  Address='$Address',City='$City',PinCode='$PinCode',State='$State',Country='$Country',Room='$Room',Sharing='$Sharing',Mess='$Mess',
			  Fees_Paid='$Fees_Paid',GuardianName='$GuardianName',GMobileNumber='$GMobileNumber',EMobileNumber='$EMobileNumber'
			  WHERE FirstName='$FirstName' && LastName='$LastName' && MobileNumber='$MobileNumber'";
	$stmt = $db->prepare($query);
	if (mysqli_query($db, $query)) {
	
	echo "<script>alert('New record Updated successfully');</script>";
	header("Location:admindashboard.html");
	} else {
	echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
	
	
}
if(isset($_POST['reset'])){
	header("Location:studentupdate.php");
	
}

mysqli_close($db);

?>

<!DOCTYPE html>
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
         border: 4px solid #000000;
         border-style: dashed;
          
        }
        table.inner{
         border: 10px
        }
        input[type=text], input[type=email], input[type=number]{
         width: 40%;
         padding: 6px 12px;
         margin: 5px 0;
         box-sizing: border-box;
        }
        input[type=submit], input[type=reset]{
         width: 30%;
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
     
    <form action ="" method = "POST">    
          
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
              
                <span class="logout-spn" >
                  <a href="http://localhost/hostel1/DBMS%20Project/login.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="http://localhost/hostel1/DBMS%20Project/admindashboard.html" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>Courses </a>
                    </li>
                    <li>
                        <a href="http://localhost/hostel1/DBMS%20Project/studentregistration.php"><i class="fa fa-edit "></i>Student Registeration</a>


                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Manage Students</a>
                    </li>
                  

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Permissions </a>
                    </li>
                    
                    
                </ul>
                </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Student Room Registeration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Update Student Profile</strong>  !
                        </div>
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
                                    <td>Gender</td>
                                    <td>
                                    <input type="radio" name="Gender" value="Male" />
                                    Male
                                    <input type="radio" name="Gender" value="Female" />
                                    Female
                                    <input type="radio" name="Gender" value="Other" />
                                    Other
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth(DOB)</td>
                                        <td>
                                        <input type="date" id="Birthday" name="Birthday">
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>Address<br /><br /><br /></td>
                                                    <td><textarea name="Address" rows="10" cols="50"></textarea></td>
                                                    </tr>
                                                    <!-------------------------- City ------------------------------------->
                                                    <tr>
                                                    <td>City</td>
                                                    <td><input type="text" name="City" maxlength="50"/>
                                                    (Max 50 Characters Allowed)
                                                    </td>
                                                    </tr>
                                                    <!----- -------------------- Pin Code-------------------------------------->
                                                    <tr>
                                                    <td>Pin Code</td>
                                                    <td><input type="Number" name="PinCode" maxlength="6" />
                                                    (Max 6 Numbers Allowed)
                                                    </td>
                                                    </tr>
                                                    <!---------------------------- State ----------------------------------->
                                                    <tr>
                                                    <td>State</td>
                                                    <td><input type="text" name="State" maxlength="50"/>
                                                    (Max 50 Characters Allowed)
                                                    </td>
                                                    </tr>
                                                    <!------------------------------ Country --------------------------------->
                                                    <tr>
                                                    <td>Country</td>
                                                    <td><input type="text" name="Country"  /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Select Room</td>
                                                        <td>
                                                        <select name="Room" id="Room_No">
                                                        <option value="-1">Room No.:</option>
                                                        <option value="101">101</option>
                                                        <option value="202">202</option>
                                                        <option value="303">303</option>
                                                        <option value="404">404</option>
                                                        <option value="505">505</option>
                                                    </select>
                                                    <tr>
                                                        <td>Select Sharing</td>
                                                        <td>
                                                        <select name="Sharing" id="sharing_no">
                                                        <option value="-1"> No.:</option>
                                                        <option value="1">1 </option>
                                                        <option value="2">2 </option>
                                                        <option value="3">3 </option>
                                                    </select>
                                                    <tr>
                                                        <td>Mess Facility?</td>
                                                        <td>
                                                        <input type="radio" name="Mess" value="Yes" />
                                                        Yes
                                                        <input type="radio" name="Mess" value="N0" />
                                                        No(10,000 Rs extra anually)
                                                      </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fees Paid</td>
                                                            <td>
                                                            <input type="text" name="Fees_Paid" maxlength="10" />
                                                            </td>
                                                            </tr>
                                                        <tr>
                                                            <td>Guardian Name</td>
                                                            <td><input type="text" name="GuardianName" maxlength="50"  />
                                                            (Max 50 Characters Allowed)
                                                            </td>
                                                         </tr> 
                                                         <tr>
                                                            <td>Guardian Mobile Number</td>
                                                            <td>
                                                            <input type="text" name="GMobileNumber" maxlength="10" />
                                                            (10 Digits Allowed)
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Emergency Mobile Number</td>
                                                                <td>
                                                                <input type="text" name="EMobileNumber" maxlength="10" />
                                                                (10 Digits Allowed)
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" align="center">
                                                                    <input type="submit" name = 'update' value="Update">
                                                                    <input type="reset" name = 'reset' value="Reset">
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
                                                                            &copy; A collective effort by Sumit Jain , Siddhant Dharmatti , Prem Vohra , Rupak Ghanpathi 
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