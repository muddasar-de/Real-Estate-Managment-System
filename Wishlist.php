<?php
include('connect.php');
session_start();

$userId = $_SESSION['id'];
$query = "SELECT F.favId,U.UName,U.UPhone, R.type , P.address,  R.rent,P.description, A.agentName, A.agentPhone  
FROM favourites F JOIN property P ON F.propertyId=P.propertyId JOIN user U ON F.ownerId = U.userId  JOIN agents A ON F.agentId=A.agentID JOIN rentalproperty R ON R.propertyId=P.propertyId";
$result = mysqli_query($conn, $query);

$query1 = "SELECT F.favId,U.UName,U.UPhone, S.type , P.address,  S.Price,P.description, A.agentName, A.agentPhone  
FROM favourites F JOIN property P ON F.propertyId=P.propertyId JOIN user U ON F.ownerId = U.userId  JOIN agents A ON F.agentId=A.agentID JOIN sellingproperty S ON S.propertyId=P.propertyId";
$result1 = mysqli_query($conn, $query1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Wishlist</title>
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
    <h2 id="h1" class="text-center pt-3">My Favourites</h2>
        <div class="table-responsive">
            <h2 class="text-center pt-3">Renatl Property</h2>
            <table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
                <thead>
                    <tr>
                    <th>Fav ID</th>
                    <th>User ID</th>
                        <th>Owner</th>
                        <th>Phone No.</th>
                        <th>Property Type</th>
                        <th>Location</th>
                        <th>Rent</th>
                        <th>Description</th>
                        <th>Agent Name</th>
                        <th>Agent Phone</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $userId ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[7] ?></td>
                            <td><?php echo $row[8] ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
            <h2 class="text-center pt-3">Selling Property</h2>
            <table class="table text-white table-hover " style="background-color:#0099cc; border:2px solid black;">
                <thead>
                    <tr>
                    <th>Fav Id</th>
                    <th>User ID</th>
                        <th>Owner</th>
                        <th>Phone No.</th>
                        <th>Property Type</th>
                       
                        <th>Price</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Agent Name</th>
                        <th>Agent Phone</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($result1)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo  $userId ?></td>
                        
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[7] ?></td>
                            <td><?php echo $row[8] ?></td>
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