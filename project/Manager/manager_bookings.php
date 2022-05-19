<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bookings</title>
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

            
          button{
              margin-left: 1rem;
              background-color: #DA0037;
              color: #EDEDED;
              border: none;
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
            
            
            
            #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){
  background-color: #f2f2f2;
}

#customers tr:hover {
  background-color: #ddd;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #444444;
  color: #EDEDED;
}
.delete-button{
    background-color: #444444;
    color: #EDEDED;
}

.delete-button:hover{
  background-color: #171717;
}

.buttonbottom:hover{
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
       
      
       <h1><b>Bookings</b> </h1>
          
          
      <table id="customers">
        <tr>
          <th>Customer Name</th>
          <th>Vehicle</th>
          <th>Pick Up Date</th>
          <th>Return Date</th>
          <th>Pick Up Location</th>
          <th>Return Location</th>
          <th>Payment</th>
          <th>Actions</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td> 
          <td>Germany</td>
          <td>50$</td>
          <td><a href="manager_bookings_edit.php"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="manager_bookings.php"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
          
        </tr>
        <tr>
          <td>Berglunds snabbköp</td>
          <td>Christina Berglund</td>
          <td>Sweden</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Königlich Essen</td>
          <td>Philip Cramer</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
            <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>Germany</td>
          <td>50$</td>
          <td><a href="managerbookingsedit.html"><button  class="buttonbottom" type="submit">Update</button></a>
          <a href="managerbookings.html"><button onclick="myFunction()" class="delete-button" type="submit">Delete</button></a></td>
        </tr>
        
      </table>

      <script>
        function myFunction() {
          confirm("Are You Sure?");
        }
        </script>
    
</body>
</html>