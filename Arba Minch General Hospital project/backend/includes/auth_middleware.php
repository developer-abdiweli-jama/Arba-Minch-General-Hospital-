<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user']);
}

function isAdmin() {
    return isLoggedIn() && $_SESSION['user']['role'] === 'admin';
}

function isDoctor() {
    return isLoggedIn() && $_SESSION['user']['role'] === 'doctor';
}

function isPatient() {
    return isLoggedIn() && $_SESSION['user']['role'] === 'patient';
}

function redirectIfNotLoggedIn() {
    if (!isLoggedIn()) {
        header("Location: " . BASE_URL . "frontend/login.php");
        exit();
    }
}

function redirectIfNotAdmin() {
    if (!isAdmin()) {
        header("Location: " . BASE_URL . "frontend/index.php");
        exit();
    }
}
?>