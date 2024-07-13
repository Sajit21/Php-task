<?php

//setting the cookie for username and password for 10 days

setcookie("username","admin", time()+(10*24*60*60),"/");

setcookie("password","admin123", time()+(10*24*60*60),"/");

//getting the cookie value is exist
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    echo $_COOKIE ['username'];
    echo "<br>";
    echo $_COOKIE ['password'];
}
?>