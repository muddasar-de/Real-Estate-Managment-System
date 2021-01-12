<?php
    include('connect.php');
    $forSellingPropRemove = $_GET['forSellingPropRemove'];
    
    $RemoveSellingProp="DELETE FROM property WHERE propertyId='$forSellingPropRemove'";
    $RemoveProp="DELETE FROM sellingproperty WHERE propertyId='$forSellingPropRemove'";
    if (mysqli_query($conn, $RemoveSellingProp)) {
        mysqli_query($conn, $RemoveProp);
        echo "<script>alert('Removed Successfully');
                    window.location.href='dashboard.php'; 
                </script>";
    }
?>
