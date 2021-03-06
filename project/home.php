<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Car Rental System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <style>

  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #252525;
      background-color: #EDEDED;
      
  }
  
  
  
  .picklctn{
    display: flex;
    flex-direction: column;
    margin-top: -150px;
    margin-left: 100px;
    
  }

  .returnlctn{
    display: flex;
    flex-direction: column;
    margin-top: -150px;
  }

  .date{
    display: flex;
    flex-direction: column;
    margin-top: -150px;
    
    
  }

  .date2{
    display: flex;
    flex-direction: column;
  }

  input[type="date"]{
    background-color: white;
    border: none;
    font-family: Montserrat, sans-serif;
    height: 35px;
    border-radius: 0.2em;
    color: #171717;
    padding:0.5rem;
  }


 .img{
    background-image: url("Images/carbg.jpg");
   width: 100%;
    height: 610px;
    display:flex;
    justify-content: center;
    max-width: 100%;
  }
  
  .navbar {
    
      margin-bottom: 0;
      background-color: rgb(23, 23, 23, 0.4);
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
  

.containers {
  right: 150px;
  width: 1518px;
  height: 210px;
  margin:-150px;
  position: absolute;  
  font-family: Montserrat, sans-serif;
  color:#171717;
    padding: 20px;
}



select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: white;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:#171717;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 10em;
   height: 2.5em;
   line-height: 2.7;
   background: #EDEDED;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #DA0037;
   color: white;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #171717;
}


.btn {
  background-color: #DA0037;
  color: #EDEDED;  
  height: 36px;
  border: none;
  margin: 50px;
  right: -17px;
  position: absolute;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
  margin-top: -118px;
}

.btn:hover {
  opacity: 1;
  background-color: #171717;
  color: #EDEDED;
}

.container2{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,auto));
  gap: 1rem;
  margin-top: 100px;
  margin-left:auto; margin-right:auto;

  
}

.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #DA0037;
  }
  .carousel-indicators li {
      border-color: #DA0037;
  }
  .carousel-indicators li.active {
      background-color: #DA0037;
  }


.item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
.containers .picklctn{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

.containers .returnlctn{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

#message{
  background-color:rgb(160, 149, 152, 0);
  width: 300px;
  height: 200px;
  margin-left: 15px;
  background-image: url("Images/tesla.png");
}

#on-message{
  background-color: rgb(218, 0, 55,0);
  height: 200px;
  margin-left: auto;
  margin-right: auto;
  width: 250px;
  font-family: 'Impact','sans-serif';
  font-weight: 900;
  color: #EDEDED;
  margin-top: 75px;
}

#seeall{
  position: absolute;
  right: 140px;
  margin:-30px;
  margin-top: 140px;
  color: #252525;

}

.fast-rent{
  
 margin-top: -107px;
  height: 200px;
  width: 86%;
  position: absolute;
  left: 100px;
  background-color:#EDEDED;
  box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
}

#in-message{
  background-color: rgb(218, 0, 55,0.9);
  margin-left: -15px;
  margin-top: -75px;
  height: 100%;
  width: 107%;
}

.container2 .box{
  padding: 10px;
  border-radius: 1rem;
  box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
  margin-top: 90px;
  margin-left: 10px;
  margin-right: 10px;
  
}



#carss{
  position: absolute;
  right: 1400px;
  margin:-40px;
  margin-top: 140px;
}


#arrow{
  position: absolute;
  right: 100px;
  margin:-30px;
  width: 25px;
  margin-top: 140px;
 
}

.rent{
  display: flex;
  justify-content: center;
  gap: 5rem;
   
}

.buttonbottom{
  background-color: #444444;
  color: #EDEDED;
  
  border: none;
  border-radius: 5px;
  margin-top: -20px;
  right: 355px;
  position: absolute;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}

.row{
  margin-right: 10px;
}

#white-arrow{
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}

textarea{
  resize: none;
}

.buttonbottom:hover{
  opacity: 1;
  background-color: #171717;
  color: #EDEDED;
}

#search-car{
   display: flex;
   text-align: center;
   padding: 0.5rem;
}

#customers-say{
  text-align: center;
  margin-top: 100px;
 margin-bottom: -15px;
}

.col-sm-5{
  left: 50px;
  
}

.contact{
  margin-top: 75px;
  margin-bottom: 40px
}

@media screen and (max-width:1470px) {
  .picklctn{
    display: flex;
    flex-direction: column;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    
  }

  #message{
  background-color:rgb(160, 149, 152, 0);
  width: 300px;
  height: 200px;
  margin-left: 15px;
  background-image: none;
}

  #in-message{
  background-color: rgb(218, 0, 55,0.9);
  margin-left: -15px;
  margin-top: -220px;
  height: 98%;
  width: 100%;
}

  .returnlctn{
    display: flex;
    flex-direction: column;
    margin-top: -40px;
    margin-left: auto;
    margin-right: auto;
  }

  .date{
    display: flex;
    flex-direction: column;
    margin-top: -35px;
    margin-left: auto;
    margin-right: auto;
    
  }

  .fast-rent{
  margin-left: auto;
  margin-right: auto;
  margin-top: -535px;
   height: 550px;
   width: 300px;
   position: absolute;
   left: 100px;
   background-color:#EDEDED;
   box-shadow: 1px 4px 41px rgba(0, 0, 0, 0.1);
 }

   .rent{
     flex-direction: column;
   }

  input[type="date"]{
    background-color: white;
    border: none;
    font-family: Montserrat, sans-serif;
    height: 35px;
    width: 150px;
    border-radius: 0.2em;
    color: #171717;
    padding: 0.5rem;
  }

  .containers {
  right: 150px;
  width: 50%;
  height: 50%;
  margin:-150px;
  position: absolute;  
  font-family: Montserrat, sans-serif;
  color:#171717;
    padding: 70px;
}



