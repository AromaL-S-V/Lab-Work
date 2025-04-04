<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        
        body {
            font-family: Arial;
            background-color: #68cafb;
            text-align: center;
            padding: 20px;
        }

        form {
            background-color: #c3ebf3;
            width: 350px;
            margin: auto;
            padding: 15px;
            border-radius: 10px;
        }

        input, textarea {
            width: 80%;
            padding: 8px;
            margin-top: 2px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .gender {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 5px;
        }

        .error {
            color: red;
            font-size: 0.85em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <?php
    
    $name = $email = $password = $confirmPassword = $gender = "";
    $nameError = $emailError = $passwordError = $confirmPasswordError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "Name is required.";
        } else {
            $name = htmlspecialchars(trim($_POST["name"]));
        }

        if (empty($_POST["email"])) {
            $emailError = "Email is required.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format.";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
        }

        if (empty($_POST["password"])) {
            $passwordError = "Password is required.";
        } elseif (strlen($_POST["password"]) < 6) {
            $passwordError = "Password must be at least 6 characters.";
        } else {
            $password = htmlspecialchars($_POST["password"]);
        }

        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordError = "Confirm password is required.";
        } elseif ($_POST["confirmPassword"] !== $_POST["password"]) {
            $confirmPasswordError = "Passwords do not match.";
        } else {
            $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);
        }

        $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : "";
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Registration Form</h2>

        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>
        <span class="error"><?php echo $nameError; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" value="<?php echo $email; ?>"><br>
        <span class="error"><?php echo $emailError; ?></span><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"><br>
        <span class="error"><?php echo $passwordError; ?></span><br><br>

        <label for="confirmPassword">Confirm Password:</label><br>
        <input type="password" name="confirmPassword"><br>
        <span class="error"><?php echo $confirmPasswordError; ?></span><br><br>

        <label>Gender:</label><br>
        <div class="gender">
            <label><input type="radio" name="gender" value="Male" <?php echo $gender === "Male" ? "checked" : ""; ?>> Male</label>
            <label><input type="radio" name="gender" value="Female" <?php echo $gender === "Female" ? "checked" : ""; ?>> Female</label>
        </div><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
