<!DOCTYPE html>
<html>
<head>
<style>
div.container {
   width: 100%;
   border: 1px solid gray;
}

header, footer {
   padding: 1em;
   color: white;
   background-color: black;
   clear: left;
   text-align: center;
}

nav {
   float: left;
   max-width: 550px;
   height:450px;
   margin: 20;
   padding: 0em;
}

nav ul {
   list-style-type: none;
   padding: 0;
}
  
nav ul a {
   text-decoration: none;
}

article {
   margin-left: 170px;
   border-left: 1px solid gray;
   padding: 1em;
   overflow: hidden;
   height:450px;
}
</style>
</head>
<body>

<?php require_once "nav.php"; ?>
 
<nav>
 <ul>
   <img src="http://www.magic4walls.com/wp-content/uploads/2016/03/pieces-of-watermelon-and-raspberry-in-cocktail-glass-next-to-watermelon-slices-694x417.jpg" style="text-align: center; height: 300px;width: 456px;">
   <h3 style="text-align: center;">Rate this Recipe:</h3><?php require_once "rate.php"; ?>
 </ul>
</nav>

<article>
<center>
<h1>Ingredients:</h1>
<ul>
 <p>12 ounces raspberries (about 2 1/2 cups)</p>
 <p>2 cups dry red wine</p>
 <p>1/2 cup Brandy</p>
 <p>1 whole vanilla bean, split and scraped, seeds and pod reserved</p>
 <p>1 tablespoon zest from 1 lemon</p>
 <p>1 cup sugar</p>
</ul>
</center>
</article>
<br><hr>
<section>
<h1>Directions:</h1>
<p>Place the raspberries in a sealable glass jar and mash them with a spoon or muddler until just broken up enough to release juice. Add wine, seal, and shake the jar. Let steep for 2 days.
<br>
Pour brandy in pint-sized sealable glass jar along with the vanilla bean, split and scraped, and the lemon zest. Seal and shake the jar, then let steep for 2 days.
<br>
Strain the raspberry-wine mixture through strainer lined with cheesecloth. Reserve the raspberries for another use, if desired. Set aside one cup of infused wine and pour remainder into small saucepan. Add sugar. Heat over medium heat until sugar is dissolved and mixture is syrupy, 5 to 7 minutes. Let syrup cool to room temperature.
<br>
Strain brandy through fine mesh strainer lined with cheesecloth. Combine infused brandy with raspberry syrup in quart-sized sealable jar. Add reserved cup raspberry wine. Seal and shake, then let rest at room temperature for 2 days. Refrigerate and store for up to 1 month</p>
</section>


<footer>Copyright &copy; W3Schools.com</footer>

</div>

</body>
</html>