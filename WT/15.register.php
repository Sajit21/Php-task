<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="register" enctype="multipart/form-data ">
        <label for="">Username: </label>
        <input type="text" name="username" placeholder="Username"><br><br>
        <label for="">Password:</label>
        <input type="password" name="password" placeholder="Password"><br><br>
        <label for="">Email:</label>
        <input type="email" name="email" placeholder="you@email.com"><br><br>
        <input type="submit" name="register" value="Register">
    </form>

    <div>Already Have and account <a href="11.login.php">Login</a> </div>

    <?php
    if(isset($_POST['register'])){
        //capturing the data
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];

        if(!empty($username) && !empty($password) && !empty($email)){
            //sql statement for inserting the data
            $sql = "INSERT INTO users(username, password, email) VALUES('$username', md5('$password'), '$email')";
            //Making Connection
            require("13.connection.php");
            //executing the query
            $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if($qry){
                echo "$username registered successfully";
            }

        }
        else{
            echo "All fields are required!";
        }
    }
    ?>
</body>
</html>