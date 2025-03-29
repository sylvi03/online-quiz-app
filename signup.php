<?php  
include "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role']; // Get role from form

    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='index.php'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Signup</title>
</head>
<body>
<h2>Signup</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    Role: 
    <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit" name="submit" value="Sign Up">
</form>
<p>Already registered? <a href="index.php">Login here</a></p>
</body>
</html>
