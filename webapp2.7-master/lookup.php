<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

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
</head>
<body style="background-image: url('http://rfsdelivers.com/images/restaurant-inc/04-01/04-01-Healthy-Food.jpg')"> 


<?php require_once "nav.php"; ?>
<h2>Lookup</h2>

	<form method="post" action="lookup.php">
		<label>UserName:<br>
			<input style="border: 1px solid #000000" ; type="text" name="user" required>
			<span class="error">*</span>
		</label>

		<input type="submit" name="submit" value="Submit">  
	</form>

<?php

if(isset($_POST['user'])) {

	$user = $_POST['user'];
		$imagedir1 = "$user/image.png";
		$imagedir2 = "$user/image.jpg";

if(file_exists($imagedir2)){
$imagedir = $imagedir2;
}elseif (file_exists($imagedir1)) {
$imagedir = $imagedir1;
}

else{

		$imagedir = "default.png";
}

	$profile = file("$user/profile.txt");



	$name = trim($profile[0]);
	$email = trim($profile[1]);
	} else{

		$imagedir = "default.png";
		$name = "name";
		$email = "email";
	}	
	?>

<div class="profilecontainer">
	
	<img src="<?php echo $imagedir ?>">
	<h3>
		<span class="left">Name:&nbsp;</span>
		<span class="right"><?php echo $name ?></span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right"><?php echo $email ?></span>
	</h4>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>