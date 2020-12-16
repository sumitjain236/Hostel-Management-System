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
     <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Room Details</title>
	
	<link rel='stylesheet' type='text/css' href='assets/css/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>


</script>
</head>
<body>
<div id="page-wrap">
     
           
          
 
       
      
     
           
                <div class="row" align ="center">
                    <div class="col-lg-10">
                     <h2>Room Details</h2>   
                    </div>
                </div>  
		<div id="identity">
		
            <div class="row">
                     
        

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="assets/img/logo1.png" alt="logo" />
            </div>
			<div class ="col-lg-12" align = "row">
			            
            <h4>P-14, Phase 1, Hinjewadi Rajiv Gandhi </h4>
			<h4>Infotech Park,
             Hinjawadi,Pune, </h4>
			 <h4> Maharashtra 411057

Phone: (555) 555-5555</h4>
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
									
									
									<tbody>
<?php	
$aid=$_SESSION['login'];

$ret="select * from studentregistration where EmailID=?";
$stmt= $db->prepare($ret) ;
$stmt->bind_param('s',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
//$query =mysql_query($db ,"select *from studentregistration where EmailID='$aid'");
//$row1=mysql_fetch_array($query);

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
            <tr>
<td colspan="4"><h4>Room Realted Info</h4></td>

</tr>
<tr>
<td><b>Room no :</b></td>
<td><?php echo $row->Room;?></td>
<td><b>Seater :</b></td>
<td><?php echo $row->Sharing;?></td>
<td><b>Fees PM :</b></td>
<td><?php echo $row->Fees_Paid;?></td>
</tr>

<tr>
<td><b>Food Status:</b></td>
<td>
<?php if($row->Mess=='No')
{
echo "Without Food";
}
else
{
echo "With Food";
}
;?>
</td>

</tr>

<tr>
<td colspan="6"><h4>Personal Info Info</h4></td>
</tr>

<tr>
<td><b>Reg No. :</b></td>
<td><?php echo $row->id;?></td>
<td><b>Full Name :</b></td>
<td><?php echo $row->FirstName;?><?php echo " ";?><?php echo $row->GuardianName;?><?php echo " ";?><?php echo $row->LastName;?></td>
<td><b>Email :</b></td>
<td><?php echo $row->EmailID;?></td>
</tr>


<tr>
<td><b>Contact No. :</b></td>
<td><?php echo $row->MobileNumber;?></td>
<td><b>Gender :</b></td>
<td><?php echo $row->Gender;?></td>
<td><b>Guardian Name :</b></td>
<td><?php echo $row->GuardianName;?></td>

</tr>
<tr>
<td><b>Guardian Contact No. :</b></td>
<td colspan="2"><?php echo $row->GMobileNumber;?></td>
<td><b>Emergancy Contact No. :</b></td>
<td colspan="2"><?php echo $row->EMobileNumber;?></td>

</tr>

<tr>
<td colspan="6"><h4>Addresses</h4></td>
</tr>
<tr>
<td><b>Correspondense Address</b></td>
<td colspan="2">
<?php echo $row->Address;?><br />
<?php echo $row->City;?>, <?php echo $row->PinCode;?><br />
<?php echo $row->State;?>,<?php echo $row->Country;?>


</td>
</tr>
<?php
$cnt=$cnt+1;
} ?>



</tbody>
</table>

<div id="terms">
		  <h5>Print </h5>
		  <p>Click the button to print the current page.</p>
          <button onclick="window.print()">Print this page</button>
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
	</div>

</body>

</html>