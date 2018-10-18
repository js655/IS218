<?php

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
	echo "Your password is too short.";
}
else
{
	echo "Your password is $password. <br>";	
}
?>