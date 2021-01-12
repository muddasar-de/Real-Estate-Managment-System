<?php
if (isset($_GET['a'])) {
	$val = $_GET['a'];
} else {
	$val = 0;
}

switch ($val) {
	case 0:
		break;
	case 1:
		include('query1.php');
		break;
	case 2:
		include('query2.php');
		break;
	case 3:
		include('query3.php');
		break;
	case 4:
		include('query4.php');
		break;
	case 5:
		include('query5.php');
		break;
	case 6:
		include('query6.php');
		break;
}
?>

<?php

include('connect.php');
session_start();
$adminId = $_SESSION['id'];
$adminName = $_SESSION['name'];
$_SESSION['type'] = "admin";

$query1 = "SELECT P.propertyId, U.UName,U.UPhone, S.type , P.address, S.area, S.Price,P.description, A.agentName, A.agentPhone  
	FROM user U JOIN property P ON P.userId = U.userId  JOIN agents A ON P.agentID=A.agentID 
	JOIN sellingproperty S ON S.propertyId=P.propertyId";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT P.propertyId, U.UName,U.UPhone, R.type , P.address,  R.rent,P.description, A.agentName, A.agentPhone  
	FROM user U JOIN property P ON P.userId = U.userId  JOIN agents A ON P.agentID=A.agentID 
	JOIN rentalproperty R ON R.propertyId=P.propertyId";
$result2 = mysqli_query($conn, $query2);


$query3 = "SELECT * FROM agents";
$result3 = mysqli_query($conn, $query3);

$query4 = "SELECT F.Feedback_Id,U.UName, U.UEmail,F.Message FROM Feedbacks F JOIN user U ON F.userId=U.userId";
$result4 = mysqli_query($conn, $query4);

