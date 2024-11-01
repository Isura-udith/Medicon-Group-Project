<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$NIC=$_POST['NIC'];
	$phoneNo=$_POST['phoneNo'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Gender=$_POST['Gender'];
	


if(!empty($Email)&& !empty($Password)&& !is_numeric($Email)){
	$query="INSERT INTO register(name,NIC,phoneNo,Email,Password,Gender) values('$name',$NIC,$phoneNo,'$Email','$Password','$Gender')";
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



<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/sign.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body background="images/sign1.png" >
	<img class="logo" src="images/logof.jpg.png">
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on" action="signup.php">
        <!--First name-->
		
		<p class="signl">Signup</p>
		<div class="box">
			<label for="Name" class="fl fontLabel"> Full Name: </label>
				  <div class="new iconBox">
			  <i class="fa fa-user" aria-hidden="true"></i>
			</div>
				  <div class="fr">
						  <input type="text" name="name" placeholder="First Name"
				class="textBox" autofocus="on" required>
				  </div>
				  <div class="clr"></div>
			  </div>
			  <!--First name-->
		<!--NIC Number-->
	 <div class="box">
		<label for="secondName" class="fl fontLabel">NIC Number  </label>
			  <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
			  <div class="fr">
					  <input type="text" name="NIC"
			placeholder="National ID No" class="textBox">
			  </div>
			  <div class="clr"></div>
		  </div>
		  <!--NIC Number-->


		  <!---Phone No.------>
		  <div class="box">
		<label for="phone" class="fl fontLabel"> Phone No.: </label>
			  <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
			  <div class="fr">
					  <input type="text" name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
			  </div>
			  <div class="clr"></div>
		  </div>
		  <!---Phone No.---->


		  <!---Email ID---->
		  <div class="box">
		<label for="email" class="fl fontLabel"> Email: </label>
			  <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
			  <div class="fr">
					  <input type="email" name="Email" placeholder="Email Id" class="textBox">
			  </div>
			  <div class="clr"></div>
		  </div>
		  <!--Email ID----->


		  <!---Password------>
		  <div class="box">
		<label for="password" class="fl fontLabel"> Password </label>
			  <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
			  <div class="fr">
					  <input type="Password" name="Password" placeholder="Password" class="textBox">
			  </div>
			  <div class="clr"></div>
		  </div>
		  <!---Password---->
	  

		  <!---Gender----->
		  <div class="box radio">
		<label for="gender" class="fl fontLabel"> Gender: </label>
				  <input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
				  <input type="radio" name="Gender" value="Female" required> Female
		  </div>
		  <!---Gender--->


		  <!--Terms and Conditions------>
		  <div class="box terms">
				  <input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
		  </div>
		  <!--Terms and Conditions------>



		  <!---Submit Button------>
		  <div class="box" style="background: #2d3e3f">
		  <a href="channalling.html">
				  <input type="Submit" name="Submit" class="submit" value="Signup"></a>
		  </div>
		  <!---Submit Button----->
	</form>
	<p class="already">I Already Have an Account? Login</p>
</div>
<!--Body of Form ends--->
  </body>
</html>