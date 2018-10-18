<?php

$name = $_GET["name"];
$question = $_GET["question"];
$skills = $_GET["skills"];

$length = strlen($name);

if ($length < 3)
{
	echo "Your name is too short. <br>";
}
else
{
	echo "Your name is $name. <br>";	
}

$len_question = strlen($question);

if ($len_question > 500)
{
	echo "Your question is too long! Please shorten it. <br>";
}
else
{
	echo "Your question is: $question. <br>";	
}

?>