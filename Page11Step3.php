<!DOCTYPE html>
<html lang="en-US">

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->venue = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
	<!--- Basic Page Needs
    ================================================== -->
	<title>PartyJoy | Step 3</title>
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

<body id="step3">
	
	<!---common head-->
	<div class="header">
		<div class="logo">
			<img id="logoImage" src="Image/headerLogoImage.png" alt="logo" />
		</div>
		<div class="signInUp">
			
				<a title="Login to PartyJoy" href="Page5SignInXiaoyu.html" id="myacct"><img src="Image/myaccount.png" id="myaccount" alt="myaccounticon"></a>
			
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
		<h1 class="headline">Venue</h1>
	</div>

	<div class="one-fourth" id="hotel">
		<h3 class="option">Hotel Options</h3>
		<ul class="venue list">
			<li><p class="venue text">The Ritz-Carlton $1200</p>
				<a class="venue link" href="http://www.ritzcarlton.com/" target="_blank">
					<img class="venue-pic" src="Image/ritz-carlton.png" alt="ritz-carlton"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Ritz-Carlton';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Sheraton $800</p>
				<a class="venue link" href="http://www.sheraton.com/" target="_blank">
					<img class="venue-pic" src="Image/sheraton.png" alt="sheraton"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Sheraton';">Add to Cart!</button>
			</li>
			<li><p class="venue text">DoubleTree by Hilton $500</p>
				<a class="venue link" href="http://www.doubletree.com/" target="_blank">
					<img class="venue-pic" src="Image/doubletree.png" alt="doubletree"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=DoubleTree';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="church">
		<h3 class="option">Church Options</h3>
		<ul class="venue list">
			<li><p class="venue text">Duke Chapel $2000</p>
				<a class="venue link" href="https://chapel.duke.edu/" target="_blank">
					<img class="venue-pic" src="Image/duke-chapel.png" alt="duke-chapel"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Duke-Chapel';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Stanford Memorial Church $1500</p>
				<a class="venue link" href="http://web.stanford.edu/group/religiouslife/cgi-bin/wordpress/memorial-church/" target="_blank">
					<img class="venue-pic" src="Image/stanford-church.png" alt="stanford-church"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Stanford-Memorial-Church';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Mission Santa Clara $1000</p>
				<a class="venue link" href="https://www.scu.edu/missionchurch/" target="_blank">
					<img class="venue-pic" src="Image/santa-clara-mission.png" alt="santa-clara-mission"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Mission-Santa-Clara';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="outdoor">
		<h3 class="option">Outdoor Options</h3>
		<ul class="venue list">
			<li><p class="venue text">Half Moon Bay $2000</p>
				<a class="venue link" href="http://www.ritzcarlton.com/en/Properties/HalfMoonBay/" target="_blank">
					<img class="venue-pic" src="Image/halfmoon-bay.png" alt="halfmoon-bay"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Half-Moon-Bay';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Golden Gate Park $1200</p>
				<a class="venue link" href="https://goldengatepark.com/" target="_blank">
					<img class="venue-pic" src="Image/golden-gate-park.png" alt="golden-gate-park"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Golden-Gate-Park';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Shoreline Park $800</p>
				<a class="venue link" href="http://www.mountainview.gov/depts/cs/shoreline/" target="_blank">
					<img class="venue-pic" src="Image/shoreline-park.png" alt="shoreline-park"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Shoreline-Park';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="one-fourth" id="backyard">
		<h3 class="option">In My Backyard</h3>
		<ul class="venue list">
			<li><p class="venue text">Coyote Creek Center $500</p>
				<a class="venue link" href="http://google.com" target="_blank">
					<img class="venue-pic" src="Image/coyote-creek.png" alt="coyote creek"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Coyote-Creek-Center';">Add to Cart!</button>
			</li>
			<li><p class="venue text">Ewoodys Community Center $300</p>
				<a class="venue link" href="http://google.com" target="_blank">
					<img class="venue-pic" src="Image/ewoodys.png" alt="ewoodys"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=Ewoodys-Community-Center';">Add to Cart!</button>
			</li>
			<li><p class="venue text">North Park Community Center $200</p>
				<a class="venue link" href="http://google.com" target="_blank">
					<img class="venue-pic" src="Image/north-park.png" alt="north park"></a>
				<br><br>
				<img class="fav icon" src="Image/fav.png" alt="fav">
				<button onclick="location.href='/webProject/page11Step3.php?item=North-Park-Community-Center';">Add to Cart!</button>
			</li>
		</ul>
	</div>

	<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="Page10Step2.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page12Step4.php">
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
