<?php
require_once 'auth.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}

echo "Manage Doctors";
?>