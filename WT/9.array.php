<?php
//creating index array
$scores = array(1,2, 3);
echo $scores[0];//1
echo "<br>";
echo $scores[2];
echo "<br>";

//debugging purpose
echo '<pre>';  
print_r($scores);
echo '</pre>';  
echo "<br>";

unset($scores[1]);

//printing all the elements of array by using foreach loop
foreach($scores as $s){
    echo $s. " ";
}

//associative array
$names = array("anish" =>"Sanepa", "greetika" => "patan", "jenisha" => "Koteshwor");

//lets print anish address
echo "<br>";
echo $names["anish"];
echo "<br>";
foreach($names as $i => $v){
    echo $i. " is from " .$v. ".<br>";
}


$names = array(
    "anish" => array("lastname" => "Dangol", "age" => 21, "address" => "Sanepa"),
    "greetika" => array("lastname" => "bajracharya", "age" => 21, "address" => "Patan"),
    "jenisha" => array("lastname" => "parajuli", "age" => 21, "address" => "koteshwor")
);


echo "<br>";
var_dump($names);
echo "<br><br>";


//printing all names
echo "We have ".sizeof($names), " members.";
echo "<br>";
$i = 1;
foreach($names as $k => $v){
    echo $i. " ". strtoupper($k);
    echo "<br>";
    foreach($v as $key => $value){
        echo ucwords($key). " = ". ucwords($value). " ";
        echo "<br>";
    }
    echo "<hr>";
    $i++;
}


// stage
//     district
//     municipality


?>
