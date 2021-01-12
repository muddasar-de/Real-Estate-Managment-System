<?php
if (isset($_POST['submit'])) {
    include('connect.php');

    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $role = mysqli_real_escape_string($conn, $_REQUEST['role']);
    $budget = mysqli_real_escape_string($conn, $_REQUEST['budget']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);

    $stmt = "INSERT INTO registration (Name, Phone, Role, Budget, Password) 
        VALUES ('$name','$phone', '$role', '$budget', '$password')";
    $stmt2 = "INSERT INTO newTable (Role, Budget) 
        VALUES ('$role', '$budget')";


    if (mysqli_query($conn, $stmt)) {
        echo "<script>alert('Welcome to our community');
                    window.location.href='index.php'; 
                </script>";
        if (mysqli_query($conn, $stmt2)) {
            echo "stmt2 executed";
        } else {
            echo "Not executed stmt 2" . mysqli_connect_error();
        }
    } else {
        // echo "<script>alert('Error! Data Not Posted');
        //             window.location.href='CmpHome.php'; 
        //         </script>";
        echo "Not Inserted" . mysqli_connect_error();
    }

    // Close connection
    mysqli_close($conn);
}

if (isset($_POST['SubmitUser'])) {
    include('connect.php');

    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);

    $UserStmt = "INSERT INTO user (UName, UPhone, UEmail, UPassword) 
        VALUES ('$name','$phone', '$email', '$password')";

    if (mysqli_query($conn, $UserStmt)) {
        echo "<script>alert('Welcome to our community');
                    window.location.href='index.php'; 
                </script>";
    } else {
        echo "<script>alert('Error! Something Went Wrong');
                    window.location.href='registration.php'; 
                </script>";
    }

    // Close connection
    mysqli_close($conn);
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

    <nav class="navbar navbar-expand-sm bg-light navbar-light  ">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="pictures\logo7.png" alt="logo" style="width:100px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navitems-mobile" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sales.php">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rentals.php">Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="agents.php">Agents</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">

                        <button type="button" class="btn text-white" style="background-color:#0099cc;" data-toggle="modal" data-target="#myModal">
                            <i class="fas fa-sign-in-alt fa-1x"></i> Admin
                        </button>

                        <!-- The Modal Admin -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content " style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);padding: 15% 25%;">

                                    <i class="fas fa-user-shield text-center text-white fa-3x"></i><br>
                                    <h1 class="text-center text-white">Admin Login</h1>


                                    <div class="modal-body">
                                        <form id="form_id" method="post" name="myform">
                                            <div class="form-group">
                                                <label class="text-white">User Name :</label><br>
                                                <input type="text" name="username" id="username" />
                                            </div>
                                            <div class="form-group">

                                                <label class="text-white">Password :</label><br>
                                                <input type="password" name="password" id="password" />

                                            </div>
                                            <br>
                                            <input type="button" class="btn btn-light mx-auto d-block px-3" value="Login" id="submit" onclick="validate()" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>


                </ul>
            </div>
    </nav>


    <div class="container-fluid  container7">
        <div class="row justify-content-left">
            <div class=" col-md-12">
                <div class="container p-3 rounded" style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);">

                    <h1 class="text-white text-center pt-3"><i class="fas fa-user-plus fa-2x" style="margin-bottom:30px;"></i><br>Register Yourself</h1>
                    <form method="POST" autocomplete="off">
                        <div class="form-group">
                            <label class="text-white">Name</label>
                            <input type="text" class="form-control" placeholder="Name*" name="name">

                        </div>
                        <div class="form-group">
                            <label class="text-white">Phone Number</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Phone*" name="phone">

                        </div>
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <input type="email" class="form-control" placeholder="Email*" name="email">

                        </div>
                        <div class="form-group">
                            <label class="text-white">Password</label>
                            <input type="password" class="form-control" placeholder="Password*" name="password">
                        </div>



                        <br>
                        <button type="submit" name="SubmitUser" class="btn btn-light mx-auto d-block">Submit</button>
                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid container3 ">
        <div class="row">
            <div class="col-md-6" id="review">
                <h1 id="h2">TO CONTACT OUR RENTAL OR SALES TEAM.<br> PLEASE CALL OR EMAIL US:</h1>
                <p class="text-white text-center "> Tel: 123-456-7890<br><br>
                    Email: info@mysite.com<br><br>
                    Fax: 123-456-7890<br><br>
                    500 Terry Francois Street
                    San Francisco, CA 94158
                </p>
            </div>
            <div class="col-md-6" style="padding:0% 10%">
                <h1 id="h2">Your Feedback ?</h1>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="uname" class="text-white">Your Name:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="uname" required pattern="[A-Za-z]{3,9}" title=" This is not suitable">

                    </div>
                    <div class="form-group">
                        <label for="email" class="text-white">Email:</label>
                        <input type="email" class="form-control" id="pwd" placeholder="Enter Your E-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title=" Enter valid Email address ">

                    </div>
                    <div class="form-group">
                        <label for="message" class="text-white">Feedback</label>
                        <textarea class="form-control" rows="3" required placeholder="What do you think.." id="message" pattern="[A-Za-z]{20,50}"></textarea>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-light mx-auto d-block">Send</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>