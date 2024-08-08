<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php
    $username = $password = $country = $gender = "";
    $usernameErr = $passwordErr = $countryErr = $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required.";
        } else {
            $username = htmlspecialchars($_POST["username"]);
            if (strlen($username) < 4) {
                $usernameErr = "Username must be at least 4 characters long.";
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required.";
        } else {
            $password = htmlspecialchars($_POST["password"]);
            if (!preg_match("/[A-Z]/", $password)) {
                $passwordErr = "Password must include at least one uppercase letter.";
            }
            if (!preg_match("/[0-9]/", $password)) {
                $passwordErr = "Password must include at least one digit.";
            }
            if (!preg_match("/[\W_]/", $password)) {
                $passwordErr = "Password must include at least one special character.";
            }
        }

        if (empty($_POST["country"])) {
            $countryErr = "Country is required.";
        } else {
            $country = htmlspecialchars($_POST["country"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required.";
        } else {
            $gender = htmlspecialchars($_POST["gender"]);
        }
    }
    ?>

    <h2>Registration Form</h2>
    <form method="post" action="<?php 
      echo htmlspecialchars($_SERVER["PHP_SELF"]);
      ?>">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php 
                                                                echo $username;
                                                                      ?>">
            <span style="color: red;"><?php echo $usernameErr; ?></span>
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span style="color: red;"><?php echo $passwordErr; ?></span>
        </div>
        <br>
        <div>
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">Select a country</option>
                <option value="Nepal" <?php if ($country == "Nepal") echo "selected"; ?>>Nepal</option>
                <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
                <option value="UK" <?php if ($country == "UK") echo "selected"; ?>>UK</option>
            </select>
            <span style="color: red;"><?php echo $countryErr; ?></span>
        </div>
        <br>
        <div>
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>
            <label for="female">Female</label>
            <span style="color: red;"><?php echo $genderErr; ?></span>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>