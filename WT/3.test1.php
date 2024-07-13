<?php
echo "<!DOCTYPE html>";
echo "<html lang=\"en\">";

echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "<title>Document</title>";
echo "</head>";
echo "<body>
    <h1>Welcome to the site</h1>";
    echo "Today is ". date("Y-m-d");
    echo "<br>";

    $num = 20;

    if ($num % 2 == 0){
        echo "The number $num is even";
    }
    else{
        echo "The number $num is odd";
    }
    echo "<br>";

    $number = 1;
    while ($number != 101){
        if ($number % 10 != 0){
            echo "$number ";
            $number += 1;
        }
        else if ($number % 2 == 0){
            echo "$number ";
            $number += 1;
            echo "<br>";
        } 
    }

echo"</body>
</html>";
?>