include('Logout.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shaheen Properties</title>
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
				<span><i class="fas fa-user-circle  fa-1x"></i> <?php echo $adminName ?></span>
				<span><i id="cared-down" class="fas fa-caret-down"></i></span>
			</button>
			<div class="dropdown-menu user-drop" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item " href="ChangePassword.php">
					<i class="fas fa-user-cog fa-1x text-white"></i>
					<span style="padding-left: 5px">
					Change Password</span>
				</a>
				<a class="dropdown-item " href="?LogoutSubmit">
					<i class="fas fa-sign-out-alt fa-1x text-white"></i>
					<span style="padding-left: 5px;">
					Sign out</span>
				</a>

			</div>
		</div>
	</nav>

	<div class="container-fluid ">
		<div class="row ">
			<div class="col-sm-12 text-left " id="dash" style="background-color: #f0f5f5;padding:0% 8%;">
				<h2 id="h1" class="text-center pt-3">Admin Dashboard</h2>
				<h2 id="h2" class="text-center text-dark pt-3">Click to get information ... </h2>
				<div class="row border-collapse">
					<div class="col-sm-2" style="background-color:#66d9ff ; border: 1px solid white;border-radius:10px;height: 150px;justify-content:center">
						<a href="dashboard.php?a=1" style="text-decoration:none">
							<h1 id="h2">Users who<br> added properties </h1>
						</a>
					</div>
					<div class="col-sm-2" style="background-color:  #33ccff ; border: 1px solid white;border-radius:10px; height: 150px; ">
						<a href="dashboard.php?a=2" style="text-decoration:none">
							<h1 id="h2">Property with <br> Rent <= 15000</h1>
						</a>
					</div>
					<div class="col-sm-2" style=" background-color: #66d9ff ;border: 1px solid white;border-radius:10px;height: 150px;">
						<a href="dashboard.php?a=3" style="text-decoration:none">
							<h1 id="h2">Property with <br> agent Badar</h1>
						</a>
					</div>
					<div class="col-sm-2" style=" background-color: #33ccff
 					;border: 1px solid white;border-radius:10px;height: 150px; ">
						<a href="dashboard.php?a=4" style="text-decoration:none">
							<h1 id="h2">Users who <br>gave Feedbacks</h1>
						</a>
					</div>

					<div class="col-sm-2" style=" background-color: #33ccff
 					;border: 1px solid white;border-radius:10px;height: 150px; ">
						<a href="dashboard.php?a=5" style="text-decoration:none">
							<h1 id="h2">Agents added <br> by admin</h1>
						</a>
					</div>
					<div class="col-sm-2" style=" background-color: #33ccff
 					;border: 1px solid white;border-radius:10px;height: 150px; ">
						<a href="dashboard.php?a=6" style="text-decoration:none">
							<h1 id="h2">Rental Properties  <br> in Islamabad</h1>
						</a>
					</div>
				</div>



				<!-- Properties Section -->
				<div id="prop">
					<h2 id="h1" class="text-center pt-3">Property</h2>

					<!-- Selling Properties Section -->
					<h2 class="text-center pt-3">Selling Property</h2>
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
									<th>Remove</th>

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
											<button class="btn text-white" style="background-color: transparent;border: 1px solid white" onclick="document.location.href='RemoveSellingProperty.php?forSellingPropRemove=<?php echo $row[0] ?>'">

												X
											</button>
										</td>

									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>

					<!-- Rental Properties Section -->
					<h2 class="text-center pt-3">Rental Property</h2>
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
									<th>Remove</th>

								</tr>
							</thead>

							<?php while ($row = mysqli_fetch_array($result2)) { ?>
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
											<button class="btn text-white" style="background-color: transparent;border: 1px solid white" onclick="document.location.href='RemoveRentalProperty.php?forRentalPropRemove=<?php echo $row[0] ?>'">

												X
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
					<br>

				</div>
				<div id="agent">
					<h2 id="h1" class="text-center pt-3">Agents</h2>
					<button type="submit" class="btn text-white float-right px-3 " style="background-color: #0099cc" onclick="document.location.href='AddAgent.php'">
						<i class="fas fa-plus fa-1x "></i>
						Add Agents
					</button>


					<br>
					<br>
					<div class="table-responsive">
						<table class="table text-white table-hover " style="background-color:#0099cc;border:2px solid black; ">
							<thead>
								<tr>
									<th>Agent Name</th>
									<th>Phone No.</th>
									<th>Address</th>
									<th>Area Allocated</th>
									
									<th>Edit</th>
									<th>Remove</th>
								</tr>
							</thead>
							<?php while ($row = mysqli_fetch_array($result3)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>
										<td><?php echo $row[3] ?></td>
										<td><?php echo $row[4] ?></td>
										
										<td>
											<button class="btn text-white" style="background-color: transparent;border: 1px solid white" onclick="document.location.href='EditAgent.php?id=<?php echo $row['agentID'] ?>'">
												Edit
											</button>
										</td>
										<td>
											<button class="btn text-white" style="background-color: transparent;border: 1px solid white" onclick="document.location.href='RemoveAgent.php?forAgentRemove=<?php echo $row['agentID'] ?>'">

												Remove
											</button>
										</td>

									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>
				</div>

				<div id="agent">
					<h2 id="h1" class="text-center pt-3">Feedbacks</h2>


					<br>
					<br>
					<div class="table-responsive">
						<table class="table text-white table-hover " style="background-color:#0099cc;border:2px solid black; ">
							<thead>
								<tr>
									<th>Feedback Id</th>
									<th>User Name</th>
									<th>Email</th>
									<th>Message</th>
									<th>Remove</th>

								</tr>
							</thead>
							<?php while ($row = mysqli_fetch_array($result4)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[0] ?></td>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>
										<td><?php echo $row[3] ?></td>


										<td>
											<button class="btn text-white" style="background-color: transparent;border: 1px solid white" onclick="document.location.href='RemoveFeedback.php?forFeedbackRemove=<?php echo $row['Feedback_Id'] ?>'">

												X
										</td>

									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>
				</div>

				<br>
				<br>

			</div>
		</div>
	</div>
	<script src="js\jquery.min.js"></script>
	<script src="js\bootstrap.min.js"></script>
</body>

</html>