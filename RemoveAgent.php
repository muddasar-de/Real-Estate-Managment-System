<?php
    include('connect.php');
    $forAgentRemove = $_GET['forAgentRemove'];
    $RemoveAgent="DELETE FROM agents WHERE agentID='$forAgentRemove'";
    if (mysqli_query($conn, $RemoveAgent)) {
        echo "<script>alert('Removed Successfully');
                    window.location.href='dashboard.php'; 
                </script>";
    }
?>
