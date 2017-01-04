<?php session_start(); ?>
<!-- php session -->
<!-- start HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" conetnt="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" Href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.mins.js"></script>
<style>
	*{
	font-family:sans-serif;
}
.error{
	color:#f00;
}
.profilecontainer{
margin:0px auto;
text-align:center;
}
.profilecontainer img{
padding-bottom:10px;
border:10px #bbb double;
width:300px;
height:300px;
border-radius:50%;
padding:10px;
}
.profilecontainer span{
display: inline-block;
width:49%;
}
.profilercontainer .left{
text-align: right;
}
.profilecontainer .right{
text-align: left;
}
</style>
</head>
<br>
<br>
<br>
<br>
<body style="background-image: url('http://rfsdelivers.com/images/restaurant-inc/04-01/04-01-Healthy-Food.jpg'); background-repeat: no-repeat; background-position:center;background-size:cover;">
<?php require_once "nav.php"; ?>
<!-- Continue HTML for our Page Heading -->
<h2>Your profile:</h2>

<!-- Call the data that is stored in the files that we've created in postprocess.php -->
<?php
// call the user variable stored in our session 
$user = $_SESSION['user'];

//call the file 'profile.txt' and treat each line as and item in an array called $profile
$profile = file("$user/profile.txt");

//assign the first two lines of profile.txt to two variables, $name and $email
// in addition use the trim method to renove any whitespace from these's lines
$name = trim($profile[0]);
$email = trim($profile[1]);
$user = trim($profile[2]);
$pw = trim($profile[3]);
?>

<div class="profilecontainer">
<!--Call our PHP variables inside of our HTML-->
<!--Call the variable 'user' To identify wjich image will be called as the src attribute-->
<img src="<?php echo $_SESSION['photo']?>">

<h3>
<span class="left">Name:&nbsp;</span>
<!-- Call the 'name' Variable to display in this span-->
<span class="right"><?php echo $name ?></span>
</h3>
<h4>
<span class="left">Email:&nbsp;</span>
<!--Call the 'email' varibale tto display in this span -->
<span class="right"><?php echo $email ?></span>
<br><br>
<a href="myfavoriterecipes.php">My favorite Recipes</a></p>
<p><a href="submitarecipe.php">Submit a Recipe</a></p>
<p><a href="logout.php">Logout</a></p>
</h4>
<h4>
</h4>
</div>
<br>
<br>
<br>
<br>

<?php require_once "footer.php"; ?>
</body>
</html>
