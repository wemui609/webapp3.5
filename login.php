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
  <br>
  <br>
    <img src="https://cdn4.iconfinder.com/data/icons/people-of-service/512/People_Services_chef_woman-512.png" alt="Avatar" class="avatar">
  </div>
  <center>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<div></div>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pw" required>
<div class="container" style="background-color: #DFC8B4;">
    <button type="submit" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;background-color: #2084f3">Submit</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  <div class="container" style="background-color: #DFC8B4;">
    <button type="reset" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;">Cancel</button>

    <a href="index.php" onclick="w3_close()">Recipe Me</a>
    
    <span class="psw">Forgot <a href="lookup.php">password?</a></span>

  </div>
  </center>
</form>



<!-- Footer -->
 <?php require_once "footer.php"; ?>

<script src="js/calc1.js"></script>

</body>
</html>

