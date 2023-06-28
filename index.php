

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

echo var_dump($completed) ."<br/>";

echo str_repeat("-", 100);
echo "<br/>";


// Functions and Type casting 

echo "<h3> Functions and Type casting </h3>";
function sum($a, $b) {
    echo var_dump($a, $b);
    echo '<br/>';
    return $a + $b;
}

echo sum(2, 3);
echo '<br/>';
echo sum(2.5, '3');
echo '<br/>';
echo var_dump(sum(2.5, '3'));
echo '<br/>';

function sum2(int $a, int $b) {
    echo var_dump($a, $b);
    echo '<br/>';
    return $a + $b;
}
echo sum2(2.5, '3');
// echo sum2(2.5, 'Hello');
echo '<br/>';


$x = 7.5;
$x = (int)$x;
echo var_dump($x);
echo '<br/>';

$x = (int)'1000.9tweet8';
echo var_dump($x);
echo '<br/>';

$y = 900;
echo var_dump(is_int($y));
echo '<br/>';

echo str_repeat("-", 100);
echo "<br/>";

$x = NULL;
echo var_dump(is_nan($x));
?>