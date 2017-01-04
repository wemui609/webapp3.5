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

<form action="postprocess.php" enctype='multipart/form-data' method="post">
  <div class="imgcontainer">
  <br>
  <br><br><br><br><br><br><br>
    <img src="https://cdn4.iconfinder.com/data/icons/people-of-service/512/People_Services_chef_woman-512.png" alt="Avatar" class="avatar">
  </div>
  <center>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<div></div>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<div class="container" style="background-color: #DFC8B4;">
    <button type="button" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;background-color: #2084f3"><a href="confirmed.php"> Login</a></button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  <div class="container" style="background-color: #DFC8B4;">
    <button type="button" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;">Cancel</button>

    <a href="index.php" onclick="w3_close()">Recipe Me</a>
    
    <span class="psw">Forgot <a href="lookup.php">password?</a></span>

  </div>
  </center>
</form>
<?php 
if(isset($_POST['submit'])){
    if(empty($_POST['email']) || empty($_POST['pw']) ){
        echo "you left something blank";
    }else{
        $email=$_POST['email'];
        $pw=$_POST['pw'];

        $connection = mysqli_connect("localhost","root","","recipeme");

        $query = "SELECT * FROM capture WHERE pw='$pw' AND email='$email'";

        $loginCheck = mysqli_query($connection, $query);

        $row = mysqli_num_rows($loginCheck);

        echo $row;

        echo "<br>";

        if($row == 1){
            while($row = mysqli_fetch_assoc($loginCheck)){
                $_SESSION["uid"] = $row["uid"];
                echo $_SESSION["uid"].'<br>';

                $_SESSION["time"] = $row["time"];
                echo $_SESSION["time"].'<br>';
                
                $_SESSION["name"] = $row["name"];
                echo $_SESSION["name"].'<br>';
                
                $_SESSION["email"] = $row["email"];
                echo $_SESSION["email"].'<br>';
                
                $_SESSION["pw"] = $row["pw"];
                echo $_SESSION["pw"].'<br>';

                echo "<a href=\"profile.php\">proceed to profile</a>";
            }

        } else {
            echo "try again";
        }
        mysqli_close($connection);


    }

}

?>


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

<script src="js/calc1.js"></script>

</body>
</html>

