<?php
session_start();
require_once 'db.php';

// Check if user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Login function
function login($username, $password)
{
    global $conn;
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        return true;
    }
    return false;
}

// Logout function
function logout()
{
    session_destroy();
    header('Location: login.php');
    exit();
}
