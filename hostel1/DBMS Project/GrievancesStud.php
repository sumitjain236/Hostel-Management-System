<?php
session_start();
$db = new mysqli("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}


if(isset($_POST['submit'])){
	//header("Location:trial.html");
	
	
	$FirstName = $_POST['FirstName'];
	$EmailID = $_SESSION['login'];
	$Room = $_POST['Room'];
	$Problem = $_POST['Problem'];
	
	$query="INSERT INTO grievances(FirstName,EmailID,Room,Problem,Status,Flag)
							values('$FirstName','$EmailID','$Room','$Problem','NC','NS')";

	$stmt = $db->prepare($query);
	if (mysqli_query($db, $query)) {
	
	echo "<script>alert('Problem recorded');</script>";
	header("Location:GrievancesStud.php");
	} else {
	echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
	

	
}

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
	 width:
         color:#214761; 
         font-size: 16px; 
         font-style: normal;
         font-weight: bold;
          11:51 PM 20-Sep-20
        }
        table.inner{
         border: 10px
        }
        input[type=text], input[type=email], input[type=number]{
         width: 60%;
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
     
           
    <form action = "" method = "POST">  
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
                        <a href="ui.html"><i class="fa fa-table "></i>Book Hostel </a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Update Profile</a>


                    <li>
                        <a href="Roomdetails.php"><i class="fa fa-qrcode "></i>Room Details</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Dues/Fines</a>
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
                     <h2>Registration</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Fill All Info </strong> 
                        </div>
                       
                    </div>
                    </div>
		    <br> 
		    <br>
		    <div class="row"> 
		    <div class="row text-center pad-top">
                        <div class="col-lg-10 col-md-2 col-sm-2 col-xs-6">
			<p>
			<table style="margin-left:2cm;" cellpadding="10" width=750>
                      <tr>
                        <td>First Name:</td>
                    
                        <td><input type="text" name="FirstName"   />
                        
                        </td>
                     </tr>
                     <tr>
                        <td>Room Number:</td>
                        <td><input type="text" name="Room" maxlength="50" />
              
                        </td>
                        </tr>
                    <tr>
                        				<td>Problems/Grievances-<br /><br /><br /></td>

                    					<td><textarea name="Problem" rows="10" cols="50"></textarea></td>
                        			
                        				</td>
                     				</tr>
                                
						</table>
						<br>
						<br>
										<table style="margin-left:8cm;" cellpadding="20" width=500>
										<tr>
                                                                    			<td colspan="4" align="center" size="10">
                                                                    			<input type="submit" name = "submit" value="Register">
											<input type="reset" name = "reset" value="Cancel">
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
		
								