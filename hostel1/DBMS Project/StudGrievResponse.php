<?php
session_start();
$db =mysqli_connect("localhost","root","","hostel1");
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
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
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>
</head>

<body>
     
           
    <form action ="connect.php" method ="GET">      
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
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="admindashboard.html" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>Courses </a>
                    </li>
                    <li>
                        <a href="studentregistration.php"><i class="fa fa-edit "></i>Student Registeration</a>


                    <li>
                        <a href="manstud.php"><i class="fa fa-qrcode "></i>Manage Students</a>
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
                     <h2>Grievances</h2>   
                    </div>
                </div>    
             
        <div class="panel panel-default">
							<div class="panel-heading">All Problems</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Student Name</th>
											<th>Email-id</th>
											<th>Room no  </th>
										
											<th>Problem </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>Student Name</th>
											<th>Email-id</th>
											<th>Room no  </th>
										
											<th>Problem </th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
									<?php	
//$aid=$_SESSION['id'];
$ret="select * from grievances where Status = 'NC'";
//$query = mysqli_query($db,$ret);
$stmt= $db->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
		 // $var = $row['EmailID'];
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->FirstName;?></td>
<td><?php echo $row->EmailID;?></td>

<td><?php echo $row->Room;?></td>

<td><?php echo $row->Problem;?></td>

<td>
<a href = 'complete.php?rn= "<?php echo $row->id ;?>"'>Solved</td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
									
									
								</tbody>
								</table>

								
						
					
					</div>
				</div>

			

			</div>
		</div>
	</div>
    <!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</form>
</body>

</html>