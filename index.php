<?php
if (isset($_POST['SubmitFeedback'])) {
  include('connect.php');

  $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
  $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
  $msg = mysqli_real_escape_string($conn, $_REQUEST['message']);

  $stmt = "INSERT INTO Feedbacks (User_Name, Email, Message) 
        VALUES ('$uname','$email', '$msg')";


  if (mysqli_query($conn, $stmt)) {
    // echo "<script>alert('Internship has been posted Successfully');
    //             window.location.href='CmpHome.php'; 
    //         </script>";
    echo "Data Inserted Successfully";
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
  <title>Shaheen Properties</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome\css\all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <link rel="stylesheet" type="text/css" href="responsive.css"> -->
</head>

<body>

  <?php include('nav.php') ?>




  <div class="container-fluid container1">
    <div class="container p1 a1">
      <p>Get A House<br>To Make A Home</p>
      <div class="container p2 ">
        <p>i'm a paragraph. Click here to add your own text and edit me. <br>I’m a great place for you to tell
          a story and let your users know a little more about you.</p>
      </div>
      <a href="registration.php" class="btn btn-info " style="font-size:20px;">
        <i class="fas fa-user-plus fa-1x" style="padding-right:10px;"></i>
        Sign Up
      </a>
      <a href="Login.php" class="btn btn-info " style="font-size:20px;">
        <i class="fas fa-sign-in-alt fa-1x" style="padding-right:10px;"></i>
        Sign In
      </a>
    </div>
  </div>


  <br>

  <div class="container">
    <h1 id="h1">About Us</h1>
    <div class="row">
      <div class="col-md-6 pt-3" style="background-color:  #f0f5f5">
        <h2 class="text-center font-weight-bold">Our Services</h2>
        <p class="px-3">- Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>
          - Aliquam tincidunt mauris eu risus.<br>
          - Vestibulum auctor dapibus neque.<br>
          - Nunc dignissim risus id metus.<br>
          - Cras ornare tristique elit.<br>
          - Vivamus vestibulum ntulla nec ante.<br>
          - Praesent placerat risus quis eros.<br>
          - Fusce pellentesque suscipit nibh.<br>
          - Integer vitae libero ac risus egestas placerat.</p>
      </div>
      <div class="col-md-6">
        <img class="w-100" src="pictures\about.jpg">
      </div>
    </div>
  </div>
  <br>

  <div class="container">
    <h1 id="h1">Properties For Sale</h1>
    <div class="row">

      <div id="demo" class="col-md-5 carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures\interior1-1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior1-2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior1-3.jpg" width="100%">
          </div>
        </div>
      </div>
      <div class="col-md-7" style="background-color:  #f0f5f5">
        <h2 class=" font-weight-bold pt-3">AWAN HOUSE</h2>
        <span id="bedrooms">3 bedrooms</span>
        <br>
        <p> I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>

        <span id="price">$500,000</span>
        <a href="sale1des.php" class="btn btn-info float-right">Read More</a>
        <br>
        <br>
      </div>
    </div>
    <br>
    <div class="row">
      <div id="demo" class="col-md-5 carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures\interior2-1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior2-2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior2-3.jpg" width="100%">
          </div>
        </div>
      </div>
      <div class="col-md-7 " style="background-color:  #f0f5f5">
        <h2 class=" font-weight-bold pt-3"> PIECE VILLA </h2>
        <span id="bedrooms">9 bedrooms</span>
        <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let
          your users know a little more about you.</p>

        <span id="price">$1,500,000</span>
        <a href="sale2des.php" class="btn btn-info float-right">Read More</a> <br> <br>
      </div>
    </div>
    <br>
    <div class="row">
      <div id="demo" class="col-md-5 carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures\interior3-1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior3-2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior3-3.jpg" width="100%">
          </div>
        </div>
      </div>
      <div class="col-md-7 " style="background-color:  #f0f5f5">
        <h2 class=" font-weight-bold pt-3"> AL-SARDAR HAVELI</h2>
        <span id="bedrooms">6 bedrooms</span>
        <br>
        <p> I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>

        <span id="price">$900,000</span>
        <a href="sale3des.php" class="btn btn-info float-right">Read More</a><br><br>
      </div>
    </div>
    <br>
    <div class="row">
      <div id="demo" class="col-md-5 carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures\interior4-1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior4-2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior4-3.jpg" width="100%">
          </div>
        </div>
      </div>

      <div class="col-md-7" style="background-color: #f0f5f5">

        <h2 class=" font-weight-bold pt-3"> ABBASI HOUSE</h2>
        <span id="bedrooms">4 bedrooms</span>
        <br>
        <p> I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
        <br>
        <span id="price">$800,000</span>
        <a href="sale4des.php" class="btn btn-info float-right">Read More</a><br><br>
      </div>
    </div>
    <br>
    <div class="row">
      <div id="demo" class="col-md-5 carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pictures\interior5-1.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior5-2.jpg" width="100%">
          </div>
          <div class="carousel-item">
            <img src="pictures\interior5-3.jpg" width="100%">
          </div>
        </div>
      </div>
      <div class="col-md-7" style="background-color:  #f0f5f5">
        <h2 class=" font-weight-bold pt-3"> KHAN HOUSE</h2>
        <span id="bedrooms">3 bedrooms</span>
        <br>
        <p> I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
        <br>
        <span id="price">$600,000</span>
        <a href="sale5des.php" class="btn btn-info float-right">Read More</a><br><br>
      </div>
    </div>

  </div>
  <br>


  <div class="container">
    <h1 id="h1">Latest Rental Properties</h1>
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="pictures\pic2.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h2 class="card-title">BROTHER'S HOUSE</h2>
            <p class="card-text">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
            <span id="price">$800/month</span>
            <a href="rent1des.php" class="btn btn-primary float-right">View More</a>
          </div>
        </div>
        <br>

      </div>

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="pictures\pic3.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h2 class="card-title">ALTON AVENUE</h2>
            <p class="card-text">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
            <span id="price">$800/month</span>
            <a href="rent2des.php" class="btn btn-primary float-right">View More</a>

          </div>
        </div>
        <br>
      </div>

    </div>
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="pictures\pic4.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h2 class="card-title">Bahria Enclave</h2>
            <p class="card-text">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
            <span id="price">$700/month</span>
            <a href="rent3des.php" class="btn btn-primary float-right">View More</a>
          </div>
        </div>
        <br>

      </div>

      <div class="col-md-6">
        <div class="card">
          <img class="card-img-top" src="pictures\pic5.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h2 class="card-title">PRINCE WAY</h2>
            <p class="card-text">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
            <span id="price">$600/month</span>
            <a href="rent4des.php" class="btn btn-primary float-right">View More</a>

          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
  <br>

  <div class="container-fluid container5 ">
    <h1 id="h1" class="text-center text-black">What Our Clients Think</h1><br>
    <div class="row justify-content-center text-black border-collapse" style=" border: 2px ridge black ;border-radius: 15px">
      <div class="col-md-4 my-3 " id="review">
        <h2 class="text-center ">Muhammad Arslan</h2>
        <hr><br>
        <p id="p2" class="text-center">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
      </div>
      <div class="col-md-4 my-3" id="review">
        <h2 class="text-center ">Ahsan Ali</h2>
        <hr><br>
        <p id="p2" class="text-center">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
      </div>
      <div class="col-md-4 my-3">
        <h2 class="text-center">Muhammad Saqlain</h2>
        <hr><br>
        <p id="p2" class="text-center">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
      </div>
    </div>

  </div>


  <div class="container-fluid container3 ">
    <div class="row">
      <div class="col-md-12 pt-5 " id="review">
        <img class=" m-auto d-block" style="width:180px;" src="pictures\logo9.png">
        <h1 id="h2">TO CONTACT OUR RENTAL OR SALES TEAM.<br> PLEASE CALL OR EMAIL US:</h1>
        <p class="text-white text-center "> Tel: 123-456-7890<br><br>
          Email: info@mysite.com<br><br>
          Fax: 123-456-7890<br><br>
          500 Terry Francois Street
          San Francisco, CA 94158
        </p>
      </div>
    </div>
  </div>

  <script src="js\jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>

</html>