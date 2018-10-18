<?php

$first = $_GET["first"]; echo "Your first name is $first. <br>";
$last = $_GET["last"]; echo "Your last name is $last. <br>";
$birthday = $_GET["birthday"]; echo "Your birthday is $birthday. <br>";
$email = $_GET["email"];
$password = $_GET["password"];

$i = strpos($email, '@');

if ($i == false)
{
	echo "You are missing the @ character. <br>";
}
else
{
	echo "Your email address is $email. <br>";
}

$length = strlen($password);

if ($length < 8)
{
	echo "Your password is too short. <br>";
}
else
{
	echo "Your password is $password. <br>";	
}

?>