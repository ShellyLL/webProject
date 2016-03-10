<!DOCTYPE html>
<html lang="en-US">

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->attire = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
	<!--- Basic Page Needs
    ================================================== -->
	<title>PartyJoy | Step 7</title>
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

<body id="step7">

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
		<h1 class="headline">Attire</h1>
	</div>

	<div class="one-fourth" id="dress">
		<h3 class="option">Dress Options</h3>
		<ul class="attire list">
			<li><p class="attire text">Pronovias $2000</p>
				<a class="attire link" href="http://www.pronovias.com/" target="_blank">
					<img class="attire-pic" src="Image/pronovias.png" alt="pronovias"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Pronovias';">Add to Cart!</button>
			</li>
			<li><p class="attire text">Vera Wang $3000</p>
				<a class="attire link" href="http://www.verawang.com/" target="_blank">
					<img class="attire-pic" src="Image/vera-wang.png" alt="vera wang"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Vera-Wang';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="suit">
		<h3 class="option">Suit Options</h3>
		<ul class="attire list">
			<li><p class="attire text">Giorgio Armani $2000</p>
				<a class="attire link" href="http://www.armani.com/" target="_blank">
					<img class="attire-pic" src="Image/giorgio-armani.png" alt="giorgio armani"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Giorgio-Armani';">Add to Cart!</button>
			</li>
			<li><p class="attire text">Hugo Boss $1000</p>
				<a class="attire link" href="http://www.hugoboss.com/" target="_blank">
					<img class="attire-pic" src="Image/hugo-boss.png" alt="hugo boss"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Hugo-Boss';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="hair">
		<h3 class="option">Hair Styling Options</h3>
		<ul class="attire list">
			<li><p class="attire text">Long Hair $500</p>
				<a class="attire link" href="http://www.google.com/" target="_blank">
					<img class="attire-pic" src="Image/hair-long.png" alt="long hair"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Long-Hair';">Add to Cart!</button>
			</li>
			<li><p class="attire text">Short Hair $500</p>
				<a class="attire link" href="http://www.google.com/" target="_blank">
					<img class="attire-pic" src="Image/hair-short.png" alt="short hair"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Short-Hair';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="makeup">
		<h3 class="option">Makeup Options</h3>
		<ul class="attire list">
			<li><p class="attire text">Western Style $500</p>
				<a class="attire link" href="http://www.google.com/" target="_blank">
					<img class="attire-pic" src="Image/makeup-western.png" alt="western makeup"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Western-Style';">Add to Cart!</button>
			</li>
			<li><p class="attire text">Korean Style $500</p>
				<a class="attire link" href="http://www.google.com/" target="_blank">
					<img class="attire-pic" src="Image/makeup-korean.png" alt="korean makeup"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page15Step7.php?item=Korean-Style';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="Page14Step6.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page16CheckOut.php">
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