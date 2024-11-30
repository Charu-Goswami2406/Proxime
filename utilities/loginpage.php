<?php
// Start the session
session_start();

// Define dummy credentials (for demonstration purposes only)
$valid_email = "user@example.com";
$valid_password = "password123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and password from the POST data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple validation
    if ($email === $valid_email && $password === $valid_password) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirect to a dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Proxime</title>
    <link rel="stylesheet" href="loginpagestyle.css"> <!-- External CSS -->
</head>
<body>
<div class="login-container">
    <h2>Welcome to Proxime</h2>

    <!-- Make sure to set the form method to POST so credentials can be sent securely -->
    <form method="POST" action="">
        <div class="form-group-login">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group-login">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="login-submit-button">Login</button>
    </form>

    <?php if (isset($error_message)): ?>
        <p style="color: red; text-align: center;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <div class="forgot-password">
        <a href="#">Forgot Password?</a>
    </div>
</div>

<div class="footer">
    &copy; 2024 Proxime. All rights reserved.
</div>
</body>
</html>
