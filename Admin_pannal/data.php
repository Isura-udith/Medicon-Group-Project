<?php
require_once('db.php');
$query="select * from user";
$ressult=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>User data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.button {
  background-color: #77B5FE;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  body {
    font-family: 'Inter', sans-serif;
    color: var(--gray-900);
    background-color: var(--gray-50);
    
        background: #f9f9f9;
        font-family: "Roboto", sans-serif;
        margin: 0;
        height: 100%;
        background :  url("images/op1.jpg");
        background-size:cover;
        height: 100%;
        
    
}

</style>
</head>
<body>

<div class="container">
  <h2><strong>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;    
  &emsp; &emsp; USER ADMIN PANNAL</strong></h2>
  <h5><i>Useres all Signup details.</h5></i><br>
  <table class="table">
    <thead>
      <tr class="info">
        <th>Name</th>
        <th>Email</th>
        <th>NIC</th>
        <th>PhoneNo</th>
        <th>Gender</th>
       
      </tr>
    </thead>
    <tbody>
    <tr>
        <?php

        while($row=mysqli_fetch_assoc($ressult))
        {
    ?>

     <td><?php echo $row['name']; ?> </td>
     <td><?php echo $row['email']; ?> </td>
     <td><?php echo $row['NIC']; ?> </td>
     <td><?php echo $row['phoneNo']; ?> </td>
     <td><?php echo $row['Gender']; ?> </td>
     

      </tr>
   <?php

        }

        ?>
      </tr>      
    </tbody>
  </table><br><br>

  
  <a href="admin.html" class="button">Administer</a>&emsp; &emsp;
  <a href="appdata.php" class="button">Appoinment Data </a>&emsp; &emsp;
  <a href="orderdata.php" class="button">Pharmasy Payment Data</a>&emsp; &emsp;
  <a href="paydata.php" class="button">Appoinment Payment Data </a>

</div>

</body>
</html>