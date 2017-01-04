<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<h1>Submit Recipme</h1>
<hr>
<!-- begin htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="http://www.htmlcommentbox.com/static/skins/default/skin.css" />
 <script type="text/javascript" language="javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={  };} (function(){s=document.createElement("script");s.setAttribute("type","text/javascript");s.setAttribute("src", "http://www.htmlcommentbox.com/jread?page="+escape((window.hcb_user && hcb_user.PAGE)||(""+window.location)).replace("+","%2B")+"&opts=470&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>

<!-- end htmlcommentbox.com -->
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