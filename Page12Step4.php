<!DOCTYPE html>
<html lang="en-US">

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->catering = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
	<!--- Basic Page Needs
    ================================================== -->
	<title>PartyJoy | Step 4</title>
	<meta charset="utf-8">
	<meta name="description" content="wedding, holiday, corporation, home party planning" />
	<meta name="author" content="Hanzi Li, Xiaoyu Li, Xin Ye, Jiaoni Zhou" />
	<meta name="copyright" content="Hanzi Li, Xiaoyu Li, Xin Ye, Jiaoni Zhou" />
	<meta name="keywords" content="wedding, holiday, corporation, home party planning" />

	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	 <!-- CSS
    ==================================================  -->
	<link rel="stylesheet" href="MyStyleJZ.css">
	<link rel="stylesheet" type="text/css" href="Css/commonStyle.css">

	<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="Image/logoOnly.png" >
    <link rel="icon" href="Image/logoOnly.png">
</head>

<body id="step4">

	<!---common head-->
	<div class="header">
		<div class="logo">
			<img id="logoImage" src="Image/headerLogoImage.png" alt="logo" />
		</div>
		<div class="signInUp">
			<ul class="signInUpList">
				<li id="logIn"><a title="Login to PartyJoy" href="Page5SignInXiaoyu.html">Log In</a></li>
				<li id="signUp"><a title="Signup to PartyJoy" href="Page4SignUpXiaoyu.html">Sign Up</a></li>	
			</ul>
		</div>
	</div>
	
	<div class="navbar">
		<div class="dropdown" id="home">
			<a class="nodropdown" href="Page1HomePage.html">Home</a>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Occasion</button>
			<div class="dropdown-content">
		    	<a href="page9Step1HL.php">Wedding</a>
		    	<a href="page9Step1HL.php">Birthday Party</a>
		    	<a href="page9Step1HL.php">House Warming</a>
		    	<a href="page9Step1HL.php">Baby Shower</a>
		    </div>
		</div>
		<div class="dropdown">
		    <button class="dropbtn">Venue</button>
		    <div class="dropdown-content">
		    	<a href="Page11Step3.php">Hotel</a>
		    	<a href="Page11Step3.php">Church</a>
		    	<a href="Page11Step3.php">Outdoor</a>
		    	<a href="Page11Step3.php">Backyards</a>
		    </div>
		 </div>
		 <div class="dropdown">
		    <button class="dropbtn">Catering</button>
		    <div class="dropdown-content">
		    	<a href="Page12Step4.php">Meal</a>
		    	<a href="Page12Step4.php">Drinks</a>
		    	<a href="Page12Step4.php">Dessert</a>
		    	<a href="Page12Step4.php">Snacks</a>
		    </div>
		</div>
		<div class="dropdown">
		    <button class="dropbtn">Decoration</button>
		    <div class="dropdown-content">
		  		<a href="Page13Step5.php">Table</a>
		    	<a href="Page13Step5.php">Flower</a>
		    	<a href="Page13Step5.php">Ballon</a>
		    	<a href="Page13Step5.php">Accessories</a>
		    	<a href="Page13Step5.php">Lighting</a>
		    </div>
		</div>
		<div class="dropdown">
		    <button class="dropbtn">Service</button>
		    <div class="dropdown-content">
		    	<a href="Page14Step6.php">EMC&DJ</a>
		    	<a href="Page14Step6.php">Photo</a>
		    	<a href="Page14Step6.php">Video</a>
		    	<a href="Page14Step6.php">Cleaning</a>
		    	<a href="Page14Step6.php">Serving</a>
		    </div>
		</div>
		<div class="dropdown">
		    <button class="dropbtn">Attire</button>
		    <div class="dropdown-content">
		    	<a href="Page15Step7.php">Dress</a>
		    	<a href="Page15Step7.php">Suit</a>
		    	<a href="Page15Step7.php">Hair Style</a>
		    	<a href="Page15Step7.php">Makeup</a>
		    </div>
		</div>
		<div class="dropdown">
		    <button class="dropbtn">Example</button>
		    <div class="dropdown-content">
		    	<a href="page2ExamplesHL.html">Wedding</a>
		    	<a href="page2ExamplesHL.html">Birthday Party</a>
		    	<a href="page2ExamplesHL.html">House Warming</a>
		    	<a href="page2ExamplesHL.html">Baby Shower</a>
		    </div>
		</div>
		<div class="dropdown" id="more">
			<a class="nodropdown" href="contactUS.html">More</a>
		</div>		
	</div>
	<!---common head end-->
	
	<div class="category">
		<h1 class="headline">Catering</h1>
	</div>

	<div class="one-fourth" id="main-course">
		<h3 class="option">Main Course Options</h3>
		<ul class="catering list">
			<li><p class="catering text">Beef $200</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/beef.png" alt="beef"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Beef';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Fish $300</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/fish.png" alt="fish"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Fish';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Scallop $300</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/scallop.png" alt="scallop"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Scallop';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Vegen $150</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/vegan.png" alt="vegan"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Vegen';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="drink">
		<h3 class="option">Drink Options</h3>
		<ul class="catering list">
			<li><p class="catering text">Red Wine $200</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/red-wine.png" alt="red wine"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Red-Wine';">Add to Cart!</button>
			</li>
			<li><p class="catering text">White Wine $200</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/white-wine.png" alt="white wine"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=White-Wine';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Beer $100</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/beer.png" alt="beer"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Beer';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Coke $70</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/coke.png" alt="coke"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Coke';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="dessert">
		<h3 class="option">Dessert Options</h3>
		<ul class="catering list">
			<li><p class="catering text">Tiramisu $100</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/tiramisu.png" alt="tiramisu"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Tiramisu';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Cheesecake $100</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/cheesecake.png" alt="cheesecake"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Cheesecake';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Cupcake $100</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/cupcake.png" alt="cupcake"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Cupcake';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Ice Cream $70</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/ice-cream.png" alt="ice cream"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Ice-Cream';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="snack">
		<h3 class="option">Snack Options</h3>
		<ul class="catering list">
			<li><p class="catering text">Chips $50</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/chips.png" alt="chips"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Chips';">Add to Cart!</button>
			</li>
			<li><p class="catering text">French Fries $50</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/french-fries.png" alt="french fries"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=French-Fries';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Pretzel $50</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/pretzels.png" alt="pretzels"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Pretzel';">Add to Cart!</button>
			</li>
			<li><p class="catering text">Fruit $100</p>
				<a class="catering link" href="http://www.google.com/" target="_blank">
					<img class="catering-pic" src="Image/fruit.png" alt="fruit"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page12Step4.php?item=Fruit';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="Page11Step3.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page13Step5.php">
				<img class="prev-next-pic" src="Image/next.png" alt="prev"></a></li>
		</ul>
	</div>

	<!---footer-->
	<div class="footer"> 
			<div class="social">
				<p>Connect with Us: </p>
		    	<a href="http://www.facebook.com"><img src="Image/facebook.png" alt="facebookicon" /> </a>
		    	<a href="http://www.linkedin.com"><img src="Image/linkedin.png" alt="linkedinicon" /> </a>
		    	<a href="http://www.twitter.com"><img src="Image/twitter.png" alt="twittericon" /> </a>
		    	<a href="http://www.instagram.com"><img src="Image/ins.png" alt="insicon" /> </a>
		    </div>
		    <div class="footnavbar">
				<a class="foot" href="aboutUs.html">About Us</a>
				<a class="foot" href="contactUS.html">Contact Us</a>
				<a class="foot" href="career.html">Career</a>
				<a class="foot" href="help.html">Help</a>
			</div>
	        <div class="copyright">© Made by PartyJoy All rights reserved. Photo source: Google Photo</div>       
	</div> 
	<!---footer end-->
</body>
</html>
