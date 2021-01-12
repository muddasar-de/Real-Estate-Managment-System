<?php
	include('connect.php');
	session_start();
	$UserId = $_SESSION['id'];
	$UserName = $_SESSION['name'];
	$_SESSION['type'] = "user";



	$query = "SELECT P.propertyId, U.UName,U.UPhone, R.type , P.address,  R.rent,P.description, A.agentName, A.agentPhone  
		FROM user U JOIN property P ON P.userId = U.userId LEFT OUTER JOIN agents A ON P.agentID=A.agentID 
		JOIN rentalproperty R ON R.propertyId= P.propertyId";
	$result = mysqli_query($conn, $query);

	// For Selling

	$query1 = "SELECT P.propertyId, U.UName,U.UPhone, S.type , P.address, S.area, S.Price,P.description, A.agentName, A.agentPhone  
		FROM user U JOIN property P ON P.userId = U.userId LEFT OUTER JOIN agents A ON P.agentID=A.agentID 
		JOIN sellingproperty S ON S.propertyId=P.propertyId";
	$result1 = mysqli_query($conn, $query1);

	

	$query2 = "SELECT * FROM agents";         
	$result2 = mysqli_query($conn, $query2);


	

	$query3 = "SELECT UName, UEmail FROM user WHERE userId = '$UserId'";
	$result3 = mysqli_query($conn, $query3);
	$row = mysqli_fetch_assoc($result3);
	$name = $row['UName'];
	$email = $row['UEmail'];


	if(isset($_POST['SubmitFeedback'])){
		$Feedback = mysqli_real_escape_string($conn, $_REQUEST['message']);
		$stmt = "INSERT INTO feedbacks (userId, Message) VALUES ('$UserId', '$Feedback')";

		if (mysqli_query($conn, $stmt)) {
			echo "<script>alert('Submitted');
						window.location.href='UserDashboard.php'; 
					</script>";
		} else {
			echo "<script>alert('Error! Something Went Wrong.');
			            window.location.href='UserDashboard.php'; 
			        </script>";
		}
	}





