<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shaheen Properties</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome\css\all.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body class="innerpage">
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
   
  
  

  <div class="container-fluid container2">
    <h1 id="h1" style="padding-top: 15px">Our Team</h1>
 
    <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="card" >
           <img class="card-img-top" src="pictures\a3.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h4 class="card-title">Muhammad Muddasar</h4><hr>
             <p class="card-text">
                  <span id="bedrooms">Sales</span><br><br>
                  Email: info@mysite.com<br>
                  Tel: 123-456-7890
             </p><br>
             
           
          </div>
        </div>
        <br>

      </div>
       <div class="col-md-4">
        <div class="card" >
           <img class="card-img-top " src="pictures\a2.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
            <h4 class="card-title">Aamir Satti</h4><hr>
             <p class="card-text">
                  <span id="bedrooms">Sales</span><br><br>
                  Email: info@mysite.com<br>
                  Tel: 123-456-7890
             </p><br>
          </div>
        </div>
        <br>

      </div>

       <div class="col-md-4">
        <div class="card" >
           <img class="card-img-top" src="pictures\a1.jpg" alt="Card image" style="width:100%">
          <div class="card-body" style="background-color: #f0f5f5">
           <h4 class="card-title">Shahab Umer</h4><hr>
             <p class="card-text">
                  <span id="bedrooms">Rentals</span><br><br>
                  Email: info@mysite.com<br>
                  Tel: 123-456-7890
             </p><br>
          </div>
        </div>
        <br>

      </div>
    
    </div>
   </div>
</div>



  <div class="container-fluid container3 " >
      <div class="row">
        <div class="col-md-6" id="review" >
          <h1 id="h2">TO CONTACT OUR RENTAL OR SALES TEAM.<br> PLEASE CALL OR EMAIL US:</h1>
          <p class="text-white text-center "> Tel: 123-456-7890<br><br>
                      Email: info@mysite.com<br><br>
                      Fax: 123-456-7890<br><br>
                      500 Terry Francois Street
                      San Francisco, CA 94158
          </p>
        </div>
        <div class="col-md-6"  style="padding:0% 10%" >
          <h1 id="h2">Your Feedback ?</h1>
           <form action="insert.php" method="post" >
              <div class="form-group">
                <label for="uname" class="text-white">Your Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="uname" required pattern="[A-Za-z]{3,9}" title=" This is not suitable">
              
              </div>
          <div class="form-group" >
            <label for="email"class="text-white">Email:</label>
            <input type="email" class="form-control" id="pwd" placeholder="Enter Your E-mail" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title=" Enter valid Email address ">
            
          </div>
          <div class="form-group">
            <label for="message" class="text-white" >Feedback</label>
            <textarea class="form-control" rows="3" required placeholder="What do you think.." id="message" pattern="[A-Za-z]{20,50}"></textarea>
          </div>
          
          <br>
          <button type="submit" class="btn btn-light mx-auto d-block">Send</button>
          <br>

        </form>
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
      window.location = "dashboard.php"; // Redirecting to other page.
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
