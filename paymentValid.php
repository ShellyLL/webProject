<?php
$xml = simplexml_load_file("payment.xml") or die ("Error: Cannot Open Sever Database");

print_r("$xml");
// define variables and set to empty values
$cardNumberErr = $cardDateErr = $securityCodeErr = $zipCodeErr = "";
$cardNumber = $cardDate = $securityCode = $zipCode ="";
$flag = false;


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

     $xml->asXML("payment.xml");
	header("Location: Page6MyAccountXiaoyu.html");


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>