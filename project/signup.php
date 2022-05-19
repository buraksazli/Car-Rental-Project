<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Signup</title>
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
    

    
                .container2{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px,auto));
            gap: 1rem;
            margin-top: 125px;
            margin-left: auto;margin-right: auto;
            width: 35%;
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

            .container2 .box .boximg img{
            width: 100%;
            height: 100%;
            border-radius: 1rem;
            object-fit: cover;
            object-position: center;
            
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
            
           
            
            
        </style>
          


</head>
<body>
<?php
// define variables and set to empty values
$usernameErr = $nameErr = $passwordErr = $password2Err = "";
$username = $name = $password  = $password2 = "";
$servername = "localhost";
$username3 = "username";
$password3 = "password";
$dbname = "user";
$encyrptedpassword="";
$connection = mysqli_connect("localhost", "username", "password", 
                                                 "user");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["surname"])) {
    $nameErr = "Surname is required";
  } else {
    $name = test_input($_POST["surname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters allowed";
    }
  }

  if (empty($_POST["email"])) {
    $usernameErr = "E-mail is required";
  } else {
    $username = test_input($_POST["email"]);  
  }
    
   
     if(isset($_POST['submit']))
     {
      $conn = mysqli_connect($servername, $username3, $password3, $dbname);
      $sql = "SELECT * from user where username='$username'";
      $result=mysqli_query($connection, $sql);
      if(mysqli_num_rows($result)>0)
      {
        echo"Username is already used.";
      }
      
     }
     else{
        if($password2==$password){
          $conn = mysqli_connect($servername, $username3, $password3, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$password=md5($password);
$sql = "INSERT INTO user (username, password, registerDate, userStatus)
VALUES ('$username','$password',NOW(),'1');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
          header("Location: login.php");
              
      
        
          
    }else
        echo "<p>Not Welcome</p>"; 
  }
  
  
}
         
        

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



    <div>
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
       </div>
      <div class="container2">
          
          <div class="box">
              <h2><b>Sign Up</b></h2>
              <b>Name</b>
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            <b>Surname</b>
            <input class="form-control" id="name" name="name" placeholder="Surname" type="text" required>
            <b>Password</b>
            <input class="form-control" id="name" name="name" placeholder="Password" type="text" required>
            <b>E-mail</b>
            <input class="form-control" id="name" name="name" placeholder="E-mail" type="text" required>
            <b>Age</b>
            <input class="form-control" id="name" name="name" placeholder="Age" type="password" required>
            <b>Phone Number</b>
            <input class="form-control" id="name" name="name" placeholder="Phone Number" type="text" required>
            <b>Credit Card Number</b>
            <input class="form-control" id="name" name="name" placeholder="Credit Card Number" type="text" required>
            
            <br>
            <a href="Customer/customerlogin.html"><button type="submit" class="btn"><b>Sign Up</b></button>  </a>
            
        </div>
             
        </div>
   
      </div>

    </div>

</body>
</html>