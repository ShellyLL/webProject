<?php

	$xmldoc = new DomDocument( '1.0' );
	$xmldoc->preserveWhiteSpace = true;
	$xmldoc->formatOutput = true;

    $cardNumber=$_POST['cardNumber'];
    $cardDate=$_POST['cardDate'];
    $securityCode=$_POST['securityCode'];
    $zipCode=$_POST['zipCode'];
	
	if( $xml = file_get_contents( 'payments.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    $root = $xmldoc->getElementsByTagName('payments')->item(0);

    $payment = $xmldoc->createElement('payment');
 
    $payment->appendChild($numAttribute);

    $root->insertBefore( $payment, $root->firstChild );

    $cardNumberElement = $xmldoc->createElement('cardNumber');
    $payment->appendChild($cardNumberElement);
    $cardNumberText = $xmldoc->createTextNode($cardNumber);
    $cardNumberElement->appendChild($cardNumberText);

	$cardDateElement = $xmldoc->createElement('cardDate');
    $payment->appendChild($cardDateElement);
    $cardDateText = $xmldoc->createTextNode($cardDate);
    $cardDateElement->appendChild($cardDateText);

    $securityCodeElement = $xmldoc->createElement('securityCode');
    $payment->appendChild($securityCodeElement);
    $securityCodeText = $xmldoc->createTextNode($securityCode);
    $securityCodeElement->appendChild($securityCodeText);

    $zipCodeElement = $xmldoc->createElement('zipCode');
    $payment->appendChild($zipCodeElement);
    $zipCodeText = $xmldoc->createTextNode($zipCode);
    $zipCodeElement->appendChild($zipCodeText);

    $xmldoc->save('payments.xml');
}
?>