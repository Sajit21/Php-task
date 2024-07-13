<?php
    require_once('inc_session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <?php
    // Redirect if your not clicked on edit or delete button
    if(isset($_GET['id']) && isset($_GET['action'])){
        //getting files id and action
        $id = $_GET['id'];
        $action = $_GET['action'];
        switch($action){
            case 'delete':{
                echo "Delete mode on";
                $sql = "DELETE FROM users WHERE id=$id";
                require_once("../13.connection.php");
                $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if($qry){
                    header("Location: users.php?msg=$id Deleted successfully");
                }
                break;
            }
            case 'edit':{
                $sql="SELECT * FROM users WHERE id=$id";
                require_once("../13.connection.php");
                $qry = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                while($row = mysqli_fetch_array($qry)){
                    $eid = $row['id'];
                    $eusername = $row['username'];
                    $eemail = $row['email'];
                    $erole = $row['role'];
                    $estatus = $row['status'];

                    echo "<form method = post action = edituser.php>";
                    echo "<fieldset><legend>EDIT $eusername </legend>";
                    echo "<input type = hidden name=id value=$eid> <br>";
                    echo "<input type = text name=username value=$eusername> <br>";
                    echo "<input type = email name=email value=$eemail> <br>";
                    echo "<input type = text name=role value=$erole> <br>";
                    echo "<input type = text name=status value=$estatus> <br>";
                    echo "<input type = submit name=submit value=UPDATE> <br>";
                    echo "</form>";

                }
                echo "Edit mod on";
                break;
            }
        }
    }
    else{
        header("Location: users.php");
    }
    ?>
</body>
</html>