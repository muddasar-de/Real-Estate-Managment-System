<?php
if (isset($_POST['submit'])) {
    include('connect.php');
    session_start();
    $adminId = $_SESSION['id'];

    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $area = mysqli_real_escape_string($conn, $_REQUEST['area']);

    $stmt = "INSERT INTO agents (agentName, agentPhone, agentAddress, agentArea, adminId) 
            VALUES ('$name','$phone', '$address', '$area', '$adminId')";


    if (mysqli_query($conn, $stmt)) {
        echo "<script>alert('Agent added successfully');
                    window.location.href='dashboard.php'; 
                </script>";
    } else {
        // echo "<script>alert('Error! Data Not Posted');
        //             window.location.href='CmpHome.php'; 
        //         </script>";
        echo "Not Inserted" . mysqli_connect_error();
    }

    // Close connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Agent</title>
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
            $('#AddAgentModal').modal('show');
        });
    </script>
    <div style="margin-top:50px">
       <div class="modal fade" id="AddAgentModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content " style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);padding: 5% 15%;">

                <h1 class="text-center text-white">Add Agents</h1>


                <div class="modal-body">
                    <form method="POST" autocomplete="off">
                        <div class="form-group">
                            <label class="text-white">Name</label>
                            <input type="text" class="form-control" placeholder="Name*" name="name">

                        </div>
                        <div class="form-group">
                            <label class="text-white">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number*" name="phone">

                        </div>

                        <div class="form-group">
                            <label class="text-white">Address</label>
                            <input type="text" class="form-control" placeholder="Address*" name="address">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Area Allocated</label>
                            <input type="text" class="form-control" placeholder="Area*" name="area">
                        </div>
                        <br>
                        <button name="submit" type="submit" class="btn btn-light mx-auto d-block">Add</button>
                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
 
    <script src="js\jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>

</html>