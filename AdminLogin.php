<?php
    if (isset($_POST['SubmitLogin'])) {
        include('connect.php');
        session_start();

        $email = ($_POST['email']);
        $password = ($_POST['password']);


        $stmt = $conn->prepare("SELECT adminId, adminName, adminEmail, adminPassword FROM admin WHERE adminEmail=? AND adminPassword=? LIMIT 1");
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $stmt->bind_result($id, $adminName, $email, $password);
        $stmt->store_result();
        if($stmt->num_rows == 1){  //To check if the row exists
            if($stmt->fetch()) //fetching the contents of the row
            {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $adminName;
                header('location: dashboard.php');

            }

        }
        else {
            echo "<script>alert('Error. Invalid Credentials');
            window.location.href='AdminLogin.php';
            </script>";
        }
        $stmt->close();
        $conn->close();
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome\css\all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#LoginModal').modal('show');
        });
    </script>

    <div class="modal fade" id="LoginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content " style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);padding: 15% 25%;">

                <i class="fas fa-user-shield text-center text-white fa-3x"></i><br>
                <h1 class="text-center text-white">Admin Login</h1>
                <div class="modal-body">
                    <form method="POST" autocomplete="off">
                        <div class="form-group">
                            <label class="text-white">Email :</label><br>
                            <input type="email" name="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label class="text-white">Password :</label><br>
                            <input type="password" name="password" id="password" />
                        </div>
                        <br>
                        <input type="Submit" class="btn btn-light mx-auto d-block " value="Login" name="SubmitLogin" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>