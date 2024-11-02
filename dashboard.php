<?php

require_once('db.php');
$query="select * from register";
$ressult=mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dstyle.css">
</head>
<body>


					
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							My account
						</a>
						
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Medical reports
						</a>
						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<div class="container">

  <h2><strong>YOUR DETAILS</strong></h2><BR>

  <table class="table">
    <thead>
      <tr class="info">
        <th>Name</th>
        <th>NIC</th>
        <th>PhoneNo</th>
        <th>Email</th>
        <th>Password</th>
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
     <td><?php echo $row['NIC']; ?> </td>
     <td><?php echo $row['phoneNo']; ?> </td>
     <td><?php echo $row['Email']; ?> </td>
     <td><?php echo $row['Password']; ?> </td>
     <td><?php echo $row['Gender']; ?> </td>

      </tr>
   <?php

        }

        ?>
      </tr>      
    </tbody>
  </table>
</div>
						
					
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Your reports</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Anything...
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>