include('Logout.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome\css\all.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
</head>

<body>

	<nav class="navbar bg-light navbar-inverse ">
		<div class="container">
			<div class="navbar-header">

				<a class="navbar-brand" href="index.php"> <img class="image" src="pictures/logo7.png"> </a>
			</div>
			<button class="btn btn-primary" style="background-color: #0099cc;font-size: 16px;z-index: 999px;" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				<span><i class="fas fa-user-circle  fa-1x"></i> <?php echo $UserName ?></span>
				<span><i id="cared-down" class="fas fa-caret-down"></i></span>
			</button>
			<div class="dropdown-menu user-drop" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item " href="Wishlist.php">
			<i class="fas fa-heart text-white"></i>
					<span style="padding-right: 5px">
					My Wishlist</span>
			</a>
			<a class="dropdown-item " href="MyProperties.php">
			<i class="fas fa-building text-white"></i>
					<span style="padding-right: 5px">
					My Properties</span>
			</a>
				<a class="dropdown-item " href="ChangePassword.php">
					<i class="fas fa-user-cog fa-1x text-white"></i>
					<span style="padding-right: 5px">
					Change Password</span>
				</a>
				<a class="dropdown-item " href="?LogoutSubmit">
					<i class="fas fa-sign-out-alt fa-1x text-white"></i>
					<span style="padding-right: 5px">
					Sign out</span>
				</a>

			</div>
		</div>
	</nav>
	<div style="margin:2% 5%">
		
		<div id="prop">
		
			<h2 id="h1" class="text-center pt-3">Selling Property</h2>

			
			<a href="AddSellingProperty.php" class="btn text-white float-right px-3 " style="background-color: #0099cc">
				<i class="fas fa-plus fa-1x "></i>
				Add Selling Property
			</a><br>
			<br>

			<br>
			<div class="table-responsive">
						<table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
							<thead>
								<tr>
								<th>Property ID</th>
								<th>Owner</th>
								<th>Phone No.</th>
								<th>Property Type</th>
								<th>Location</th>
								<th>Area</th>
								<th>Worth</th>
								<th>Description</th>
								<th>Agent Name</th>
								<th>Agent Phone</th>
								<th>Add to Wishlist</th>
								
								
								</tr>
							</thead>

							<?php while ($row = mysqli_fetch_array($result1)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[0] ?></td>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>
										<td><?php echo $row[3] ?></td>
										<td><?php echo $row[4] ?></td>
										<td><?php echo $row[5] ?></td>
										<td><?php echo $row[6] ?></td>
										<td><?php echo $row[7] ?></td>
										<td><?php echo $row[8] ?></td>
										<td><?php echo $row[9] ?></td>
										<td>
											<button class="btn text-white" 
												style="background-color: transparent;border: 1px solid white" 
												onclick="document.location.href='AddToSellingFavourites.php?addPropSellId=<?php echo $row[0] ?>'"
											>
												Add
											</button>
										</td>
										
										
									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>
					<h2 id="h1" class="text-center pt-3">Rental Property</h2>
			<a href="AddRentalProperty.php" class="btn text-white float-right px-3 " style="background-color: #0099cc">
				<i class="fas fa-plus fa-1x "></i>
				Add Rental Property
			</a>
			<br>
			<br>
			<div class="table-responsive">
						<table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
							<thead>
								<tr>
								<th>Property ID</th>
								<th>Owner</th>
								<th>Phone No.</th>
								<th>Property Type</th>
								<th>Location</th>
								<th>Rent</th>
								<th>Description</th>
								<th>Agent Name</th>
								<th>Agent Phone</th>
								<th>Add to Wishlist</th>
								
								
								</tr>
							</thead>

							<?php while ($row = mysqli_fetch_array($result)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[0] ?></td>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>
										<td><?php echo $row[3] ?></td>
										<td><?php echo $row[4] ?></td>
										<td><?php echo $row[5] ?></td>
										<td><?php echo $row[6] ?></td>
										<td><?php echo $row[7] ?></td>
										<td><?php echo $row[8] ?></td>
										<td>
											<button class="btn text-white" 
												style="background-color: transparent;border: 1px solid white" 
												onclick="document.location.href='AddToRentalFavourites.php?addPropRentId=<?php echo $row[0] ?>'"
											>
												Add
											</button>
										</td>
										
										
										
									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
				</div>
				<br>
			

				<div class="table-responsive">
		
			<h2 id="h1" class="text-center pt-3">Agents</h2>
			<table class="table text-white table-hover " style="background-color:#0099cc;border:2px solid black; ">
				<thead>
					<tr>
						<th>Agent Name</th>
						<th>Phone No.</th>
						<th>Address</th>
						<th>Area Allocated</th>
					</tr>
				</thead>
				<?php while ($row = mysqli_fetch_array($result2)) { ?>
					<tbody>
						<tr>
							<td><?php echo $row[1] ?></td>
							<td><?php echo $row[2] ?></td>
							<td><?php echo $row[3] ?></td>
							<td><?php echo $row[4] ?></td>
						</tr>
					</tbody>
				<?php
				}
				?>
			</table>
		</div>
		</div>
	</div>
	<br>
	<br>

	<div class="container-fluid container3 ">
		<div class="row">
			<div class="col-md-6 pt-5 " id="review">
				<img class=" m-auto d-block" style="width:180px;" src="pictures\logo9.png">
				<h1 id="h2">TO CONTACT OUR RENTAL OR SALES TEAM.<br> PLEASE CALL OR EMAIL US:</h1>
				<p class="text-white text-center "> Tel: 123-456-7890<br><br>
					Email: info@mysite.com<br><br>
					Fax: 123-456-7890<br><br>
					500 Terry Francois Street
					San Francisco, CA 94158
				</p>
			</div>
			<div class="col-md-6" style="padding:0% 10%">
				<h1 id="h2">Your Feedback ?</h1>
				<form method="post" autocomplete="off">
					<div class="form-group">
						<label class="text-white">Your Name:</label>
						<input disabled class="form-control" placeholder="<?php echo $name ?>">

					</div>
					<div class="form-group">
						<label class="text-white">Email:</label>
						<input disabled class="form-control" placeholder="<?php echo $email ?>">

					</div>
					<div class="form-group">
						<label class="text-white">Feedback</label>
						<textarea class="form-control" name="message" required placeholder="What do you think.." pattern="[A-Za-z]{20,50}"></textarea>
					</div>

					<br>
					<button type="submit" name="SubmitFeedback" class="btn btn-light mx-auto d-block">Send</button>
					<br>

				</form>
			</div>
		</div>
	</div>
	<script src="js\jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>

</html>