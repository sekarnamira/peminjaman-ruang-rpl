<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "admin" && $password === "admin123") {
        $_SESSION["user"] = $username;
        echo "Login berhasil! Selamat datang, " . htmlspecialchars($username);
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html> 