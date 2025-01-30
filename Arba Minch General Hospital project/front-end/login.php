<?php
require_once __DIR__ . '/../../Templates/header.php';
?>

<?php
require_once 'php/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('Location: index.php');
        exit();
    } else {
        $error = "Invalid credentials";
    }
}
?>

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <?php if (isset($error)): ?>
                <p class="text-red-500"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="login.php">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Login</button>
            </form>
        </div>
    </div>


<?php
require_once __DIR__ . '/../../Templates/footer.php';
?>
