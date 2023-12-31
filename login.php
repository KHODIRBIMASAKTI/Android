<?php
session_start();
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <div id="app">
    <h2>Login</h2>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username" required placeholder="Masukan Username"><br>

        <label>Password:</label>
        <input type="password" name="password" required placeholder="Masukan Password"><br>

        <input type="submit" value="Login">
    </form>
    </div>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
