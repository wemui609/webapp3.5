<!DOCTYPE html>
<html>
<head>
  <title>New York Steak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="css/style4.css">


<style>
  
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-sidenav a {padding:20px}

</style>

</head>
<body style="background-color: #DFC8B4;">
<br><br><br><br><br><br><br>

<h1 style="text-align: center;">New York Strip Steak</h1>
<div>
<nav>
 <ul>
<img src="http://www.2createabody.com/images/grilled_steak.jpg" style="text-align: center; height: 300px;width: 550px;">
<br>
<h3 style="text-align: center;">Rate this Recipe:</h3><?php require_once "rate.php"; ?>
<br>
 </ul>
</nav>
<article>
<br>
<center>
<h1>Ingredients:</h1>
<ul>
  <p>4 pieces top sirloin steaks or 4 pieces rib eye steaks</p>
  <p>4 -6 teaspoons salt (depending on taste)</p>
  <p>4 teaspoons paprika</p>
  <p>2 teaspoons ground black pepper</p>
  <p>1 teaspoon onion powder</p>
  <p>1 teaspoon garlic powder</p>
  <p>1 teaspoon cayenne pepper</p>
  <p>1⁄2 teaspoon coriander</p>
  <p>1⁄2 teaspoon turmeric</p>
</ul>
</center>
</article>
<br><hr>
<section>
<h1>Directions:</h1>
<p>Mix together seasoning ingredients and rub into each side of steak.</p>
<p>Grill steaks on a large frying pan over medium-high heat.</p> 
<p>Press down on steak with spatula or tongs to sear the edges.</p>
</section>
</div>


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

<!-- Footer -->
<?php require_once "footer.php"; ?>

<script src="js/calc2.js"> $("a.inner").click(function() {      
  $(this).parent().toggleClass("active");
});
$("a.outer").click(function() {      
  $(this).parent().parent().toggleClass("active");
});</script>

</body>
</html>
