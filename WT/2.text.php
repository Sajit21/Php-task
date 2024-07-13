<?=10?>
<?php
// this is single line comment
/*
# this is multiline comments
# add the comments as per your requirement

# Author: Anish Dangol
# URL:
# Licence
*/
// variable
$name = "Anish Dangol";
$address = "Sanepa";
$ward = 02;
$payment = true;
$amount = 40.50;

// getting the data type of the variables
echo "<br>";
echo "name variable is a type of ".gettype($name);
echo "<br>";
echo "Ward variable is a type of ".gettype($ward);
echo "<br>";
echo "Payment variable is a type of ".gettype($payment);
echo "<br>";
echo "$amount variable is a type of ". gettype($amount);
echo "<br>";

//unset or clearing in the variable
unset ($amount);
echo "$amount variable is a type of ".gettype($amount);
echo "<br>";

//unsetting multiple variable at once
unset($name, $payment);

//Arithmetic operations
$num1 = 10;
$num2 = 10.22;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is ".$num1 + $num2. /* $sum */"<br>";
echo 'The sum of $num1 and $num2 is '.$num1 + $num2."<br>";

?>