select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: white;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:#171717;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 10em;
   height: 2.5em;
   line-height: 2.7;
   background: #EDEDED;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #DA0037;
   color: white;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #171717;
}

.containers .picklctn{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

.containers .returnlctn{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

.containers .date{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

.containers .date2{
  width: 15%;
    float: left;
    padding: 20px;
    border: 2px;
}

.btn{
  
  display: flex;
  margin-top: 650px;
  justify-content: center;
  right: 70px;
}
  }
  
  </style>
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-align-justify"></span>
        </button>
        <a class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> CRS</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php" >HOME</a></li>
        <li><a href="cars.php">VEHICLES</a></li>
        <li><a href="offices.html">OFFICES</a></li>
        <li><a href="login.php">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </nav>



<div class="img"> </div>

  <div class="fast-rent">
    <div id="message">
      <div id="in-message">
        <div id="on-message">
          <h2 id="search-car"> Let's Search Your Favourite Car And Rent It.</h2>
          <img src="Images/whitearrow.png" id="white-arrow">
        </div>
        </div>
      </div>
    
    <form>
    <div class="rent">
    <div class="picklctn">
      <label for="cars">Pick Up Location</label>
      <div class="select">
      <select  name="cars" id="cars">
        <option value="volvo">Antalya</option>
        <option value="saab">Ankara</option>
        <option value="mercedes">??stanbul</option>
        <option value="audi">??zmir</option>
      </select>
      </div>
    </div>
    <div class="returnlctn">
    <label for="cars">Return Location</label>
    <div class="select">
<select name="cars" id="cars">
  <option value="volvo">Antalya</option>
  <option value="saab">Ankara</option>
  <option value="mercedes">??stanbul</option>
  <option value="audi">??zmir</option>
</select>
</div>
</div>

<div class="date">
    <label for="date">Date From </label>
    <input type="date" id="date" name="date">
</div>

<div class="date">
    <label for="date2">Date To</label>
    <input type="date" id="date2" name="date2">
</div>
    <button type="submit" class="btn"><b>Search</b></button>
  </div>
</div>
</div>
  </form>
  
</div>
</div>
<div id="car-boxes" class="container-fluid bg-grey">
  
  <h2 id="carss">CARS</h2>
   
    <a href="cars.html">
    <h3 id="seeall">See all</h3>
    <img id="arrow" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARNJREFUSEvFl10NwkAQhL86QAooQAIWQAHgAByAA3AADsABOAAH4IBMcpc0pL3ef+elT823072d2zaMpGYkLi7wBFgDZ+CVu0AX+AIsgA+wA4454S7wDZi3YCpkZQpJriEELJjcC64ikhQKtrATsE1xHwtWATpwcq+WBCsFbGEH4z4IngMs4MO419NLucAWprHb+5Bzg8VUz9V7Z+iUANuxc4ZOKbD92r2hUxpsD97sv+81wE9gWht8BZZdCVfK8RfYAIrWTpUA343LquOki0MROqhcjnWA1MuqkamIVFgEKcXx27isei1q/5JLbSRRCnWsMVEvq64+vWEQY9lnvR0Mg9xgLfQ2faou9DFGvN8Z7d/pB+SpRh9wM0oeAAAAAElFTkSuQmCC"/>
    </a>
  
  <div class="container2">
    
    
    <div class="box">
      <div class="boximg">
        <img src="Images/f-citroen-c3.png" id="araba1">
      </div>
      <p>2018</p>
      <h3>Citroen C3</h3>
      <h3>80$/Month</h3>
      <p>For Rent</p>
    </div>
    
    <div class="box">
      <div class="boximg">
        <img src="Images/b-fiat-egea-hb.png" id="araba1">
      </div>
      <p>2019</p>
      <h3>Fiat Egea</h3>
      <h3>70$/Month</h3>
      <p>For Rent</p>
    </div>

    <div class="box">
      <div class="boximg">
        <img src="Images/f-citroen-c3.png" id="araba1">
      </div>
      <p>2016</p>
      <h3>Citroen C3</h3>
      <h3>100$/Month</h3>
      <p>For Rent</p>
    </div>

    

    </div>
    <div id="portfolio" class="container-fluid text-center bg-grey"></div>
    <h2 id="customers-say">What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Amazing Company"<br><span style="font-style:normal;">Michael Roe, Vice President</span></h4>
      </div>
      <div class="item">
        <h4>"Amazing Company"<br><span style="font-style:normal;">John Doe, Salesman</span></h4>
      </div>
      <div class="item">
        <h4>"Amazing Company"<br><span style="font-style:normal;">Jane Doe, Actor</span></h4>
      </div>
    </div>

  
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>
 
   <br>
   <div class="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><span class="glyphicon glyphicon-map-marker"></span> Antalya, Turkey</p>
      <p><span class="glyphicon glyphicon-phone"></span> +90 551 202 83 90</p>
      <p><span class="glyphicon glyphicon-envelope"></span> buraksazli0@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="buttonbottom" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
