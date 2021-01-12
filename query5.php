<?php
include('connect.php');
$query = "SELECT Ag.agentID,Ag.agentName,Ad.adminName FROM agents Ag INNER JOIN admin Ad ON Ag.adminId=Ad.adminId  ORDER BY Ag.agentId";
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
									<th>Agent Id</th>
									<th>Agent Name</th>
									<th>Added by</th>
							

								</tr>
							</thead>

							<?php while ($row = mysqli_fetch_array($result)) { ?>
								<tbody>
									<tr>
										<td><?php echo $row[0] ?></td>
										<td><?php echo $row[1] ?></td>
										<td><?php echo $row[2] ?></td>

									</tr>
								</tbody>
							<?php
							}
							?>
						</table>
					</div>
</body>
</html>