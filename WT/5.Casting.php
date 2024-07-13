<?php
$a = 20.22;
$b = (int)$a;

echo $b;
echo "<br>";

echo gettype($b);
echo "<br>";

var_dump($b);
echo "<br>";

echo $b;
echo "<br>";

 
// Casting in php is done with these statement

// (string)
// (int)
// (float)
// (bool)
// (array)
// (object)
// (unset) -> convert to data type NULL


// Constant in PHP 
// Syntax:
//     define(name, value, case_insensitive)

// Example
define("USER", "Admin");

echo USER;
echo "<br><br>";
echo gettype("User");
echo "<br>";

const PASS = "Admin";
echo gettype("PASS");
echo "<br><br>";

echo PASS;
echo "<br>";


?>


