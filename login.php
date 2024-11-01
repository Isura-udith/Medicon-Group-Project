<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
  
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];

if(!empty($Email)&& !empty($Password) && !is_numeric($Email)){
  $query="select * from register where Email='$Email' limit 1";
  $result=mysqli_query($con,$query);


  if($result){
    if($result && mysqli_num_rows($result)>0){

      $user_data=mysqli_fetch_assoc($result);
      if($user_data['Password']==$Password){
        header("location:index.html");
        die;
      }
    }
  }
  echo"<script type='text/javascript'>alert('Wrong user or password')</script>";
}
else{
  echo"<script type='text/javascript'>alert('Wrong user or password')</script>";

}
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="css/log.css">
</head>
<body>
    
  <div class="wrapper">
    <form method="POST" action="login.php" >
      <h2>LOGING</h2>
        <div class="input-field">
        <input type="text" name="Email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="Password" name="Password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" onclick="openPopup()" >Log In</button>
      <div class="popup" id="popup">
        <img src="images/check.png" alt="">
        <h2>Login Successful !</h2>
        <p>Welcome Mr.Isuru</p>
        <button type="button" onclick="closePopup()">OK</button>
      </div>
      <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
    <script>
      let popup = document.getElementById("popup");
      function openPopup(){
        popup.classList.add("open-popup")
      }
      function closePopup(){
        popup.classList.remove("open-popup")
      }
    </script>
</body>
</html>















