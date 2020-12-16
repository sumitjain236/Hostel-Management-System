<?php
session_start();
$db = new mysqli("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
//include('includes/config.php');
//include('include/checklogin.php');
//check_login();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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
                  <a href="login.php" style="color:#fff;">LOGOUT</a>  

                </span>
				<div>
				<span class = "logout-spn"  style = "color:#fff; "><h4> User: <?php echo $_SESSION['login']; ?></h4>
				</span>
				</div>
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
                     <h2>STUDENT DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome To I2IT HOSTEL </strong> STUDENT PAGE !
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="studentalert.php" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Alerts</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="GrievancesStud.php" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Grievances</h4>
                      </a>
                      </div>
                     
                     
                  </div>
               
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="studupdate.php" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Manage Profile </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="Permissions.php" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Permissions</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
             </div> 
              </div>   
                  <!-- /. ROW  -->    
                
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
    
   
</body>
</html>
