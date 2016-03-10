<!DOCTYPE html>
<html>

<?php
    if (isset($_GET['item'])) {
    	$xml = simplexml_load_file("db.xml"); 
    	$xml->occasion = $_GET['item'];
    	$xml->asXML("db.xml");
    }
?>

<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PartyJoy | Step 1</title>
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
    <br>
	<div class="row item">
		<div class="one column"></div>

    	<div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=Wedding';"><img class="howToImage" src="Image/step1Images/wedding.jpg" alt="wedding"></button>
        	    <div class="howToCaption"><h4>Wedding</h4></div>
            </div>
   		</div> <!-- end of seven colums-->


        <div class="three columns">
			<img class="howToImage" src="Image/step1Images/blank.jpg">
        </div>

        <div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=Birthday';"><img class="howToImage" src="Image/step1Images/birthday.jpg" alt="birthday"></button>
        	<div class="howToCaption"><h4>Birthday</h4></div>
         </div>
   		</div> <!-- end of eight colums-->
	</div>
    
    <div class="row item">
    	 <div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=House-Warming';"><img class="howToImage" src="Image/step1Images/houseWarming.jpg" alt="houseWarming" name="houseWarming"></button>
        	<div class="howToCaption"><h4>House Warming</h4></div>
         </div>
   		</div> <!-- end of eight colums-->
        
        <div class="half column"></div>

        <div class="four columns">
        	<div class="container">
    			<img class="howToImage" src="Image/step1Images/person.jpg" alt="personChoose">
        	<div class="personCaption"><h4>Choose Your Occation</h4></div>
         </div>
   		</div> <!-- end of eight colums-->
        
        <div class="halfhalf column"></div>

        <div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=Baby-Shower';"><img class="howToImage" src="Image/step1Images/babyShower.jpg" alt="babyShower"></button>
        	<div class="howToCaption"><h4>Baby Shower</h4></div>
         </div>
   		</div> <!-- end of eight colums-->
	</div>
    
    <div class="row item">
        <div class="one column"></div>
    	 <div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=Holiday-Celebration';"><img class="howToImage" src="Image/step1Images/holiday.jpg" alt="holiday"></button>
        	<div class="howToCaption"><h4>Holiday Celebration</h4></div>
         </div>
   		</div> <!-- end of seven colums-->
        
         <div class="three columns">
			<img class="howToImage" src="Image/step1Images/blank.jpg">
        </div>

        <div class="firstAndThrid">
        	<div class="container">
    			<button class="button" onclick="location.href='/webProject/page9Step1HL.php?item=Corporation-Event';"><img class="howToImage" src="Image/step1Images/corporation.jpg" alt="Corporation Event"></button>
        	<div class="howToCaption"><h4>Corporation Event</h4></div>
         </div>
   		</div> <!-- end of firstAndThrid-->
	</div>
    
    
    <div >
		<ul class="nav-bottom">
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="page10Step2.php">
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
