<?php
    include('connect.php');
    session_start();
    $addPropSellId = $_GET['addPropSellId'];
    $userId = $_SESSION['id'];
    $query = "SELECT propertyId,agentId,userId from property WHERE propertyId='$addPropSellId'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);  
    $propertyId = $row['propertyId'] ;
    $userId = $userId;
    $ownerId=$row['userId'] ;
    $agentId = $row['agentId'] ;
 

    $query2 = "INSERT INTO favourites (userId,propertyId, ownerId,agentId)
        VALUES ( '$userId','$propertyId','$ownerId','$agentId' )";
        if(mysqli_query($conn, $query2)){
            echo "<script>alert('Added to Wishlist');
                    window.location.href='UserDashboard.php';
					</script>";
        }
        else{
            echo "<script>alert('Error! Something Went Wrong');
                window.location.href='UserDashboard.php';
					</script>";
        }

?>