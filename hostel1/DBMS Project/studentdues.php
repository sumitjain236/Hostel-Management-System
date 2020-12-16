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
                     <h2>Fine Details</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
        <div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						
						<div class="panel panel-default">
							
							<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Fines</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>Fines</th>
											
											
										
										</tr>
									</tfoot>
									<tbody>
									<?php
									
$aid=$_SESSION['login'];
$ret="select * from studentregistration where EmailID = '$aid'";
$stmt= $db->prepare($ret) ;
$stmt->execute() ;
$res=$stmt->get_result();
$row1 = $res->fetch_object();
$name = $row1->FirstName;
$room = $row1 ->Room;
$ret1 = "select *from fine where FirstName = '$name' and Room ='$room' and Status = 'Unpaid'";
$stmt1 = $db->prepare($ret1);
$stmt1->execute();
$res1=$stmt1->get_result(); 
$cnt=1;
while($row=$res1->fetch_object())
	  {

	  	?>
<tr><td><?php echo $cnt;;?></td>
<td>Your Have Fine of Rs <b><?php echo $row->Fine;?>,</b><b>Please Pay this Fine to the admin office as early as possible.</b></td>

										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
									
									
								</tbody>
								

									
									

</table>




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

</body>

</html>