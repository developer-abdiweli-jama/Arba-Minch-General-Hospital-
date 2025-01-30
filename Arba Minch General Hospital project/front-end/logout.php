<?php
// logout.php
session_start();
session_destroy();
header("Location: "/front-end/login.php"); // Redirect to login page
exit();
?>