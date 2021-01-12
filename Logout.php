<?php 
    if(isset($_GET['LogoutSubmit'])){
        Logout($_GET['LogoutSubmit']);
    }
    function Logout() {
        unset($_SESSION['id']);
        unset($_SESSION['type']);
        // session_destroy();
        header('location: index.php');
    }
?>