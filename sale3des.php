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
<br>

   <div class="container">
    <h1 id="h3">AL-SARDAR HAVELI</h1>
    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="card" >
            
             <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="pictures\interior3-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="pictures\interior3-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="pictures\interior3-3.jpg" alt="Third slide">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="pictures\interior6-2.jpg" alt="Third slide">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="pictures\interior7-2.jpg" alt="Third slide">
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active" style="width: 25%;height: auto;"> <img class="d-block w-100"  src="pictures\interior3-1.jpg"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1" style="width: 25%;height: auto"><img class="d-block w-100" src="pictures\interior3-2.jpg"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"  style="width: 25%;height: auto"><img class="d-block w-100" src="pictures\interior3-3.jpg"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="3"  style="width: 25%;height: auto"><img class="d-block w-100" src="pictures\interior6-2.jpg"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="4"  style="width: 25%;height: auto"><img class="d-block w-100" src="pictures\interior7-2.jpg"
            class="img-fluid"></li>
      </ol>
    </div>
    <div class="table-responsive">
    <table class="table table-light table-bordered table-striped">
     <thead class="thead-dark">
      <tr>
     
        <th>Bedrooms</th>
        <th>Location</th>
        <th>Benifits</th>
        <th>Price</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>6</td>
        <td>Iqbal town, Ali Pur, Islambad</td>
        <td>  
          <dl>
            <dd>-Well-planned gated community</dd>
            <dd>-Secured surroundings</dd>
            <dd>-Emergency services</dd>
            <dd>-Wide landscaped roads</dd>
            <dd>-Ideal location</dd>
            <dd>-Excellent healthcare facilities</dd>
            <dd>-Area parks and mosques</dd>
            <dd>-Proximity to commercial areas</dd>

          </dl>  
        </td>
        <td>$900,000</td>
         <td><a href="contact.php" class="btn btn-dark ">Contact Us</a></td>
      </tr>
    </tbody>
  </table>
</div>

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
