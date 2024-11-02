<?php
$is_invalid = false;
if($_SERVER["REQUEST_METHOD"]==="POST"){
        $mysqli = require __DIR__ . "/database.php";


        $sql=sprintf("SELECT * FROM user WHERE Email= '%s'",
            $mysqli->real_escape_string($_POST["Email"]));

            $result = $mysqli->query($sql);
            $user = $result->fetch_assoc();

            if($user){
                if(password_verify($_POST["Password"],$user["password_hash"])){
                    
                    session_start();
                    session_regenerate_id();


                    $_SESSION["user_id"] = $user["id"];

                    header("Location: index.php");
                    exit;
                }
            }

            $is_invalid = true;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/log.css"defer >
    <title>Document</title>
</head>
<body>
    

<div class="wrapper">
    <form method="post" >
      <h2>LOGING</h2>
      <?php if($is_invalid):?>
        <em>Invalid login</em>
        <?php endif;?>    

        <div class="input-field">
        
<input type="email" name="Email" id="Email" value="<?= htmlspecialchars($_POST["Email"]??"")?>">
<label >Email</label>
      </div>
      <div class="input-field">
<input type="Password" name="Password" id="Password">
<label>Password</label>

      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" >Log In</button>
    
      <div class="register">
        <p>Don't have an account? <a href="signup.html">Register</a></p>
      </div>
    </form>
  </div>




</body>
</html>