<?php
require_once('db.php');
$query="select * from payorder";
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
        background :  url("https://img.freepik.com/free-photo/vivid-blurred-colorful-wallpaper-background_58702-3798.jpg");
        background-size:cover;
        height: 100%;
        
    
}

</style>
</head>
<body>

<div class="container">
  <h2><strong>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;    
  &emsp; &emsp; Pharmasy Payment Pannal</strong></h2>
  <h5><i> All pharmasy paymant details.</h5></i><br>
  <table class="table">
    <thead>
      <tr class="info">
        <th>Payamount</th>
        <th>ItemId</th>
        <th>Cname</th>
        <th>PhoneNo</th>
        <th>Address</th>
        <th>ZIPcode</th>
        <th>cardNumber</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <?php

        while($row=mysqli_fetch_assoc($ressult))
        {
    ?>

     <td><?php echo $row['Amount']; ?> </td>
     <td><?php echo $row['itemId']; ?> </td>
     <td><?php echo $row['cname']; ?> </td>
     <td><?php echo $row['pnum']; ?> </td>
     <td><?php echo $row['address']; ?> </td>
     <td><?php echo $row['ZIP']; ?> </td>
     <td><?php echo $row['cardNumber']; ?> </td>

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
  <a href="paydata.php" class="button">Appoinment Payment Data</a>&emsp; &emsp;

</div>

</body>
</html>