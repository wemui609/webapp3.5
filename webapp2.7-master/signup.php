<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<style>
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-image: url(http://cdn-maf1.heartyhosting.com/sites/muscleandfitness.com/files/styles/full_node_image_1090x614/public/healthy-food.jpg?itok=3jydHCdz);
      border: solid 1px #c3c3c3;
      border: 2px solid black;
}
#panel {
    padding: 50px;
    display: none;
}
#flip { background-color: white;
    color: black;
    border: 2px solid black;
}
</style>
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

<br><br><br><br><br><br>
 <div class="main-content">
        <!-- You only need this form and the form-basic.css -->
        <form class="form-basic" method="post" action="postprocess.php" enctype ='multipart/form-data' style="background-color: #DFC8B4;">
            <hr>
            <br>
            <div class="form-title-row">
           <div id="flip"> 
                <h1 style="padding: 50px;">Sign Up</h1>
            </div> 
            </div>
            <div id="panel">
            <div class="form-row">
                <center left>
                <label>
                    <span></span>
                    <input style="border: 1px solid #000000"; type="name" placeholder="Name" name="name" required>
                </label>
            </div>
            </center left>
            <div class="form-row">
             <center left>
                <label>
                    <span></span>
                    <input style="border: 1px solid #000000"; type="email" placeholder="Email" name="email" required>
                </label>
            </div>
             </center left>
          <div class="form-row">
             <center left>
                <label>
                    <span></span>
                    <input style="border: 1px solid #000000"; type="user" placeholder="User" name="user" required>
                </label>
            </div>
             </center left>
             <br>
<center left>
<center>
<label>Photo:
</center>  
  <input style="border: 2px solid #000000; background-color:#DFC8B4;"; type="file" name="photo"><br>
</label>
</center>
<br>
            <div class="form-row">
           
                <center>
                <label>
                    <span style="color: maroon;">I agree to the terms and conditions</a></span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
                </center>
              
            </div>
           <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input style="border: 1px solid #000000"; type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
          </div>
        </div>
       
      </div>
            <div style="width:100%; height:100%" class="form-row">
            
                <button type="submit" style="background-color:#20A4F3;margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%">Register</button>
           </div>
      </div>
        </form>

        <?php 
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
    $pw = $_POST['pw'];

  $connection= mysqli_connect("localhost","root","","recipeme");

  $query= "INSERT INTO capture (`uid`, `time`, `name`, `email`, `pw`) 
  VALUES (NULL, NULL, '$name','$email', '$pw');";

  if($connection){
    echo "new record created";
  }else{
    echo $connection->error;
  }

  mysqli_query($connection, $query);

  mysqli_close($connection);
}

?>
          
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

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>