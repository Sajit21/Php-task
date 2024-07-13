<?php
require_once("inc_session.php");

//unset the session
unset($_SESSION['name']);
unset($_SESSION['time']);

//alternatively you can use session destroy()
session_destroy();

//redirect to login
header("Location: ../11.Login.php");
?>