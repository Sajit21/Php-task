<?php

if(isset($_POST['login'])){
    // Capturing the form data
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    if(isset($_POST['Register'])){
        if(!empty($_POST['iagree'])){
            echo "Dear $first_name $last_name";
            echo "Your information is as follows ";
        }
        else{
            echo "Please Accept the terms and conditions";
        }
    }

}
?>
