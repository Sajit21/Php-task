<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" name="calculator">
        <fieldset>
            <legend>Calculator</legend>
            Number 1<input type="number" name="num1" required value="<?php if(isset($_POST['num1'])) echo $_POST['num1'];?>">
            <br>
            Number 2 <input type="number" name="num2" required value="<?php if(isset($_POST['num2'])) echo $_POST['num2'];?>">
            <br>
            <input type="radio" name="operation" value="add">Addition
            <input type="radio" name="operation" value="sub">Subtraction
            <input type="radio" name="operation" value="mul">Multiplication
            <input type="radio" name="operation" value="div">Division
            <input type="radio" name="operation" value="rem">Reminder
        <br>
        <input type="submit" name="submit" value="Calculate">
        </fieldset>
</from>
    

<?php

function add($one, $two){
    return $one + $two;
}

function sub($one, $two){
    return $one - $two;
}
function mul($one, $two){
    return $one * $two;
}
function div($one, $two){
    return $one / $two;
}

function rem($one, $two){
    if(($one % $two) == 0){
        return 0;
    }
    else{
        return 1;
    }

    }

if(isset($_POST['submit'])){
   // capturing the users input
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    if($operation == "add"){
        $result = add($num1, $num2);
    }
    else if($operation == "sub"){
        $result = sub($num1, $num2);
    }
    else if ($operation == "mul"){
        $result = mul($num1, $num2);
    }
    else if($operation == "div"){
        $result = div($num1, $num2);
    }
    else if($operation == "rem"){
        $result = rem($num1, $num2);
    }
    
    echo"<h1>" . $result. "</h1>";
}

?>

</body>
</html>