<?php
session_start();
$db = mysqli_connect("localhost","root","","hostel1");
if($db){
	//echo "connected";
}
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}

//echo $email;
if(isset($_POST['update'])){
	
	
	$email = $_SESSION['login'];
	$EmailID = $_POST['EmailID'];
	$MobileNumber = $_POST['MobileNumber'];
	$GMobileNumber = $_POST['GMobileNumber'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$PinCode = $_POST['PinCode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];

	
$query = "UPDATE studentregistration 
			  SET EmailID='$EmailID',Address='$Address',City='$City',PinCode='$PinCode',State='$State',Country='$Country',
			  GMobileNumber='$GMobileNumber',MobileNumber='$MobileNumber'
			  WHERE EmailID = '$email'";
	$stmt = $db->prepare($query);
	if (mysqli_query($db, $query)) {
	
	echo "<script>alert('New record Updated successfully');</script>";
	header("Location:studupdate.php");
	} else {
	echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
	

	
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
         
          
        }
        table.inner{
         border: 100px
        }
        input[type=text], input[type=email], input[type=number]{
         width: 60%;
         padding: 6px 12px;
         margin: 5px 0;
         box-sizing: border-box;
        }
        input[type=submit], input[type=reset]{
         width: 60%;
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
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li class="active-link">
                        <a href="studdashboard.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                  
                    <li>
                        <a href="studupdate.php"><i class="fa fa-edit "></i>Update Profile</a>


                    <li>
                        <a href="Roomdetails.php"><i class="fa fa-qrcode "></i>Room Details</a>
                    </li>
                    <li>
                        <a href="studentdues.php"><i class="fa fa-bar-chart-o"></i>Dues/Fines</a>
                    </li>

                    <li>
                        <a href="Permissions.php"><i class="fa fa-edit "></i>Permissions </a>
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
                             <strong>Update Student Profile </strong>  !
                        </div>
                    </div>
                    </div>
                    <div class="row text-center pad-top">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <table align="center" cellpadding="10" >
					<tbody>
                      <tr>
					  <?php	
					  
$db = mysqli_connect("localhost","root","","hostel1");
$email =$_SESSION['login'];
$ret="select * from studentregistration where EmailID='$email'";
$stmt= $db->prepare($ret) ;
//$stmt->bind_param('s',$id);
$stmt->execute() ;
$res=$stmt->get_result();
//$query =mysql_query($db ,"select *from studentregistration where EmailID='$aid'");
//$row1=mysql_fetch_array($query);

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

                        <td>First Name</td>
                    
                        <td><?php echo $row->FirstName;?>
                        </td>
                     </tr>
                     <tr>
                        <td>Guardian Name</td>
                        <td><?php echo $row->GuardianName;?>
                        </td>
                        </tr>
                         <tr>
                                                    <td>Last Name</td>
                                                    <td><?php echo $row->LastName;?>
                                                    </td>
                                                    </tr>
                        <tr>
                            <td>Email ID</td>
                            <td><input type="email" name="EmailID" value = "<?php echo $row->EmailID;?> "maxlength="100" /></td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td>
                                <input type="text" name="MobileNumber" value = "<?php echo $row->MobileNumber;?>" maxlength="10" />
                                (10 Digits Allowed)
                                </td>
                                </tr>
								<tr>
                                <td>Guardian Mobile Number</td>
                                <td>
                                <input type="text" name="GMobileNumber" value = "<?php echo $row->GMobileNumber;?>" maxlength="10" />
                                (10 Digits Allowed)
                                </td>
                                </tr>
                               
                                    
                                                <tr>
                                                    <td>New Address<br /><br /><br /></td>
                                                    <td><textarea name="Address"  rows="10" cols="50"><?php echo $row->Address;?></textarea></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <td>City</td>
                                                    <td><input type="text" name="City" value = " <?php echo $row->City;?>"maxlength="50"/>
                                                    (Max 50 Characters Allowed)
                                                    </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <td>Pin Code</td>
                                                    <td><input type="Number" name="PinCode" value = "<?php echo $row->PinCode;?>" maxlength="6" />
                                                    (Max 6 Numbers Allowed)
                                                    </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <td>State</td>
                                                    <td><input type="text" name="State" value = "<?php echo $row->State;?>" maxlength="50"/>
                                                    (Max 50 Characters Allowed)
                                                    </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <td>Country</td>
                                                    <td><input type="text" name="Country" value="<?php echo $row->Country;?>" /></td>
                                                    </tr>
													<?php
$cnt=$cnt+1;
} ?>
                                                    
                                                     <tr>
                                                                    <td colspan="2" align="center">
                                                                    <input type="submit" value="UPDATE" name = "update">
                                                                    
                                                                    </td>
                                                                    </tr>

													</tbody>				
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