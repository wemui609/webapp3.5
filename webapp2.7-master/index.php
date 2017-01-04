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
  <a href="index.php" onclick="w3_close()">Recipe Me</a>
  <a href="login.php" onclick="w3_close()">Login</a>
  <a href="signup.php" onclick="w3_close()">Sign Up</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-#C1CFDA w3-xlarge w3-padding-xlarge" style="max-width:1900px;margin:auto;background-color:#DD0B0B;color: black;">
    <div class="w3-opennav w3-left w3-hover-text-grey" onclick="w3_open()">&#9776;</div>
    <div class="w3-right">
      

    </div>
    <div class="w3-center"><a href="index.php"><img src="logo2.png" width="350" height="200"></a></div>
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

  <!-- First Photo Grid-->
   <!--<br><br><br><br><br><br><br><br>
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter" id="food">
    <a href="dessert.php">
     <img src="http://therawchef.com/wp-content/themes/Anatta-Theme/images/sales-page/desert.jpg" alt="Sandwich" style="width:100%">
    </a>
       <h3>The Perfect Dessert, A Real NYC Classic</h3>
      <p>These decadent Chocolate mousse squares are to die for!</p>
    </div>
    <div class="w3-quarter">
    <a href="steak.php">
      <img src="http://esq.h-cdn.co/assets/cm/15/05/54cd9252ec3a9_-_esq-steak-pan-sauce-020513-19tcti-xlg.jpg" alt="Steak" style="width:100%">
    </a>
      <h3>Let Me Tell You About This Steak</h3>
      <p>Succulent medium rare beef cooked in a tangy steak sauce. This dish screams Delish!</p>
    </div>
    <div class="w3-quarter">
    <a href="drink.php">
      <img src="https://s-media-cache-ak0.pinimg.com/236x/24/cd/50/24cd505978ce4a2bac3cfa767b1f6d6e.jpg" alt="Cherries" style="width:80%">
    </a>
      <h3>Raspberries, interrupted</h3>
      <p>This drink will knock you off your feet with a sour raspberry juice and a splash of vodka!</p>
    </div>
    <div class="w3-quarter">
    <a href="spaghetti.php">
      <img src="https://i.ytimg.com/vi/x4P5hFK5QZA/maxresdefault.jpg" alt="Pasta and Wine" style="width:100%">
    </a>
      <h3>Spaghetti Muffins</h3>
      <p>The name says it all and your friends will fall into jealousy that is when they taste these puppies.</p>
    </div>
  </div> !-->
  
  <hr>
  <div class="w3-container w3-padding-32 w3-center" style="padding: 50px; background-image: url('images/tomatoes.png');">  
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
<footer class="w3-center w3-#C1CFDA w3-padding-64" style="background-color:#526D2E;max-width:1900px;margin:auto;">
  <div class="w3-xlarge" style="background-color:#526D2E;color: black;">
    <a href="https://www.facebook.com/" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="https://www.pinterest.com/" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="https://twitter.com/" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="https://www.linkedin.com/" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <a href="login.php" class="w3-hover-text-red" title="Go to top"><i class="fa fa-arrow-up"></i></a>
  </div>
  
</footer>


<!-- End page content -->
</div>
<script src="js/calc.js"></script>

</body>
</html>
