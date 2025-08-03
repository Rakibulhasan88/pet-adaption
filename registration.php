<?php

    require_once "config.php";

// Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Insert into users table
        $sql = "INSERT INTO register (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful!');</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css" />
    <title>Document</title>
</head>
<body>
    <!-- registration start -->
    <div class="registration-form-container">
        <form action="" method="POST" class="registration-form" id="registration-form">
            <h3>Register An Account</h3>
            <input type="text" placeholder="Enter your Name" class="box" name="name" id="name">
            <input type="number" placeholder="Enter your mobile number" class="box" name="mobile" id="mobile">
            <input type="email" placeholder="email" class="box" name="email" id="email">
            <input type="password" placeholder="password" class="box" name="password" id="password">
            <input type="password" placeholder="confirm password" class="box" name="cpassword" id="cpassword">
            <input type="submit" value="Register now" class="btn" name="submit" id="submit">
            <p>Or Register with</p>
            <div class="buttons">
                <a href="#" class="btn-1">google</a>
                <a href="#" class="btn-1">facebook</a>
            </div>
            <p>Already have an account <a href="login.php">login</a></p>
        </form>
    </div>
    <!-- registration end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
        const name = document.querySelector('[name="name"]');
        const mobile = document.querySelector('[name="mobile"]');
        const email = document.querySelector('[name="email"]');
        const password = document.querySelector('[name="password"]');
        const cpassword = document.querySelector('[name="cpassword"]');

        let errors = [];

        if (!name.value.trim()) {
        errors.push("Name is required.");
        }
        if (!mobile.value.trim() || !/^\d{11}$/.test(mobile.value)) {
        errors.push("Enter a valid 11-digit mobile number.");
        }
        if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        errors.push("Enter a valid email address.");
        }
        if (!password.value) {
        errors.push("Password is required.");
        }
        if (password.value !== cpassword.value) {
        errors.push("Passwords do not match.");
        }

        if (errors.length > 0) {
        alert(errors.join('\n'));
        e.preventDefault();
        }
        });
    </script>
</body>
</html>