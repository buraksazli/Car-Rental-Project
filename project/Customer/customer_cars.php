<!DOCTYPE html>
<html>
<head>
  <title>Vehicles</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
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
          color: #171717;
          background-color: #EDEDED;
         }

        button{
            background-color: #DA0037;
            color: #EDEDED;
            width:200px;
            border: #ffffff;
            display: flex;
            justify-content: center;
        }
        

        .container2{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px,auto));
            gap: 1rem;
            margin-top: 2rem;
            margin-left: 10px;
            margin-right: 10px;
        
        }
        .container2 .box{
            padding: 10px;
            height: 480px;
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


      h1{
            display: flex;
        justify-content: center;
        font-family: Montserrat, sans-serif;
        
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
            margin-left: 75px;
            border-radius: 0%;
    
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
       

      <br><br>
      <h1>ALL CARS</h1>
     
      <div class="container2">
        <div class="box">
          <div class="boximg">
            <img src="Images/f-citroen-c3.png" id="araba1">
          </div>
          <p>2018</p>
          <h3>Citroen C3</h3>
          <h3>80$/Month</h3>
          <p>Available</p>
          <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
        </div>
        
        <div class="box">
          <div class="boximg">
            <img src="Images/b-fiat-egea-hb.png" id="araba1">
          </div>
          <p>2019</p>
          <h3>Fiat Egea</h3>
          <h3>70$/Month</h3>
          <p>Available</p>
          <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
           
        </div>
    
        <div class="box">
          <div class="boximg">
            <img src="Images/f-citroen-c3.png" id="araba1">
          </div>
          <p>2016</p>
          <h3>Citroen C3</h3>
          <h3>100$/Month</h3>
          <p>Available</p>
          <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
        </div>

        <div class="box">
            <div class="boximg">
              <img src="Images/f-citroen-c3.png" id="araba1">
            </div>
            <p>2018</p>
            <h3>Citroen C3</h3>
            <h3>80$/Month</h3>
            <p>Available</p>
            <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
          </div>
          <div class="box">
            <div class="boximg">
              <img src="Images/f-citroen-c3.png" id="araba1">
            </div>
            <p>2018</p>
            <h3>Citroen C3</h3>
            <h3>80$/Month</h3>
            <p>Available</p>
            <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
          </div>
          <div class="box">
            <div class="boximg">
              <img src="Images/f-citroen-c3.png" id="araba1">
            </div>
            <p>2018</p>
            <h3>Citroen C3</h3>
            <h3>80$/Month</h3>
            <p>Available</p>
            <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>
          </div>
          <div class="box">
            <div class="boximg">
              <img src="Images/f-citroen-c3.png" id="araba1">
            </div>
            <p>2018</p>
            <h3>Citroen C3</h3>
            <h3>80$/Month</h3>
            <p>Available</p>
            <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button> 
          </div>
          <div class="box">
            <div class="boximg">
              <img src="Images/f-citroen-c3.png" id="araba1">
            </div>
            <p>2018</p>
            <h3>Citroen C3</h3>
            <h3>80$/Month</h3>
            <p>Available</p>
            <p>Automatic</p>
          <p>Diesel</p>
          <p>For 5 People</p>
          
          <button type="submit" class="btn"><b>Rent</b></button>  
            
          </div>

        </div>


      
   

</body>
</html>