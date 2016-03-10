<!DOCTYPE html>
<html>
<head>
	<title>PartyJoy | MyAccount</title>
	<!---common-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---css & js-->
    <link rel="stylesheet" type="text/css" href="Css/Page1HomePageStyle.css">
    <link rel="stylesheet" type="text/css" href="Css/commonStyle.css">
    <link rel="stylesheet" type="text/css" href="Css/XiaoyuStyle.css">
	<script src="Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="Js/pptBox.js"></script>
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


	<div class = "transition">
	</div>

    <div class= "dashBoardWrapper">
        <h2 class= "myAccountTitle"> Welcome back to your PartyJoy Account </h2>
        <div id = "dashBoardContent">
            <h3 class = "dashBoard"> DashBoard </h3>

            <h4 class="PartyTag">Coming Party:</h4>
            <ul id = "comingParty">
              <li><a href = "page9Step1HL.php">New Party </a></li>
            </ul>

            <h4 class="PartyTag">Recommended Party Package:</h4>
            <ul id = "recommendedParty">
							  <li><a href = "classicpackage.php">Classic Package </a></li>
								<li><a href = "popularpackage.php">Popular Package</a></li>
								<li><a href = "luxurypackage.php">Luxury Package</a></li>
            </ul>


            <h4 class="PartyTag">Setting:</h4>
            <ul id = "setting">
							<li><strong>First name: </strong><span style="font-size:20px;color:red"><?=$user->fname?></span></li>
							<li><strong>Last name: </strong><span style="font-size:20px;color:red"><?=$user->lname?></span></li>
              <li><strong>Email:</strong><span style="font-size:20px;color:red"><?=$user->email?></span></li>
            </ul>
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
