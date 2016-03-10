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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    <script src="jquery.payment.js"></script>
	<script src="Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="Js/pptBox.js"></script>

	 <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="page2ExamplesHL.css">

<!---favicon-->
	<link rel="shortcut icon" href="Image/logoOnly.png" >
    <link rel="icon" href="Image/logoOnly.png">

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

	<div id="containerPayment">

  		<form method="POST">
  		<!--
  		<form method="post" action="http://localhost:8888/payment.php">
  		-->

	    <p>
      <label>Card Number</label>
      <input for="cardNumber" type="text" placeholder="1234 5678 9012 3456"/>
    </p>
        <p>
      <label>Expiration Date</label>
      <input for="cardDate" type="text" placeholder="03/2016"/>
    </p>
        <p>
      <label>Security Code</label>
      <input for="securityCode" type="text" placeholder="123"/>
    </p>
    <p>
      <label>Billing Zip Code</label>
      <input for="zipCode" type="text" placeholder="95053"/>
    </p>
  <button type="submit" value="Submit Payment" />Submit</button>
  <h2 class="validation"></h2>

  </form>
</div>
</div>
<!--seeConfirm>
<div class="row item" id="seeConfirm">
	<p><a href="page18ConfirmationHL.html">You Will Receive Your Order Confirmation Soon</a></p>
</div>

<!-footer-->

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
