<?php
// logout.php
session_start();
session_destroy();
header("Location: " . BASE_URL . "frontend/login.php"); // Redirect to login page
exit();
?>