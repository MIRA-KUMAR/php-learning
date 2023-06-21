

<?php 

// Hello World
echo "<h3> First code </h3>";

echo "Hello World! <br/>";

echo str_repeat("-", 100);
echo "<br/>";

// Variables 

echo "<h3> Variables </h3>";
$firstname = "Mira";
$lastname = "Kumar";

echo "My name is ".$firstname ." ".$lastname ."<br/>";
echo str_repeat("-", 100);
echo "<br/>";

// constants 

echo "<h3> Constants </h3>";
define('STATUS_PAID', 'paid');
echo "STATUS_PAID: " .STATUS_PAID ."<br/>";

echo str_repeat("-", 100);
echo "<br/>";


// Data Types

echo "<h3> Data Types </h3>";
$completed = true;
echo $completed ."<br/>";

$completed = false;
echo $completed ."<br/>"; //false prints nothing

$age = 25;
echo "I'm " .$age ." years old! <br/>";

echo "Type of age variable is " .gettype($age) ."<br/>";

echo str_repeat("-", 100);
echo "<br/>";
?>