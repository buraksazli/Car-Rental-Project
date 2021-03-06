<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
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
        }

        button{
            background-color: #ffffff;
            color: #EDEDED;
            width:200px;
            border: #ffffff;
            background-color: #DA0037;
        }

        button:hover{
            color: #EDEDED;
            background-color: #171717;
        }
    

        .container-button .buttons{
        padding: 10px;
        border-radius: 1rem;
        box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
        margin-left: -110px;
        display: flex;
            flex-direction: column;  
        }

        .container-button{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px,auto));
        gap: 10rem;
        margin-top: 250px;
        margin-left: auto;
        width: 60%;
        border: 3px;
        padding: 10px;
        display: flex;
            flex-direction: row;
        height:  100px;
        }

    
        .navbar {
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0);
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #DA0037 !important;
            font-weight: bold;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #EDEDED !important;
            background-color: #DA0037 !important;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> CRS</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">HOME</a></li>
              <li><a href="cars.php">VEHICLES</a></li>
              <li><a href="offices.html">OFFICES</a></li>
              <li><a href="login.php">LOGIN</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container-button">
        <div class="buttons">
        <b>Click For Manager Login Page</b>
        <a href="Manager/manager_login.php"> <button><b>Manager Login</b></button></a>
      </div>
        <br><br>
        <div class="buttons">
        <b>Click For Customer Login Page</b>
        <a href="Customer/customer_login.php"> <button><b>Customer Login</b></button></a>
        </div>
        
      </div>
      
</body>
</html>