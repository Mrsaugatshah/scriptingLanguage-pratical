<?php
session_start();

$username = "admin";
$password = "1234";

if (isset($_POST['login'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: secure.php");
        exit();
    } else {
        echo "Invalid Credentials!";
    }
}
?>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>