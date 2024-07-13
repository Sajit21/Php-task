<?php
require_once('inc_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Users</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <h1>All Users</h1>
    <?php
    $sql = "SELECT * FROM users ORDER BY id DESC";
    include("../13.connection.php");
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    // for displaying all the users

    if(isset($_GET['msg'])){
        echo "Id: ".$_GET['msg']."<br><br>";
    }
    echo "<table border=1 cellpadding=4 cellspacing=4><tr>
        <th>ID:</th>
        <th>Username:</th>
        <th>Password:</th>
        <th>Email:</th>
        <th>Role:</th>
        <th>Status:</th>
        <th>Created at:</th>
        <th>Updated at:</th>
        <th>Actions:</th>
        </tr>
    ";

    if($qry){
        while($row=mysqli_fetch_array($qry)){
            $id = $row["id"];
            echo "<tr>";
            echo "<td>",$row["id"]. "</td>";
            echo "<td>",$row["username"]. "</td>";
            echo "<td>",$row["password"]. "</td>";
            echo "<td>",$row["email"]. "</td>";
            echo "<td>",$row["role"]. "</td>";
            echo "<td>",$row["status"]. "</td>";
            echo "<td>",$row["created_at"]. "</td>";
            echo "<td>",$row["updated_at"]. "</td>";
            echo "<td><a href=manageusers.php?id=$id&action=edit>Edit</a> | <a href=manageusers.php?id=$id&action=delete>Delete</a></td>";
            echo "</tr>";
        }
    }
    echo "</table";
    ?>
</body>
</html>

