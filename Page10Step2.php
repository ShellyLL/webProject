<!DOCTYPE html>
<html>
<head>
	<title>PartyJoy | BasicInfo</title>
	<!---common-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---css & js-->
	<link rel="stylesheet" type="text/css" href="Css/Page10Step2Style.css">
	<link rel="stylesheet" type="text/css" href="Css/commonStyle.css">
	<!---favicon-->
	<link rel="shortcut icon" href="Image/logo.png" >
    <link rel="icon" href="Image/logo.png">
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
<div class="packageContainer">
	<div class="package">
		<img class="listicon" src="Image/threediamond.png" alt="threediamond">
		<br><br>
		<a href="luxurypackage.php">Luxury Package</a>	
	</div>
	<div class="package">
		<img class="listicon" src="Image/twodiamond.png" alt="twodiamond">
		<br><br>
		<a href="popularpackage.php">Popular Package</a>		
	</div>
	<div class="package">
		<img class="listicon" src="Image/onediamond.png" alt="onediamond">
		<br><br>
		<a href="classicpackage.php">Classic Package</a>
	</div>
</div>
<?php
$xml = simplexml_load_file("db.xml");
// define variables and set to empty values
$guestnumberErr = $dateErr = $timeErr = $locationErr = $inoutErr = "";
$guestnumber = $date = $time = $comment = $location = $inout = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["guestnumber"])) {
     $guestnumberErr = "Guest number is required";
   } else {
     $guestnumber = test_input($_POST["guestnumber"]);
     if (!is_numeric($guestnumber)) {
       $guestnumberErr = "Only numbers allowed"; 
     }else{
     	$xml->guestnumber = $guestnumber;
     	//$xml->asXML("db.xml");
     }
   }
   
   if (empty($_POST["date"])) {
     $dateErr = "Date is required";
   } else {
     $date = test_input($_POST["date"]);
     $xml->date = $date;
     //$xml->asXML("db.xml");
   }
     
   if (empty($_POST["time"])) {
     $timeErr = "Time is required";
   } else {
     $time = test_input($_POST["time"]);
     $xml->time = $time;
     $xml->asXML("db.xml");
   }

   if (empty($_POST["location"])) {
     $locationErr = "Location is required";
   } else {
     $location = test_input($_POST["location"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$location)) {
       $locationErr = "Only letters and white space allowed"; 
     }else{
     	$xml->location = $location;
     }
   }
   if (empty($_POST["inout"])) {
     $inoutErr = "It is required";
   } else {
     $inout = test_input($_POST["inout"]);
     $xml->inout = $inout;
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
     $xml->comment = $comment;
   }
   $xml->asXML("db.xml");
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<p class="formtitle">Basic Information</p>
<div class="basicinfo">

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Guest Number: <input type="text" name="guestnumber" value="<?php echo $guestnumber;?>">
   <span class="error">* <?php echo $guestnumberErr;?></span>
   <br><br>
   Event Date: <input type="date" name="date" value="<?php echo $date;?>">
   <span class="error">* <?php echo $dateErr;?></span>
   <br><br>
   Event Time: <input type="time" name="time" value="<?php echo $time;?>">
   <span class="error">* <?php echo $timeErr;?></span>
   <br><br>
   Location: <input type="text" name="location" value="<?php echo $location;?>">
   <span class="error">* <?php echo $locationErr;?></span>
   <br><br>
   
   Indoor/Outdoor:
   <input type="radio" name="inout" <?php if (isset($inout) && $inout=="Indoor") echo "checked";?>  value="Indoor">Indoor
   <input type="radio" name="inout" <?php if (isset($inout) && $inout=="Outdoor") echo "checked";?>  value="Outdoor">Outdoor
   <span class="error">* <?php echo $inoutErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
</div>
<!--
<div class="basicinfo">
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="guestNumber">Guest Number:</label>
	  		<input type="text" id="guestNumber" name="guestNumber">
		</form>
		<br>
	</div>
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="date">Event Date:</label>
	  		<input type="text" id="date" name="date">
		</form>
		<br>
	</div>
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="time">Event Time:</label>
	  		<input type="text" id="time" name="time">
		</form>
		<br>
	</div>
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="isIndoor">Indoor/Outdoor:</label>
	  		<input type="text" id="isIndoor" name="isIndoor">
		</form>
		<br>
	</div>
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="location">Location:</label>
	  		<input type="text" id="location" name="location">
		</form>
		<br>
	</div>
	<div class="infoDetails">
		<form class="basicInfoForm">
	  		<label for="style">Style:</label>
	  		<input type="text" id="style" name="style">
		</form>
		<br>
	</div>
	<br><br>
   	<input type="submit" name="submit" value="Submit"> 
</div>	
-->
<div class="nav">
		<ul class="nav-bottom">
			<li class="prev-next"><a class="prev-next-link" href="page9Step1HL.php">
				<img class="prev-next-pic" src="Image/prev.png" alt="prev"></a></li>
			<li class="prev-next"><li class="prev-next"><a class="prev-next-link" href="Page11Step3.php">
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