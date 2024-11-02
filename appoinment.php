<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$NIC=$_POST['NIC'];
	$phoneno=$_POST['phoneno'];
	$date=$_POST['date'];
	$doctor=$_POST['doctor'];
	$reason=$_POST['reason'];
	

if(!empty($name)&& !empty($NIC)&& !is_numeric($name)){
	$query="INSERT INTO appoinment(name,NIC,phoneno,date,doctor,reason) values('$name','$NIC','$phoneno','$date','$doctor','$reason')";
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
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
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
						<input type="text" class="form-control" placeholder="NIC"  name="NIC"p>
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="phoneno"  name="phoneno">
						<div class="form-holder">	
							<input type="date" class="form-control" placeholder="date"  name="date">
							<i class="zmdi zmdi-chevron-down"></i>						
						</div>
					</div>

					
			
  <div class="form-row">			
  <select class="from-control" name="doctor">
  <option value="">Choos a Doctor</option>
    <option value="d1">DR.RIFETH HUSSAIN RASHEED</option>
    <option value="d2">DR.Nadeeja Gamlath</option>
    <option value="d3">DR.Sudath Inamaluwa</option>
	<option value="d23">DR.Janani Chamasha</option>
    <option value="d4">DR.Siththari Dissanayake </option>
	<option value="d5">DR.Rohan Kaluvithana </option>
	<option value="d6"> DR.Wajantha Herath</option>
	<option value="d7"> DR.Udayanga Silva</option>
	<option value="d8">DR.Samanmali Senevirathne </option>
	<option value="d9">DR.Kirthi Gunasekara </option>
	<option value="d10"> DR.Anjali Vijerathne</option>
	<option value="d11">DR.Chanaka Gunasingha </option>
	<option value="d12"> DR.Anoma Withanage</option>
	<option value="d13">DR.Upeksha Hathurusinghe </option>
	<option value="d14">DR.Natasha bandara </option>
	<option value="d15"> DR.Udaya Warnakula</option>
	<option value="d16">DR.Ohan Gomis </option>
	<option value="d17">DR.Gamini Jayavira </option>
	<option value="d18"> DR.Nihal Aththanayaka</option>
	<option value="d19">DR.Jagath Karunarathne </option>
	<option value="d20"> DR.Kalumini Weheragoda</option>
	<option value="d21"> DR. Sajini Rajapaksha</option>
	<option value="d22">DR. Nishantha Jayawardhana </option>
    </select><br><br>
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