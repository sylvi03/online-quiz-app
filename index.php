<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role']; // Store role in session

        if ($user['role'] == 'admin') {
            header("Location: admin.php"); // Redirect admins
        } else {
            header("Location: quiz.php"); // Redirect normal users
        }
        exit();
    } else {
        echo "Invalid username or password!";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>
<p>Don't have an account? <a href="signup.php">Sign up</a></p>
</body>
</html>
