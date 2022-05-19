<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Profile</title>
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
              color: #DA0037;
              background-color: #e7e7e7;
              text-align: center;
  
          }
    
  
   img{
     margin-top: 20px;
   }

  .container2{
 
  margin-top: -5px;
  margin-left: auto;margin-right: auto;
  width: 20%;
  
}

#profile-text{
  color: #444444;
  margin-top: 75px;
  
}



.container2 .box{
  height: 400px;
  border-radius: 1rem;
  box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
  margin-left: -110px;
  background-color: #444444;
  color: #EDEDED;
  margin-left: auto;
  margin-right: auto;
  

}

.inner-div{
  background-color: #EDEDED;
  border-radius: 1rem;
  height: 200px;
  margin-left: auto;
  margin-right: auto;
  margin-top: -200px;
  
  color: #141414;

}

            .navbar {
                margin-bottom: 0;
                background-color: #444444;
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
                color: #EDEDED !important;
                background-color: #DA0037 !important;
            }
            
            .btn{
                width: 100px;
                color: #EDEDED;
                background-color: #444444;
                margin-right: auto;margin-right: auto;
                margin-top: 15px;
            }
            
            .btn:hover{
              background-color: #DA0037;
              color: #EDEDED;
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
              <li><a href="manager_cars.php">VEHICLES</a></li>
              <li><a href="manager_car_add.php">ADD VEHICLE</a></li>
              <li><a href="manager_bookings.php">BOOKINGS</a></li>
              <li><a href="manager_page.php">PROFILE</a></li>
              <li><a href="../home.php">LOGOUT</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
       </div>
      <br><br>
       <h3 id="profile-text">MY PROFILE</h3>

       <div class="container2">
         
        <div class="box">
          <img src="Images/profileimg.jpg"  width="100" height="100"><br>
           <h4>Burak Sazlı</h4>
           <p>Director</p>
           
             
          
          
        </div><div class="inner-div">
             Full Name: Burak Sazlı <br>
             Age: 22 <br>
            Title: Director <br>
            Phone: 0551-202--83-90<br>
            Branch: Kaleiçi/Antalya<br>
            <a href="managereditprofile.html"><button type="submit" class="btn"><b>Edit</b></button></a>

           </div>
       </div>
</body>
</html>