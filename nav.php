<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #DD0B0B;
}

li {
    float: left;
}

li a {
    display: block;
    color: #111; bold;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: white;
}
</style>


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
<script src="js/calc.js"></script>

