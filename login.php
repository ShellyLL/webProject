<?php

$password = @trim($_POST["password"]);
$email = @trim($_POST["email"]);
$xml2 = simplexml_load_file("users.xml") or die ("Error: Cannot Open Sever Database");
$flag = false;
# print_r($xml2);

foreach($xml2->user as $user) { 
	#echo "testforeach";
    if($user->email == $email && $user->password == $password) {
    	$flag = true;
    header("Location: Page6MyAccountXiaoyu.html");
    # echo "Yes";
    break;
    } 
}

if (flag == false) {
	echo "Wrong email or password"; 
}

 
?>