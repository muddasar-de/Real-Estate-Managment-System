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
        <!-- <li class="nav-item">
          <a class="nav-link " href="agents.php">Agents</a>
        </li>  -->
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li> 
         <li class="nav-item">
         
          <button type="button" class="btn text-white" style="background-color:#0099cc;" data-toggle="modal" data-target="#myModal">
              <i class="fas fa-sign-in-alt fa-1x"></i> Admin
         </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content " style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);padding: 15% 25%;">

          <i class="fas fa-user-shield text-center text-white fa-3x"></i><br>
          <h1 class="text-center text-white">Admin Login</h1>
         
       
          <div class="modal-body">
          <form id="form_id" method="post" name="myform">
           <div class="form-group">
              <label class="text-white">User Name :</label><br>
              <input type="text" name="username" id="username"/>
             
             
            </div>
            <div class="form-group">
              
              <label class="text-white">Password :</label><br>
              <input type="password" name="password" id="password"/>
              
            </div>
            <br>
             <input type="button" class="btn btn-light mx-auto d-block px-3" value="Login" id="submit" onclick="validate()"/>
          </form>          
          </div>  
        </div>
      </div>
    </div>
    
        </li>
        
        
      </ul>
    </div>  
  </nav>


    <div class="container-fluid  container4" >
      <div class="row justify-content-left">
        <div class="col-md-offset-6 col-md-6">
          <div class="container p-3 rounded" style="background: linear-gradient(to bottom, #0099ff 0%, #66ffff 100%);">

            <h1 class="text-white text-center pt-3"><i class="fas fa-envelope fa-2x"></i><br>E-Mail Us</h1>
            <form action="/action_page.php" >
              <div class="form-group">
                <label for="uname" class="text-white">Your Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="uname" required pattern="[A-Za-z]{3,9}" title=" This is not suitable">
              
              </div>
          <div class="form-group">
            <label for="email"class="text-white">Email:</label>
            <input type="email" class="form-control" id="pwd" placeholder="Enter Your E-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title=" Enter valid Email address ">
            
          </div>
          <div class="form-group">
            <label for="select1"class="text-white">Select your location:</label>
            <select class="form-control" id="select1">
              <option>Select any one ...</option>
              <option>Buyer</option>
              <option>Renter</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="message" class="text-white" >Message:</label>
            <textarea class="form-control" rows="5" placeholder="How can we help you ..." id="message" pattern="[A-Za-z]{20,50}"></textarea>
          </div>
          
          <br>
          <button type="submit" class="btn btn-light mx-auto d-block">Submit</button>
          <br>

        </form>
      </div>
    </div>
   </div>
</div>

        
   <div class="container-fluid container3 " >
      <div class="row">
        <div class="col-md-12 " id="review" >
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


    <script type="text/javascript"> 
      var attempt = 3; 
      function validate(){
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if ( username == "Muddasar63" && password == "89498fc0"){
      alert ("Login successfully");
      window.location = "dashboard.php";
      return false;
      }
      else{
      attempt --;
      alert("You have left "+attempt+" attempt;");
      
      if( attempt == 0){
      document.getElementById("username").disabled = true;
      document.getElementById("password").disabled = true;
      document.getElementById("submit").disabled = true;
      return false;
      }
      }
      }
    </script>

  <script src="js\jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</body>
</html>
