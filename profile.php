<?php session_start(); ?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" conetnt="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" Href="css/style.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.mins.js"></script>
   <title>Document</title>
   <style>
       *{
           font-family: sans-serif;
       }
   </style>
</head>
<body style="background-image: url('http://rfsdelivers.com/images/restaurant-inc/04-01/04-01-Healthy-Food.jpg'); background-repeat: no-repeat; background-position:center;background-size:cover;"> 
<br>
<?php require_once "nav.php" ?>   
<style>
        *{
            font-family: sans-serif;
        }
        .error{
            color:#f00;
        }
        .profilecontainer{
            margin:0px auto;
            text-align: center;
        }
        .profilecontainer img{
            padding-bottom:10px;
            border: 10px #bbb double;
            width:300px;
            height:300px;
            border-radius: 50%;
            padding:10px;
        }
        .profilecontainer span{
            display: inline-block;
            width:49%;
        }
        .profilecontainer .left{
            text-align: right;
        }
        .profilecontainer .right{
            text-align: left;
        }
        .background-image{
            display: stretch;
            border-image-repeat: no-repeat;
            text-align: center;
        }
    </style>

    <br><br>

<?php

    $name = $_SESSION['name'];
        $imagedir1 = "$name/image.png";
        $imagedir2 = "$name/image.jpg";

if(file_exists($imagedir2)){
$imagedir = $imagedir2;
}elseif (file_exists($imagedir1)) {
$imagedir = $imagedir1;
}

else{

        $imagedir = "default.png";
}

    ?>

<br><br><br>
<div class="profilecontainer">
    
    <img src="<?php echo $imagedir ?>">
    <h3>
        <span class="left">Name:&nbsp;</span>
        <span class="right"><?php echo $_SESSION["name"] ?></span>
    </h3>
    <h4>
        <span class="left">Email:&nbsp;</span>
        <span class="right"><?php echo $_SESSION["email"] ?></span>

    </h4>
</div>
<div style="text-align: center;">
<p><a href="myfavoriterecipes.php">My favorite Recipes</a></p>
<p><a href="submitarecipe.php">Submit a Recipe</a></p>
<p><a href="logout.php">Logout</a></p>
<p><a href="COMMENTS.php">Logout</a></p>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once "footer.php"; ?>
</body>
</html>