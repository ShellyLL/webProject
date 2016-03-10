<!DOCTYPE html>
<html lang="en-US">

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->service = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
	<!--- Basic Page Needs
    ================================================== -->
	<title>PartyJoy | Step 6</title>
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

<body id="step6">

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
		<h1 class="headline">Service</h1>
	</div>

	<div class="one-third" id="emcee-dj">
		<h3 class="option">EMC & DJ</h3>
		<ul class="service list">
			<li><p class="service text">Emcee $500</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/emcee.png" alt="emcee"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=Emcee';">Add to Cart!</button>
			</li>
			<li><p class="service text">DJ $400</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/dj.png" alt="dj"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=DJ';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-third" id="photo-video">
		<h3 class="option">Phote & Video</h3>
		<ul class="service list">
			<li><p class="service text">Photography $700</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/photo.png" alt="photo"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=Photography';">Add to Cart!</button>
			</li>
			<li><p class="service text">Videography $700</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/video.png" alt="video"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=Videography';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-third" id="cleaning-serve">
		<h3 class="option">Cleaning & Serving</h3>
		<ul class="service list">
			<li><p class="service text">Clean Up $400</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/cleaning.png" alt="cleaning"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=Clean-Up';">Add to Cart!</button>
			</li>
			<li><p class="service text">Table Waiter $400</p>
				<a class="service link" href="http://www.google.com/" target="_blank">
					<img class="service-pic" src="Image/waiter.png" alt="waiter"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page14Step6.php?item=Table-Waiter';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="Page13Step5.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page15Step7.php">
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