<?php
session_start();
if(!isset($_SESSION['time']) && !isset($_SESSION['name'])){
    header('location: ../Login.php');
}

?>