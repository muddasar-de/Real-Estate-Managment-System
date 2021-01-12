<?php
include('connect.php');
$query = "SELECT * FROM sellingproperty";
$result = mysqli_query($conn, $query);


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