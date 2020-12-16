<?php
session_start();
$db = mysqli_connect("localhost","root","","hostel1");
if($db){
	//echo "connected";
}
if(!$db){
	die("connection failed:".mysqli_connect_errno());
}
$id = $_GET['rn'];

$result = mysqli_query($db, "select * from permissions where id = $id");


               

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Leave Form</title>
	
	<link rel='stylesheet' type='text/css' href='assets/css/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">Leave Form</textarea>
		
		<div id="identity">
		
            <div class="col-lg-12">
                     
                    
            <h4>P-14, Phase 1, Hinjewadi Rajiv Gandhi </h4>
			<h4>Infotech Park,
             Hinjawadi,Pune, </h4>
			 <h4> Maharashtra 411057

Phone: (555) 555-5555</h4>

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
			</div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div class="col-lg-12">
                     
                    
            <h3>International Institute Of </h3>
			<h3>Information Technology,Pune</h3>
			</div>

			

            <table id="meta">
                
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo date("l jS \of F Y");?></textarea></td>
					
                </tr>
				
                

            </table>
			</div>
						<?php
if (mysqli_num_rows($result) > 0) {
?>
			
			<table>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

				<tr>
					
					<td><b>Name :</b> <?php echo $row["FirstName"]; ?></td>
					<td><b>Room :</b> <?php echo $row["Room"]; ?></td>
				</tr>
				<?php
$i++;
}
?>


</table>
 <?php
}
else{
    echo "No result found";
}
?>


			
		
		
		
		<table id="items">
		
									<tbody>
<?php	


$ret="select * from permissions where id=$id";
$stmt= $db->prepare($ret) ;
//$stmt->bind_param('s',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
//$query =mysql_query($db ,"select *from studentregistration where EmailID='$aid'");
//$row1=mysql_fetch_array($query);

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

<tr>
<td><b>Date Of Leave :</b></td>

<td><b>Reason Of Visiting :</b></td>

<td><b>Name of Person to Visit :</b></td>

</tr>

<tr>
<td><?php echo $row->DateofLeave;?></td>
<td><?php echo $row->Reason;?></td>
<td><?php echo $row->PName;?></td>

</tr>



<tr>
<td><b>Date Of Return :</b></td>

<td><b>Relation with Person :</b></td>

<td><b>Contact Number Of Person :</b></td>

</tr>

<tr>
<td><?php echo $row->DateofReturn;?></td>
<td><?php echo $row->Relation;?></td>
<td><?php echo $row->ContactNumber;?></td>

</tr>
<tr>
<td><b>Warden Sign :</b> WARDEN </td>
<td class = "blank"></td>
<td><b>HOD Sign :</b> HOD </td>
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
	
	</div>
	
</body>

</html>