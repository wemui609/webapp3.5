<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>.error {color: #FF0000;}</style>
</head>
<body style="background-color: #DFC8B4;">

<!-- Sidenav (hidden by default) -->
<?php require_once "nav.php"; ?>

<form action="logincheck.php" enctype='multipart/form-data' method="post">
  <div class="imgcontainer">
  <br><br><h2 style="text-align: center;">Submit A Recipe</h2>
    <img src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/glossy-black-3d-buttons-icons-food-beverage/056795-glossy-black-3d-button-icon-food-beverage-knife-fork-sc44.png" alt="Avatar" class="avatar">
  </div>
  <center>
  <div class="container">
    <label><b>Recipe Name</b></label>
    <input type="text" placeholder="Enter Name of Recipe" name="uname" required>
<label><b>Photo</b></label>
    <input style="border: 2px solid #000000; background-color:#DFC8B4;"; type="file" name="photo"><br></div>

    <label style="background-color: #DFC8B4;"><b>Directions</b></label>
    <form action="/html/tags/html_form_tag_action.cfm" method="post" style="background-color: #DFC8B4;">
<div style="background-color: #DFC8B4;">
<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;background-color: #DFC8B4;">
Directions:
</textarea>
<br><br>
<label style="background-color: #DFC8B4;"><b>Ingredients</b></label>
    <form action="/html/tags/html_form_tag_action.cfm" method="post" style="background-color: #DFC8B4;">
<div style="background-color: #DFC8B4;">
<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em; background-color:#DFC8B4;">
Ingredients:
</textarea>
</div>

</form>
</div>

</form>
<div class="container" style="background-color: #DFC8B4;">
    <button type="submit" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;background-color: #2084f3"><a href="myfavoriterecipes.php">Submit</a></button>
  
  </div>
  <div class="container" style="background-color: #DFC8B4;">
    <button type="reset" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;">Cancel</button>

    <a href="index.php" onclick="w3_close()">Recipe Me</a>
    
  

  </div>
  </center>
</form>



<!-- Footer -->
 <?php require_once "footer.php"; ?>

<script src="js/calc1.js"></script>

</body>
</html>

