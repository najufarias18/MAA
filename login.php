<?php
session_start();

$valid_users = [
    "Ana" => password_hash("123", PASSWORD_BCRYPT),
    "Manu" => password_hash("123", PASSWORD_BCRYPT),
    "Anny" => password_hash("123", PASSWORD_BCRYPT),

];

$username = $_POST["username"];
$password = $_POST["password"];

if (isset($valid_users[$username]) && password_verify($password, $valid_users[$username])) {
    $_SESSION["username"] = $username;
    header("Location: success.php");
} else {
    header("Location: login_failure.php");
}
?>