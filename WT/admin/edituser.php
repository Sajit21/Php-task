<?php
    require_once('inc_session.php');
    if(isset($_POST['submit'])){
        //capturing the data
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email=$_POST['email'];
        $status=$_POST['status'];
        $role=$_POST['role'];

        //making sql query for update the record
        $sql = "UPDATE users SET username='$username', email='$email', status='$status', role='$role' WHERE id=$id";
        include("../13.connection.php");
        $qry=mysqli_query($conn, $sql) or die (mysqli_error($conn));
        if($qry){
            header("Location: users.php?msg=$username Updated.");
        }
    }
    else{
        header("Location: users.php"); // transfer to the user.php incase the it throws and error
    }
?>
