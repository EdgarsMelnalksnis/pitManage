<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'admin@pitmanage.com' && $password === 'admin') {
    $_SESSION['role'] = 'admin';
    header('Location: index.php');
    exit;
} elseif ($username === 'user@pitmanage.com' && $password === 'user') {
    $_SESSION['role'] = 'user';
    header('Location: index.php');
    exit;
} else {
    $_SESSION['login_error'] = 'Invalid credentials';
    header('Location: index.php');
    exit;
}
?>
