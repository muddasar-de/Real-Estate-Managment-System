<?php
include('connect.php');
session_start();
$userId = $_SESSION['id'];

$query1 = "SELECT * FROM property where userId='$userId'";
$result1 = mysqli_query($conn, $query1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Properties</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome\css\all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>

<body>

    <div style="margin:2% 5%">
        <div class="table-responsive ">
            <h2 id="h1" class="text-center pt-3">My Property List</h2>
            <table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
                <thead>
                    <tr>
                        <th>Property ID</th>
                        <th>Agent ID</th>
                        <th>Location</th>
                        <th>City</th>
                        <th>Property Type</th>
                        <th>Description</th>


                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($result1)) { ?>
                    <tbody>
                        <tr>

                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?></td>




                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>