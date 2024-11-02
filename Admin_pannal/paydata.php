<?php
require_once('db.php');
$query="select * from pay";
$ressult=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Data</title>
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
        background :  url("https://st.depositphotos.com/1002250/1713/v/450/depositphotos_17135581-stock-illustration-blue-abstract-background.jpg");
        background-size:cover;
        height: 100%;
        
    
}
</style>
</head>
<body>

<div class="container">
  <h2><strong>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;               
     Payments Data Admin Pannal</strong></h2>
  <h5><i>All payments:</h5></i><br>
  <table class="table">
    <thead>
      <tr class="info">
        <th>NIC</th>
        <th>Card Number</th>
        <th>Expiry Date</th>

      </tr>
    </thead>
    <tbody>
    <tr>
        <?php

        while($row=mysqli_fetch_assoc($ressult))
        {
    ?>

     <td><?php echo $row['NIC']; ?> </td>
     <td><?php echo $row['cardnumber']; ?> </td>
     <td><?php echo $row['expiryDate']; ?> </td>


      </tr>
   <?php

        }

        ?>
      </tr>      
    </tbody>
  </table><br><br>
  
  <a href="admin.html" class="button">Administer</a>&emsp; &emsp;
  <a href="data.php" class="button">User Dta </a>&emsp; &emsp;
  <a href="appdata.php" class="button">Appoinment Data </a>&emsp; &emsp;
  <a href="orderdata.php" class="button">Pharmasy Payment Data</a>&emsp; &emsp;
  
</div>

</body>
</html>