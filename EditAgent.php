<?php
include('connect.php'); 
$id = $_GET['id'];
$query = "SELECT * FROM agents WHERE agentID = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['agentName'];
$phone = $row['agentPhone'];
$address = $row['agentAddress'];
$area = $row['agentArea'];

if (isset($_POST['submit'])) {
    include('connect.php');
    $newName = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $newPhone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $newAddress = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $newArea = mysqli_real_escape_string($conn, $_REQUEST['area']);

    if ($newName == '') {
        $newName = $name;
    }
    if ($newPhone == '') {
        $newPhone = $phone;
    }
    if ($newAddress == '') {
        $newAddress = $address;
    }
    if ($newArea == '') {
        $newArea = $area;
    }
    $stmt = "UPDATE agents SET agentName='$newName', agentPhone = '$newPhone', agentAddress =  '$newAddress', agentArea='$newArea' 
        WHERE agentID='$id'";
    if (mysqli_query($conn, $stmt)) {
        // session_start();
        header('Location: dashboard.php');
    } else {
        echo "ERROR: Could not able to execute " . mysqli_error($conn);
    }
}
// if (isset($_POST['cancel'])) {
//     header('location: CmpProfile.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Agent</title>
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
            $('#EditAgentModal').modal('show');
        });
    </script>
    <div class="modal fade" id="EditAgentModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content " style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);padding: 5% 15%;">

                <h1 class="text-center text-white">Edit Agent</h1>


                <div class="modal-body">
                    <form method="POST" autocomplete="off">
                        <div class="form-group">
                            <label class="text-white">Name</label>
                            <input type="text" class="form-control" placeholder="<?php echo $name;?>" name="name">

                        </div>
                        <div class="form-group">
                            <label class="text-white">Phone Number</label>
                            <input type="text" class="form-control" placeholder="<?php echo $phone;?>" name="phone">

                        </div>

                        <div class="form-group">
                            <label class="text-white">Address</label>
                            <input type="text" class="form-control" placeholder="<?php echo $address;?>" name="address">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Area Allocated</label>
                            <input type="text" class="form-control" placeholder="<?php echo $area;?>" name="area">
                        </div>
                        <br>
                        <button name="submit" type="submit" class="btn btn-light mx-auto d-block">Submit</button>
                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>