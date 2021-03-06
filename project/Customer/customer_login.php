<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Customer Login</title>
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
              background-color: #EDEDED;
              text-align: center;
  
          }
    
         

 .container2{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,auto));
  gap: 1rem;
  margin-top: 150px;
  margin-left: auto;margin-right: auto;
  width: 50%;
  border: 3px;
  padding: 10px;
  
}

.form-control{
    
    margin-right: auto;
    margin-left: auto;
    width: 200px;
}

.container2 .box{
  padding: 10px;
  border-radius: 1rem;
  box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
  
 
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
            
           
    .btn{       
      width: 100px;         
      color: #EDEDED;          
      background-color: #DA0037;       
    }

  .btn:hover{
    background-color: #171717;
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
              <li><a href="../home.php">HOME</a></li>
              <li><a href="../cars.php">VEHICLES</a></li>
              <li><a href="../offices.html">OFFICES</a></li>
              <li><a href="../login.php">LOGIN</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
       </div>
      <div class="container2">
          
          <div class="box">
              <h2><b>Customer Login Page</b></h2>
              <b>E-mail</b>
            <input class="form-control" id="name" name="name" placeholder="E-mail" type="text" required>
            <b>Password</b>
            <input class="form-control" id="name" name="name" placeholder="Password" type="password" required>
            <br>
            <a href="customerpage.html"><button type="submit" class="btn"><b>Login</b></button></a>  
            <p>You don't have an account? <a href=../signup.html><b>Sign up</b></a></p>
        </div>
             
        </div>
        
      </div>

    </div>

</body>
</html>