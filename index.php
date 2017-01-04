<?php session_start(); ?>
<!DOCTYPE html>
<html style="background-color: #DFC8B4;">
<title>Recipe Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<body style="background-color: #DFC8B4;">
<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:15%;height:200%; min-width:300px;background-image: url('images/yumm.png'); background-repeat: no-repeat; color: white;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  <br>
  <a href="index.php" onclick="w3_close()">Recipe Me</a>
  <br>
  <a href="login.php" onclick="w3_close()">Login</a>
  <br>
  <a href="signup.php" onclick="w3_close()">Sign Up</a>
</nav>
<!-- Top menu -->
<div class="w3-top">
  <div class="w3-#C1CFDA w3-xlarge w3-padding-xlarge" style="max-width:1900px;height:150px;margin:auto;background-color:#DD0B0B;color: black;">
    <div class="w3-opennav w3-left w3-hover-text-grey" onclick="w3_open()">&#9776;</div>
    <div class="w3-right">
      
    </div>
    <div class="w3-center"><a href="index.php"><img src="logo2.png" width="250" height="130"></a></div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="container">
  <br><br><br><br><br><br><br><br><br><br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
                  
    </ol>
<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">    
      <div class="item">
      <a href="dessert.php">
        <img src="images/cake.jpg" alt="Sandwich" style="width:auto;height:360px">
  
        <div class="carousel-caption">
        
    </a>
        </div>
      </div>
<div class="item active">
<a href="steak.php">
        <img src="http://www.2createabody.com/images/grilled_steak.jpg" alt="Steak" style="width:auto;height:360px">
        <div class="carousel-caption">
      
      </a>
        </div>
      </div>
      <div class="item">
      <a href="drink.php">
        <img src="http://www.magic4walls.com/wp-content/uploads/2016/03/pieces-of-watermelon-and-raspberry-in-cocktail-glass-next-to-watermelon-slices-694x417.jpg" alt="Cherries" style="width:auto;height:360px">
  
        <div class="carousel-caption">
        
      </a>
        </div>
      </div>
    
      <div class="item">
      <a href="spaghetti.php">
        <img src="http://picz.in/data/media/8/Pasta-with-Pesto-and-Grilled-Chicken.jpg" alt="Pasta and Wine" style="width:auto;height:360px">
    
        <div class="carousel-caption">
        
      </a>
        </div>
      </div>
     
       </div>
    <!-- Left and right controls -->
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

  
  <hr>
  <div class="w3-container w3-padding-32 w3-center" style="padding: 50px; background:url('images/tomatoes.png') repeat center scroll;">  
    <h3>About Us, The Munchketeers!</h3><br>
    <img src="download.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="300" height="250">
    <div class="w3-padding-32">
      <h4><b>We are the Munchketeers!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>We explore the universe of unknownment.</p> <p>We have a passion for real good food, and we like to share our recipes.</p><p>Here you can find recipes for some rare interesting dishes, desserts, appetizers and drinks. </p><p>You can even rate our recipes and keep a log of your favourite ones!</p>
    </div>
  </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="overlay">
<div class="pop-up" style="background-color: #4EA35F" >
  <a href="signup.php">
  <h3 style="color: black;">Subscribe to be Awesome</h3>
  </a>
  <span class="nope" style="color: white;">Don't be awesome</span>
</div>
</div>
<!-- Footer -->
<?php require_once "footer.php"; ?>
<!-- End page content -->
</div>
<script src="js/calc.js"></script>
</body>
</html>