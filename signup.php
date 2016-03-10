<?php

$fname = @trim($_POST["firstname"]);
$lname = @trim($_POST["lastname"]);
$email = @trim($_POST["email"]);
$password = @trim($_POST["password"]);

$xml2 = simplexml_load_file("users.xml") or die ("Error: Cannot Open Sever Database");

$already_exists = false;
foreach($xml2->user as $user) {
    if($user->email == $email) {
    	$already_exists = true;
    break;
    }
}
if ($already_exists == true) {
	echo "An account using this e-mail address already exists.";
}

$user = $xml2->addChild('user');
$user->addChild('id', count($xml2) - 1);
$user->addChild('fname', $fname);
$user->addChild('lname', $lname);
$user->addChild('email', $email);
$user->addChild('password', $password);
file_put_contents('users.xml', $xml2->asXML());
header("Location: Page5SignInXiaoyu.html");
?>
