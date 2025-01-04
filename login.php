<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Replace with your own username and password
    $username = 'Bikat Tilahun';
    $password = 'Bike_Asse';

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['loggedin'] = true;
        header("Location: add_project.php");
        exit();
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>

    <form action="login.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>