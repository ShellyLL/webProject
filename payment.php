<?php

    $cardNumber=$_POST['cardNumber'];
    $cardDate=$_POST['cardDate'];
    $securityCode=$_POST['securityCode'];
    $zipCode=$_POST['zipCode'];

    echo $cardNumber;

    $xml2 = simplexml_load_file("payments.xml") or die ("Error: Cannot Open Sever Database");
    $xml2->$cardNumber;
    $xml2->asXML("payments.xml");

    print_r($xml2);  
/*
    $payment = $xml2->addChild('payment');
    $payment->addChild('cardNumber', $cardNumber);
    $payment->addChild('cardDate', $cardDate);
    echo $entry;

/*
        $cardNumber1="asdfa";
    $cardDate="adsfadg";
    $securityCode="adsgahhj";
    $zipCode="lkuoub";

    $cardNumber="$cardNumber1";

    $xml2 = simplexml_load_file("payments.xml") or die ("Error: Cannot Open Sever Database");

    print_r($xml2);

$productNum = "2103";
$name = "AGB";
$category = "Movies";
$content = "YES";

    if( $xml = file_get_contents( 'main.xml') ) {
echo $cardNumber;
echo $cardDate;
echo $securityCode;
echo $zipCode;

    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    $root = $xmldoc->getElementsByTagName('headercontent')->item(0);

    echo item(0);

    $payment = $xmldoc->createElement('payment');

    $root->insertBefore( $payment, $root->firstChild);

    $cardNumberElement = $xmldoc->createElement('cardNumber');
    $payment->appendChild($cardNumberElement);
    $cardNumberText = $xmldoc->createTextNode($cardNumber);
    $cardNumberElement->appendChild($cardNumberText);

    echo $cardNumberElement;

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

    echo $xmldoc;
    $xmldoc->save('payments.xml');



       $root = $xmldoc->getElementsByTagName('headercontent')->item(0);

    // create the <product> tag
    $product = $xmldoc->createElement('product');
    $numAttribute = $xmldoc->createAttribute("num");
    $numAttribute->value = $productNum;
    $product->appendChild($numAttribute);

    // add the product tag before the first element in the <headercontent> tag
    $root->insertBefore( $product, $root->firstChild );

    // create other elements and add it to the <product> tag.
    $nameElement = $xmldoc->createElement('name');
    $product->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($name);
    $nameElement->appendChild($nameText);

    $categoryElement = $xmldoc->createElement('category');
    $product->appendChild($categoryElement);
    $categoryText = $xmldoc->createTextNode($category);
    $categoryElement->appendChild($categoryText);

    $availableElement = $xmldoc->createElement('available');
    $product->appendChild($availableElement);
    $availableAttribute = $xmldoc->createAttribute("content");
    $availableAttribute->value = $content;
    $availableElement->appendChild($availableAttribute);

    $xmldoc->save('main.xml');

}
*/

?>