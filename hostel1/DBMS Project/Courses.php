<?php
session_start();
$db =mysqli_connect("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
//include('include/checklogin.php');
//check_login();
if(isset($_POST['submit'])){
	
	
	
	$Course = $_POST['Course'];
	$query="INSERT INTO coursesinfo(Course)
							values('$Course')";
	$stmt = $db->prepare($query);
	if (mysqli_query($db, $query)) {
	
	echo "<script>alert('New record created successfully');</script>";
	header("Location:Courses.php");
	} else {
	echo "Error: " . $query . "<br>" . mysqli_error($db);
	}
	$select_stmt_type->close();
	exit;
	

	
}
							
							


//mysqli_close($db);
	



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
     
    <form action ="" method ="POST">       
          
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
                        <a href="http://localhost/hostel1/DBMS%20Project/Courses.php"><i class="fa fa-table "></i>Courses </a>
                    </li>
                    <li>
                        <a href="http://localhost/hostel1/DBMS%20Project/studentregistration.php"><i class="fa fa-edit "></i>Student Registeration</a>


                    <li>
                        <a href="http://localhost/hostel1/DBMS%20Project/manstud.php"><i class="fa fa-qrcode "></i>Manage Students</a>
                    </li>
                  

                    <li>
                        <a href="adminpermission.php"><i class="fa fa-edit "></i>Permissions </a>
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
			<div class="row">
                    <div class="col-lg-12">
                     <h3>View Courses</h3>   
                    </div>
             </div> 
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="margin-left:2cm;">
                      
					  <tr>
                        
                    
                        	<thead>
										<tr>
											<th>Sno.</th>
											<th>Courses</th>
											<th>Action</th>

										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>Courses</th>
											<th>Action</th>
										
										</tr>
									</tfoot>
									 </tr>
									<tbody>
																		<?php	

$ret="select * from coursesinfo";
$stmt= $db->prepare($ret) ;
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
		 
	  	?>
<tr><td><?php echo $cnt;;?></td>

<td><?php echo $row->Course;?></td>

<td>
<a href = 'deletecourse.php?rn= "<?php echo $row->id; ?>"'>Delete</td>
										</tr>
									<?php
$cnt=$cnt+1;

									 } ?>
											
									
									
								</tbody>
                        
                        
                    
                   </table>
						<br>
						<br>
					<table style="margin-left:2cm;" cellpadding="0" width=500>
					<tr>
                        <td>Add Course:</td>
                        <td><input type="text" name="Course" maxlength="50" />
              
                        </td>
                        </tr>
										<tr>
                                                                    			<td colspan="4" align="center" size="10">
                                                                    			<input type="submit" value="Submit" name="submit">
											<input type="reset" value="Cancel" name = "cancle">
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
		
								