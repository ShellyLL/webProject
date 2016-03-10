<!DOCTYPE html>
<html>

<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PartyJoy | Payment</title>
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

<<<<<<< HEAD
      <script>
    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cardNumber').payment('formatCardNumber');
      $('.cardDate').payment('formatCardExpiry');
      $('.securityCode').payment('formatCardCVC');
      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };
      $('form').submit(function(e) {
        e.preventDefault();
        var cardType = $.payment.cardType($('.cardNumber').val());
        $('.cardNumber').toggleInputError(!$.payment.validateCardNumber($('.cardNumber').val()));
        $('.cardDate').toggleInputError(!$.payment.validateCardExpiry($('.cardDate').payment('cardExpiryVal')));
        $('.securityCode').toggleInputError(!$.payment.validateCardCVC($('.securityCode').val(), cardType));
        $('.cc-brand').text(cardType);
        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
      });
    });
  </script>

=======
    
>>>>>>> a59bba6adaa4b2a05355ce0d3f9f58cd7a483a08
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

<?php
$xml = simplexml_load_file("payment.xml");

// define variables and set to empty values
$cardNumberErr = $cardDateErr = $securityCodeErr = $zipCodeErr = "";
$cardNumber = $cardDate = $securityCode = $zipCode ="";
$flag = false;

header('Location: https://www.google.com/');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["cardNumber"])) {
     $cardNumberErr = "Required";
   } else {
     	$cardNumber = test_input($_POST["cardNumber"]);
     	if (!preg_match("/^[0-9 ]*$/",$cardNumber)) {
     		$cardNumberErr = "Only Numbers and Space"; 
 		}else{
 			$xml->cardNumber = $cardNumber;
 		}
 	}

 	if (empty($_POST["cardDate"])) {
     $cardDateErr = "Required";
   } else {
     $cardDate = test_input($_POST["cardDate"]);
     $xml->cardDate = $cardDate;
	}

   if (empty($_POST["securityCode"])) {
     $securityCodeErr = "Required";
   } else {
   		$securityCode = test_input($_POST["securityCode"]);
   		if (!is_numeric($securityCode)) {
       		$securityCodeErr = "Only numbers allowed";
       	}	 
   		else {
     		$xml->securityCode = $securityCode;
   		}
 	}


 	$zipCode = test_input($_POST["zipCode"]);
     if (!is_numeric($zipCode)) {
       $zipCodeErr = "Only numbers allowed"; 
     }else{
     	$xml->zipCode = $zipCode;
     	  	
     }
	
}

$xml2 = simplexml_load_file("users.xml") or die ("Error: Cannot Open Sever Database");

foreach($xml2->zipCode as $zipCode) {
	#echo "testforeach";
    if(empty($zipCode)) {
    	break;
    	$flag = false;
    }
}

$flag = true;
if ($flag == true) {
	header("Location: http://localhost:8888/webProject/page18ConfirmationHL.php");
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>


<div class="row item">

	<div id="containerPayment">
<<<<<<< HEAD

  		<form method="POST">
  		<!--
  		<form method="post" action="http://localhost:8888/payment.php">
  		-->
=======
  		
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
>>>>>>> a59bba6adaa4b2a05355ce0d3f9f58cd7a483a08

	    <p>
      <label>Card Number</label>
      <span class="error2">* <?php echo $cardNumberErr;?></span>
      <input type="text" name="cardNumber" placeholder="1234 5678 9796 1251">
    </p>
        <p>
      <label>Expiration Date</label>
      <span class="error2">* <?php echo $cardDateErr;?></span>
      <input type="text" name="cardDate" placeholder="03/2017">
    </p>
        <p>
      <label>Security Code</label>
      <span class="error2">* <?php echo $securityCodeErr;?></span>
      <input type="text" name="securityCode" placeholder="123">
    </p>
    <p>
      <label>Billing Zip Code</label>
      <input name="zipCode" type="text" placeholder="95053">
    </p>
  <input type="submit" name="submit" value="Submit">

  </form>
  <?php header("Location: http://localhost:8888/webProject/page18ConfirmationHL.php"); ?>
</div>
</div>

<div class="row item" id="seeConfirm">
	<p><a href="page18ConfirmationHL.php">After Payment Submission, You will see the Order Confirmation</a></p>
</div>


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

<!-- Script
================================================== -->

</body>
</html>
