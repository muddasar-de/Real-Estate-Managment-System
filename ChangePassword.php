<?php 
    include('connect.php');
    session_start();
    
    $value = $_SESSION['type'];

    if(isset($_POST['submit'])){
        if($value == "user"){
            $pass = mysqli_real_escape_string($conn, $_REQUEST['password']);
            $newPass = mysqli_real_escape_string($conn, $_REQUEST['newPass']);
            $newCnfrmPass = mysqli_real_escape_string($conn, $_REQUEST['cnfrmNewPass']);
            $id = $_SESSION['id'];
            $query = "SELECT UPassword FROM user  WHERE userId = '$id' ";
            $result = mysqli_query($conn, $query);
            $query2 = "UPDATE `user` SET `UPassword` = '$newPass' WHERE `user`.`userId` = $id";
    
            $row = mysqli_fetch_assoc($result);
    
            if($pass == $row['UPassword']){
                if($newPass == $newCnfrmPass){
                    $result2 = mysqli_query($conn, $query2);
                    echo "<script>alert('Password has been changed successfully');
                            window.location.href='UserDashboard.php'; 
                        </script>";
                }
                else{
                    echo "<script>alert('Error! Password do no match');
                        window.location.href='ChangePassword.php';
                    </script>";
                }
            }
            else{
                echo "<script>alert('Error! Current password is incorrect');
                        window.location.href='ChangePassword.php'; 
                    </script>";
            }
        }
        else{
        session_start();
        $id = $_SESSION['id'];
        $pass = mysqli_real_escape_string($conn, $_REQUEST['password']);
        $newPass = mysqli_real_escape_string($conn, $_REQUEST['newPass']);
        $newCnfrmPass = mysqli_real_escape_string($conn, $_REQUEST['cnfrmNewPass']);

        $query = "SELECT adminPassword FROM admin WHERE adminId = '$id' ";
        $result = mysqli_query($conn, $query);
        $query2 = "UPDATE `admin` SET `adminPassword` = '$newPass' WHERE `admin`.`adminId` = $id";
        
        

        $row = mysqli_fetch_assoc($result);

        if($pass == $row['adminPassword']){
            if($newPass == $newCnfrmPass){
                $result2 = mysqli_query($conn, $query2);
                echo "<script>alert('Password has been changed successfully');
                        window.location.href='dashboard.php'; 
                    </script>";
            }
            else{
                echo "<script>alert('Error! Password do no match');
                    window.location.href='ChangePassword.php';
                </script>";
            }
        }
        else{
            echo "<script>alert('Error! Current password is incorrect');
                    window.location.href='ChangePassword.php'; 
                </script>";
        }
        }
    }
    
    //Cancel
    if(isset($_POST['cancel'])){
        if($value === "user"){
            header('location: UserDashboard.php');
        }
        else{
            header('location: dashboard.php');
        }
            
    }

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
        <div class="wrapper">
            <div class="main-panel">
                <div class="container mt-5">
                    <div class="row ">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-4 card pb-3">
                            <div class="card-header bg-light text-center mb-2">
                                Change Password
                            </div>
                            <form method="post" autocomplete="off" >
                                <label>Current Password</label>
                                <div class="form-group pass_show"> 
                                    <input type="password" name="password" class="form-control" placeholder="Current Password"> 
                                </div> 
                                <label>New Password</label>
                                <div class="form-group pass_show"> 
                                    <input type="password" name="newPass" class="form-control" placeholder="New Password"> 
                                </div> 
                                <label>Confirm Password</label>
                                <div class="form-group pass_show"> 
                                    <input type="password" name="cnfrmNewPass" class="form-control" placeholder="Confirm Password"> 
                                </div> 
                                    
                                <input class="btn btn-warning post-btn" type="submit" name="submit" value="Save">
                                <input class="btn btn-primary post-btn" type="submit" name="cancel" value="Cancel">
                                
                            </form>
                            
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <script src="JavaScript.js"></script>
    </body>
</html>