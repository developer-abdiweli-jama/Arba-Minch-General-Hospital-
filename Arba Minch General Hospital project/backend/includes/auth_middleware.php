<?php
session_start();

require_once __DIR__ . '/config.php';

function isAuthenticated() {
    return isset($_SESSION['user']);
}

function isAdmin() {
    return isAuthenticated() && $_SESSION['user']['role'] === 'admin';
}

function isDoctor() {
    return isAuthenticated() && $_SESSION['user']['role'] === 'doctor';
}

function isPatient() {
    return isAuthenticated() && $_SESSION['user']['role'] === 'patient';
}

function requireAuth() {
    if (!isAuthenticated()) {
        header('Location: ' . BASE_URL . 'login.php');
        exit();
    }
}

function requireAdmin() {
    if (!isAdmin()) {
        header('Location: ' . BASE_URL . 'unauthorized.php');
        exit();
    }
}

function requireDoctor() {
    if (!isDoctor()) {
        header('Location: ' . BASE_URL . 'unauthorized.php');
        exit();
    }
}

function requirePatient() {
    if (!isPatient()) {
        header('Location: ' . BASE_URL . 'unauthorized.php');
        exit();
    }
}
?>