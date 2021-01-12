<?php
include('connect.php');
$query = "SELECT * from user U LEFT JOIN property P ON P.userId=U.userId ORDER BY U.userId";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome\css\all.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>


<div class="table-responsive">
						<table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
							<thead>
								<tr>
									<th>User Id</th>
									<th>User Name</th>
									<th>User Phone</th>
									<th>Property Id</th>
									<th>Agent ID</th>
									<th>Address</th>
									<th>City</th>
									<th>type</th>
									<th>Description</th>
									
							

								</tr>
							</thead>

							<?php while ($row = mysqli_fetch_array($result)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[0] ?></td>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>
										<td><?php echo $row[5] ?></td>
										<td><?php echo $row[7] ?></td>
										<td><?php echo $row[8] ?></td>
										<td><?php echo $row[9] ?></td>
										<td><?php echo $row[10] ?></td>
										<td><?php echo $row[11] ?></td>
									

									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>
</body>
</html>