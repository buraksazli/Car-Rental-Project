<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Profile</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
              font: 400 15px Lato, sans-serif;
              line-height: 1.8;
              color: #444444;
              background-color: #EDEDED;
              text-align: center;
  
          }
 
    #name-text{
        display: flex;
        justify-content: left;
        margin-left: 35px;
    }
    
h1{
    font-family: Montserrat, sans-serif;
    margin-top: 35px;
}

    .container2{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,auto));
  gap: 1rem;
  margin-top: 75px;
  margin-left: auto;margin-right: auto;
  width: 50%;
  border: 3px;
  padding: 10px;
  
}

.form-control{
    margin-left: 25px;
   
    width: 200px;
}

.container2 .box{
  padding: 10px;
  border-radius: 1rem;
  box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
  
 
}

.container2 .box .boximg img{
  width: 100%;
  height: 100%;
  border-radius: 1rem;
  object-fit: cover;
  object-position: center;
  
}
#fileToUpload{
    margin-left: 400px;
    position: absolute;
    top: 380px;
}

            .navbar {
                margin-bottom: 0;
                background-color: #DA0037;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #EDEDED !important;
                font-weight: bold;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #DA0037 !important;
                background-color: #EDEDED !important;
            }
            
            .btn{
                width: 100px;
                color: #EDEDED;
                background-color: #DA0037;
            }
            
            .btn:hover{
            color: #EDEDED;
            background-color: #171717;
          }
            
        </style>
          


</head>
<body>
    <div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> CRS</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="customer_order.php">ORDERS</a></li>
              <li><a href="customer_cars.php">VEHICLES</a></li>             
              <li><a href="customer_page.php">PROFILE</a></li>
              <li><a href="../home.php">LOGOUT</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
       </div>
      <br><br>
       
      <h1>Edit Profile</h1>

       <div class="container2">
        <div class="box">
            
            <span id="name-text">Name</span>
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          
          <span id="name-text">Surname</span>
          <input class="form-control" id="name" name="name" placeholder="Surname" type="text" required>
          
          <span id="name-text">Age</span>
          <input class="form-control" id="name" name="name" placeholder="Age" type="text" required>
          
          <span id="name-text">Phone Number</span>
          <input class="form-control" id="name" name="name" placeholder="Phone Number" type="text" required>
          <span id="name-text">City</span>
          <input class="form-control" id="name" name="name" placeholder="City" type="text" required>
          <input type="file" name="fileToUpload" id="fileToUpload">  
          <a href="customer_page.php"><button class="btn" type="submit">Complete</button></a>
        </div>
          
          
          
        </div>
       </div>

       
    
</body>
</html>