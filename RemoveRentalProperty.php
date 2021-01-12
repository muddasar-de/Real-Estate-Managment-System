<?php
    include('connect.php');
    $forRentalPropRemove = $_GET['forRentalPropRemove'];
    $RemoveRentalProp="DELETE FROM property WHERE propertyId='$forRentalPropRemove'";
    $RemoveProp="DELETE FROM rentalproperty WHERE propertyId='$forRentalPropRemove'";
    if (mysqli_query($conn, $RemoveRentalProp)) {
        mysqli_query($conn, $RemoveProp);
        echo "<script>alert('Removed Successfully');
                    window.location.href='dashboard.php'; 
                </script>";
    }
?>