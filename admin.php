
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>aK Tours & travels</title>
        
        <link rel="stylesheet" type="text/css" href="travel_abdul.css">
		
    </head>
	
    <body>
       <div id="hd">
			<div id="name">S<sup>3</sup> tours & travels<sup>&reg</sup></div>

		</div><hr>
        
		
		<!-----------------------------------------------DIVISIONS------------------------------------------------>

					<div class="admin_book_feed">
										<h3>Bookings</h3>

										<table border="1px" cellpadding="5px" style="float:left; margin-top:10px; width:100px;">
										<tr>
											<th>Sr.No.</th>								
										
										</tr>
										<tr>
											<th>Tour</th>								
										
										</tr>
										<tr>
											<th>Name</th>								
										
										</tr><tr>
											<th>Address</th>								
										
										</tr>
										<tr>
											<th>Phone</th>								
										
										</tr>
										<tr>
											<th>Email</th>								
										
										</tr><tr>
											<th>Nationality</th>								
										
										</tr>
										<tr>
											<th>Adults</th>								
										
										</tr><tr>
											<th>Child</th>								
										
										</tr>
										<tr>
											<th>From</th>								
										
										</tr><tr>
											<th>To</th>								
										
										</tr>
										
										<tr>
											<th>Passport</th>								
										
										</tr>
										<tr>
											<th>Stay</th>								
										
										</tr>
										<tr>
											<th>Days</th>								
										
										</tr>
										<tr>
											<th style="height:100px;">Remark</th>								
										
										</tr>
																			
										</table>
<?php


$username="root";
$database="s_cubedb";
$servername="localhost";
$password="";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM booking";

$result = $conn ->query($sql);

while($row = $result->fetch_assoc()){
 $id = $row['id'];
 $tour = $row['tour'];
 $name = $row['name'];
 $address = $row['address'];
 $phone = $row['phone'];
 $email = $row['email'];
 $nationality = $row['nationality'];
 $adults = $row['adults'];
 $child = $row['child'];
 $datefrom = $row['datefrom'];
 $dateto = $row['dateto'];
 $passport = $row['passport'];
 $stay = $row['stay'];
 $days = $row['days'];
 $remark = $row['remark'];
	
	



?>
		<table border="1px" cellpadding="5px" style="float:left; margin-top:10px; width:100px;">
										<tr>
											<td><?php echo $id; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $tour; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $name; ?></td>								
										
										</tr><tr>
											<td><?php echo $address; ?></td>								
										
										</tr>
										<tr>
											<td><a style="text-decoration:none; color:green;" href="tel:<?php  echo $phone; ?>"><?php echo $phone; ?></a></td>								
										
										</tr>
										<tr>
											<td><a style="text-decoration:none; color:green;" href="mailto:<?php  echo $email; ?>"><?php echo $email; ?></td>								
										
										</tr><tr>
											<td><?php echo $nationality; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $adults; ?></td>								
										
										</tr><tr>
											<td><?php echo $child; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $datefrom; ?></td>								
										
										</tr><tr>
											<td><?php echo $dateto; ?></td>								
										
										</tr>
										
										<tr>
											<td><?php echo $passport; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $stay; ?></td>								
										
										</tr>
										<tr>
											<td><?php echo $days; ?></td>								
										
										</tr>
										<tr>
											<td  style="height:100px;"><?php echo $remark; ?></td>								
										
										</tr>
																			
										</table>

		
<?php } ?>
		
		</div>
		<div class="admin_book_feed">
										<h3>Inquiries & feedbacks</h3>

										<table border="1px" cellpadding="5px" style="float:left;margin-top:10px; width:100px;">
										<tr>
											<th>Sr.No.</th>								
										
										</tr>
										
											<th>Name</th>								
										
										</tr>
										
										<tr>
											<th>Email</th>								
										
										</tr>
										<tr>
											<th>Phone</th>								
										
										</tr>
										
										<tr>
											<th  style="height:100px;">Message</th>								
										
										</tr>
																			
										</table>
						<?php


$username="root";
$database="s_cubedb";
$servername="localhost";
$password="";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM contactus	";

$result = $conn ->query($sql);

while($row = $result->fetch_assoc()){
 $id = $row['id'];
 $name = $row['name'];
 $email = $row['email'];
 $phone = $row['phone']; 
 $messaage = $row['message'];
	
	
?>
		<table border="1px" cellpadding="5px" style="float:left;margin-top:10px; width:100px;">
										<tr>
											<td><?php echo $id; ?></td>								
										
										</tr>
									
										<tr>
											<td><?php echo $name; ?></td>								
										
										
										<tr>
											<td><a style="text-decoration:none; color:green;" href="mailto:<?php  echo $email; ?>"><?php echo $email; ?></a></td>								
										
										</tr>
										<tr>
											<td><a style="text-decoration:none; color:green;" href="tel:<?php  echo $phone; ?>"><?php echo $phone; ?></td>								
										
										</tr><tr>
											<td  style="height:100px;"><?php echo $messaage; ?></td>								
										
										</tr>
																		
										
										</tr>
										
																			
										</table>

		
<?php } ?>
		
	
		
      
	  
	  
	  
	  
	  
    </body>
</html>
