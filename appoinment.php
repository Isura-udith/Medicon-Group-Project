<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$NIC=$_POST['NIC'];
	$phoneno=$_POST['phoneno'];
	$time=$_POST['time'];
	$reason=$_POST['reason'];
	


if(!empty($name)&& !empty($NIC)&& !is_numeric($name)){
	$query="INSERT INTO appoinment(name,NIC,phoneno,time,reason) values('$name',$NIC,$phoneno,'$time','$reason')";
	if(mysqli_query($con,$query)){
		echo"<script type='text/javascript'>alert('Sucsuessfully reg')</script>";
		
}else{
	echo"<<script type='text/javascript'>alert('Error:". mysqli_error($con) ."')<script>";
} 
}else{
	echo"<script type='text/javascript'>alert('enter valid info')</script>";
}

}









?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Appiontment</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/bck13.jpg" alt="">
				</div>
				<form action="appoinment.php" method="POST">
					<h3>Make An Appointment</h3>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="name" name="name">
						<input type="text" class="form-control" placeholder="NIC"  name="NIC">
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="phoneno"  name="phoneno">
						<div class="form-holder">
							<select name="time" id="" class="form-control">
								<option value="" disabled selected>Choose Your Time</option>
								<option value="time 01"></option>
								<option value="time 02">2.00 pm - 5.00 pm</option>
								<option value="class 03">6.00 pm - 10.00 pm</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<textarea name="reason" id="" placeholder="Message" class="form-control" style="height: 130px;"></textarea>
					<button>Book Now
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button>
				</form>
				
			</div>
		</div>

		<script src="javasript/jquery-3.3.1.min.js"></script>
		<script src="javasript/main.js"></script>
	</body>
</html>