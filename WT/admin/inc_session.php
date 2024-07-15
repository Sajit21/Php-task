<?php
// this sessionn checks whether the time and name is set or not . if not locate to login  page

session_start();
if(!isset($_SESSION['time']) && !isset($_SESSION['name'])){
    header('location: ../Login.php');
}

?>
