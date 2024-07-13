<?php

class fruit
{
    public $name;
    public $color;

   function  __construct(){
   echo "this is just a deafult constructor";
   echo "<br>";
   }


   function __destruct(){
    echo "this fruit is{$this->name}.";
   }
    //methods
    function set_name($name)
    {
        $this->name=$name;    //like in pyhon class bhitra ko name ma
    }
    function get_name(){
        return $this->name;
    }
}

$apple=new fruit();
$banana=new fruit();
$apple->set_name('apple');
$banana->set_name('banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();






?>
