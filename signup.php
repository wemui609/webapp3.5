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
<?php require_once "nav.php"; ?>

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
            
                <button type="submit" name="submit" style="background-color:#20A4F3;margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%">Register</button>
           </div>
      </div>
        </form>
          
    </div>
<!-- Footer -->
  <?php require_once "footer.php"; ?>

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