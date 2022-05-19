<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Orders</title>
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
    
          button{
            background-color: #ffffff;
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
 
  
  margin-top: 75px;
  margin-left: auto;margin-right: auto;
  width: 19%;
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
                margin-top: 10px;
            }
            
            .btn:hover{
            color: #EDEDED;
            background-color: #171717;
          }

            .date{
            width: 200px;
            margin-left:0px;
            border: none;
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
       
      <h1>Edit Order Information</h1>

      <div class="container2">
        <div class="box">
            
            <span id="name-text">Customer Name</span>
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          
          <span id="name-text">Customer Surname</span>
          <input class="form-control" id="name" name="name" placeholder="Surname" type="text" required>
          
          <span id="name-text">Vehicle</span>
          <input class="form-control" id="name" name="name" placeholder="Age" type="text" required>
          
          <span id="name-text">Pick Up Date</span>
          <input type="date" class="date" name="date">
          <span id="name-text">Return Date</span>
          <input type="date" class="date" name="date">

          <span id="name-text">Payment</span>
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          
          <a href="customerorders.html"><button class="btn" type="submit">Complete</button></a>
        </div>
        </div>
       </div>

       
    
</body>
</html>