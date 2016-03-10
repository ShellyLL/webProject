<!DOCTYPE html>
<html>

<?php
	$xml = simplexml_load_file("db.xml"); 
	$occasion = $xml->occasion;

	$venue = $xml->venue;
    foreach($xml->venues->children() as $v) {
		if ($v->getName() == $venue) {
			$venuePrice = $v->price;
			break;
		}
	}
	$catering = $xml->catering;
	foreach($xml->caterings->children() as $v) {
		if ($v->getName() == $catering) {
			$cateringPrice = $v->price;
			break;
		}
	}
	$decoration = $xml->decoration;
	foreach($xml->decorations->children() as $v) {
		if ($v->getName() == $decoration) {
			$decorationPrice = $v->price;
			break;
		}
	}
	$service = $xml->service;
	foreach($xml->services->children() as $v) {
		if ($v->getName() == $service) {
			$servicePrice = $v->price;
			break;
		}
	}
	$attire = $xml->attire;
	foreach($xml->attires->children() as $v) {
		if ($v->getName() == $attire) {
			$attirePrice = $v->price;
			break;
		}
	}

	$subtotal = $venuePrice + $cateringPrice + $decorationPrice + $servicePrice + $attirePrice;
	$tax = $subtotal * 0.0875;
	$total = $subtotal + $tax;

	$guestnumber = $xml->guestnumber;
	$location = $xml->location;
?>

<head>
	<title>PartyJoy | CheckOut</title>
	<!---common-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---css & js-->
    <link rel="stylesheet" type="text/css" href="Css/Page7EventDetailsStyle.css">
    <link rel="stylesheet" type="text/css" href="Css/commonStyle.css">
	<script src="Js/jquery-1.7.2.min.js"></script>
	<!---favicon-->
	<link rel="shortcut icon" href="Image/logoOnly.png" >
    <link rel="icon" href="Image/logoOnly.png">
</head>
<body>
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
<div class="review">
	<br>
	<p>Review your order before ready to go</p>
	<br>
</div>
<div class="bodyContainer">
	<div class="singleStepContainer">
		<img class="icon" src="Image/occassionIcon.png" alt="occassionIcon">
		<p class="item">Your Occasion</p>
		<p class="details"><?php print $occasion; ?></p>
		<br><br><br><br><br><br>
		
	</div>

	<div class="singleStepContainer">
		<img class="icon" src="Image/infoIcon.png" alt="infoIcon">
		<p class="item">Liitle About You</p>
		<p class="details">guest#: <?php print $guestnumber; ?></p>
		<p class="details">location: <?php print $location; ?></p>
		<br><br><br><br><br><br>
		
	</div>

	<div class="singleStepContainer">
		<img class="icon" src="Image/venueIcon.png" alt="venueIcon">
		<p class="item">Venue</p>
		<p class="details"><?php print $venue; ?></p>
		<p class="details">$<?php print $venuePrice; ?></p>
		
		<br><br><br><br><br><br>
		
	</div>

	<div class="singleStepContainer">
		<img class="icon" src="Image/cateringIcon.png" alt="cateringIcon">
		<p class="item">Catering</p>
		<p class="details"><?php print $catering; ?></p>
		<p class="details">$<?php print $cateringPrice; ?></p>
		
		<br><br><br><br><br><br>
		
	</div>
	<div class="singleStepContainer">
		<img class="icon" src="Image/decorationIcon.png" alt="decoarationIcon">
		<p class="item">Decoration</p>
		<p class="details"><?php print $decoration; ?></p>
		<p class="details">$<?php print $decorationPrice; ?></p>
		
		<br><br><br><br><br><br>
		
	</div>

	<div class="singleStepContainer">
		<img class="icon" src="Image/serviceIcon.png" alt="serviceIcon">
		<p class="item">Service</p>
		<p class="details"><?php print $service; ?></p>
		<p class="details">$<?php print $servicePrice; ?></p>
		
		<br><br><br><br><br><br>
		
	</div>

	<div class="singleStepContainer">
		<img class="icon" src="Image/dressIcon.png" alt="dressIcon">
		<p class="item">Attire</p>
		<p class="details"><?php print $attire; ?></p>
		<p class="details">$<?php print $attirePrice; ?></p>
		
		<br><br><br><br><br><br>
		
	</div>
</div>

<!---total-->
<div class="total">
	<p>SubTotal: $<?php print $subtotal; ?></p>
	<p>Discount: $0</p>
	<p>Tax: $<?php print $tax; ?></p>
	<p>Total: $<?php print $total; ?></p>
</div>

<!---go to payment -->
<div class="paynow">
	<p><a href="page17PaymentHL.html">Pay Now</a></p>
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