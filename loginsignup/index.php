<?php 

session_start();
if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";

    $sql ="SELECT * FROM user Where id= {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user=$result->fetch_assoc();
     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            width: 100%;
    height: auto;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75));
    background: linear-gradient(45deg,#310006,#473b9f,#061848,#011e37);
    background-repeat: no-repeat;
    background-size: 300% 300%;
    animation: color 12s ease-in-out infinite ;
            background-position: center;
            color: #000000;
        }


      
@keyframes color{
    0%{background-position: 0 50%;}
    50%{background-position: 100% 50%;}
    100%{background-position: 0 50%;}

}





        header {
            background-color: #073e63;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        
  .navbar {
    background-color: rgb(143, 191, 227);
    padding: 15px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }
  
  .logo img {
    margin-left: 20px;
    width: 80px;
  }
  
  .heading h1 {
    color: #023743;
    margin: 0;
    font-family: 'Times New Roman', Times, serif;
    font-size: 50px;
    font-weight: 600;
  }
  
  .nav-links {
    display: flex;
    margin-top: 10px;
   
  }
  
  .nav-links a {
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: double;
    margin: 0 15px;
    font-size: 16px;
    padding: 5px 10px;
    transition: color 0.3s ease;
    border-radius: 25px;
    font-weight: bold;
    border: 3px solid #015d8f;
    background: none;
    color: #073f5e;
    cursor: pointer;
  
  }
  .welcom{
    color: #fff;
  }
  
  .nav-links a:hover {
    background: rgb(28, 60, 175);
  color: #ffffff;
  border: 3px solid #ffffff;
  text-decoration: none;
  }
  
  
  
  .buttons {
    margin-top: 10px;
    margin-right: 20px;
  }
  
  .buttons button {
    font-weight: bold;
    border: 2px solid #e7f2f8;
    background: rgb(146, 203, 235);
    color: #073f5e;
    cursor: pointer;
    border-radius: 25px;
    padding: 10px 20px;
    margin-left: 15px;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  
  .buttons button:hover {
    background: rgb(6, 39, 159);
    color: #ffffff;
  }
  
  /* Media Query for Responsive Design */
  @media only screen and (max-width: 768px) {
    .navbar {
        flex-direction: column;
        text-align: center;
    }
  
    .heading {
        order: 1;
    }
  
    .nav-links {
        margin-top: 10px;
        order: 2;
    }
  .logo img {
  margin-left: 0px;
  }
    .buttons {
        margin-top: 20px;
        order: 3;
    }
  
    .heading h1 {
     
     
      font-size: 50px;
    }
  }

        .profile-container {
            background-color: rgba(255, 255, 255, 0.293);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        h1{
            font-size: 40px;
            margin-left: -50px;
        }

        .profile-name {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #000000;
        }

        .profile-info {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 30px;
        }

        .profile-button {
            background-color: #3498db;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-right: 20px;
        }

        .profile-button:hover {
            background-color: #2980b9;
        }
        .logout{
           
            color:white; 
            padding:5px;
            border-radius:25px;
            background-color: rgb(28, 27, 27);
            width:fit-content;
    
        }
        .logout a{
            text-decoration:none;
            color:white;
        }
        /* Media Query for Responsive Design */
        @media only screen and (max-width: 600px) {
            nav {
                flex-direction: column;
                align-items: center;
            }

            nav img {
                margin-bottom: 10px;
            }

            nav a {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
      
  
<div class="navbar">
        <div class="logo">
            <img src="logof.jpg.png" alt="Logo">
        </div>
        <div class="heading">
            <h1>User Account Personal Details
            </h1>
        </div>
        <div class="nav-links">
            <a href="http://localhost/MediconGroupProject/index.html">Home</a>
            <a href="phamasy.html">Emergency</a>
            <a href="http://localhost/MediconGroupProject/channalling.html">channalling</a>
        </div>
        
    </div>
    
    <div class="profile-container">
<?php if (isset($user)): ?>
    <div class="profile-name"><p class="welcome">Wellcome  <?= htmlspecialchars($user["name"])?></p></div>
    
<div class="profile-info">
<p>NAME:     <?= htmlspecialchars($user["name"])?></p>
    <p>EMAIL:    <?= htmlspecialchars($user["email"])?></p>
    <p>PHONE NO:    <?= htmlspecialchars($user["phoneNo"])?></p>
    <p>NIC NO:    <?= htmlspecialchars($user["NIC"])?></p>
    <p>Gender:    <?= htmlspecialchars($user["Gender"])?></p>
    <p class="logout"><a href="logout.php">log out</a></p>
</div>
    
    <button class="profile-button" onclick="window.print()">Get a Medical Report</button>
<?php else: ?>
    <h2>Succsessfuly Logout</h2><br>
    <p><a class="profile-button" href="login.php">Login</a>   or    <a class="logout" href="http://localhost/MediconGroupProject/index.html">Goto Home</a></p>
<?php endif; ?>

</div>
  






</body> 
</html>    