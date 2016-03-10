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
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PartyJoy | Confirmation</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---css & js-->
    <link rel="stylesheet" type="text/css" href="Css/Page1HomePageStyle.css">
    <link rel="stylesheet" type="text/css" href="Css/commonStyle.css">
	<script src="Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="Js/pptBox.js"></script>
    
	 <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="page2ExamplesHL.css">
    
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

<div class="row item">
	<br><br><br><br>
</div>

	<div class="row item" id="confirmation">
    	<div id="confirmationFirst">
    		<h2>Thank you for Shopping with PartyJoy!</h2>
        </div>
    </div>
    
    <br>
    <br>
    
    <div class="row item" id="confirmation2">
    		
            <div class="seven columns">
            <h2>Order Information: </h2>
        	<p class="confirmationText">Event: <?php print $occasion; ?></p>
            <p class="confirmationText">Guest Number: <?php print $guestnumber; ?></p>
            <p class="confirmationText">Venue Location: <?php print $venue; ?></p>
            <p class="confirmationText">Catering: <?php print $catering; ?></p>
            <p class="confirmationText">Docoration: <?php print $decoration; ?></p>
            <p class="confirmationText">Service: <?php print $service; ?></p>
            <p class="confirmationText">Dressing: <?php print $attire; ?></p>
            <br>
            </div>
            
            <div class="four column" id = "confirmationImage">
            	<div id="focus" >
			 <script>
			 var box =new PPTBox();
			 box.width = 300; //宽度
			 box.height = 200;//高度
			 box.autoplayer = 3;//自动播放间隔时间
		
			 //box.add({"url":"图片地址","title":"悬浮标题","href":"链接地址"})
			 box.add({"url":"Image/sponsorImage2.jpg","href":"http://www.davidsbridal.com/","title":""})
			 box.add({"url":"Image/halfmoon-bay.png","href":"http://www.ritzcarlton.com/en/Properties/HalfMoonBay","title":""})
			 box.add({"url":"Image/santa-clara-mission.png","href":"https://www.scu.edu/university-operations/facilities/space-data/building-information/mission-church/","title":""})
			 box.add({"url":"Image/ritz-carlton.png","href":"http://www.ritzcarlton.com/","title":""})
			 box.show();
			</script>
		</div>
		<!--
           <a href="http://www.davidsbridal.com/" target="_blank"><img class="sponsorImage" src="Image/sponsorImage2.jpg" alt="sponsor"/></a> 
            </div>
        -->
       
    </div>
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