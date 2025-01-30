<?php
require_once __DIR__ . '/../../Templates/header.php';
?>


<form action="backend/api/signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Sign Up</button>
    </form>
    <script src="js/form_validation.js"></script>

    <?php
require_once __DIR__ . '/../../Templates/footer.php';
?>