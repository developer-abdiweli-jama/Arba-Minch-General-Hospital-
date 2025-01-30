<?php
require_once 'php/auth.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}

echo "Welcome to the Admin Panel!";
?>