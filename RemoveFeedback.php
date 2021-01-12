<?php
    include('connect.php');
    $forFeedbackRemove = $_GET['forFeedbackRemove'];
    $RemoveAgent="DELETE FROM feedbacks WHERE Feedback_Id='$forFeedbackRemove'";
    if (mysqli_query($conn, $RemoveAgent)) {
        echo "<script>alert('Removed Successfully');
                    window.location.href='dashboard.php'; 
                </script>";
    }
?>
