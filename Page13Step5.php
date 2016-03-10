<!DOCTYPE html>
<html lang="en-US">

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->decoration = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
	<!--- Basic Page Needs
    ================================================== -->
	<title>PartyJoy | Step 5</title>
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

<body id="step5">

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
		<h1 class="headline">Decoration</h1>
	</div>

	<div class="one-fifth" id="for-the-table">
		<h3 class="option">For the Table</h3>
		<ul class="decoration list">
			<li><p class="decoration text">Knife & Server Set $50</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/knife-server.png" alt="knife server Set"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Knife-Server-Set';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Personalized Napkins $50</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/napkins.png" alt="napkins"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Personalized-Napkins';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Mason Jars $50</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/mason-jar.png" alt="mason jar"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Mason-Jars';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fifth" id="flower">
		<h3 class="option">Flower Options</h3>
		<ul class="decoration list">
			<li><p class="decoration text">Rose $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/rose.png" alt="rose"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Rose';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Lily $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/lily.png" alt="lily"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Lily';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Sunflower $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/sunflower.png" alt="sunflower"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Sunflower';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fifth" id="balloon">
		<h3 class="option">Balloon Options</h3>
		<ul class="decoration list">
			<li><p class="decoration text">Colorful Ballon $60</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/balloon1.png" alt="colorful balloon"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Colorful-Ballon';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Heart Ballon $60</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/balloon2.png" alt="heart balloon"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Heart-Ballon';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Happy Birthday Ballon $60</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/balloon3.png" alt="happy birthday balloon"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Happy-Birthday-Ballon';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fifth" id="accessories">
		<h3 class="option">Accessories</h3>
		<ul class="decoration list">
			<li><p class="decoration text">Gift Tags $40</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/tag.png" alt="gift tags"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Gift-Tags';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Banner $40</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/banner.png" alt="banner"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Banner';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Thank You Card $40</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/card.png" alt="thank you card"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Thank-You-Card';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fifth" id="lighting">
		<h3 class="option">Lighting Options</h3>
		<ul class="decoration list">
			<li><p class="decoration text">Home Lighting $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/lighting-home.png" alt="lighting home"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Home-Lighting';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Christmas Lighting $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/lighting-christmas.png" alt="lighting christmas"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Christmas-Lighting';">Add to Cart!</button>
			</li>
			<li><p class="decoration text">Outdoor Lighting $100</p>
				<a class="decoration link" href="http://www.google.com/" target="_blank">
					<img class="decoration-pic" src="Image/lighting-outdoor.png" alt="lighting outdoor"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page13Step5.php?item=Outdoor-Lighting';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="Page12Step4.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page14Step6.php">
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
