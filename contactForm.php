<!DOCTYPE html>
<html>

<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PartyJoy | Contact</title>
    
    <meta charset="utf-8">
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
		    <a href="page9Step1HL.html">Wedding</a>
		    <a href="page9Step1HL.html">Birthday Party</a>
		    <a href="page9Step1HL.html">House Warming</a>
		    <a href="page9Step1HL.html">Baby Shower</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Venue</button>
		  <div class="dropdown-content">
		    <a href="Page11Step3.html">Hotel</a>
		    <a href="Page11Step3.html">Church</a>
		    <a href="Page11Step3.html">Outdoor</a>
		    <a href="Page11Step3.html">Backyards</a>
		  </div>
		 </div>
		 <div class="dropdown">
		  <button class="dropbtn">Catering</button>
		  <div class="dropdown-content">
		    <a href="Page12Step4.html">Meal</a>
		    <a href="Page12Step4.html">Drinks</a>
		    <a href="Page12Step4.html">Dessert</a>
		    <a href="Page12Step4.html">Snacks</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Decoration</button>
		  <div class="dropdown-content">
		  	<a href="Page13Step5.html">Table</a>
		    <a href="Page13Step5.html">Flower</a>
		    <a href="Page13Step5.html">Ballon</a>
		    <a href="Page13Step5.html">Accessories</a>
		    <a href="Page13Step5.html">Lighting</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Service</button>
		  <div class="dropdown-content">
		    <a href="Page14Step6.html">EMC&DJ</a>
		    <a href="Page14Step6.html">Photo</a>
		    <a href="Page14Step6.html">Video</a>
		    <a href="Page14Step6.html">Cleaning</a>
		    <a href="Page14Step6.html">Serving</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Attire</button>
		  <div class="dropdown-content">
		    <a href="Page15Step7.html">Dress</a>
		    <a href="Page15Step7.html">Suit</a>
		    <a href="Page15Step7.html">Hair Style</a>
		    <a href="Page15Step7.html">Makeup</a>
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
    
<div class="row item" id="contactUS">
   
	<div id="containerContact">
  		<form method="post" action="http://localhost:8888/webProject/contactConfirmation.php" accept-charset="utf-8">

	    <p>
      <label>Your Name</label>
      <input type="text" name="name" placeholder="Lisa Lee"/>
      </p>
        <p>
      <label>Email Address</label>
      <input name="email" type="email" placeholder="lisaLee@gmail.com">
      </p>
          
      <p>
      <label>Message</label>
      <textarea name="message" placeholder=""></textarea>
      </p>
    <input type="submit" value="Submit"/>
  </form>
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