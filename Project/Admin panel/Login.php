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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Topmost Section -->
    <header class="bg-blue-900 text-white py-2">
        <div class="container mx-auto flex justify-between items-center text-sm flex-wrap px-4">
            <!-- Left Side: Logo and Hospital Name -->
            <div class="flex items-center space-x-4">
                <img src="Logo.png"
                    alt="Arba Minch General Hospital Logo - Leading Healthcare Provider" class="h-10">
                <span class="font-bold text-xl">ARBA-MINCH-GH</span>
            </div>

            <!-- Right Side: Emergency, Work Hour, Location -->
            <div
                class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-center sm:text-left mt-2 sm:mt-0">
                <div class="flex items-center space-x-2">
                    <span class="font-bold">EMERGENCY:</span>
                    <span>(+251) 681-812-255</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold">WORK HOURS:</span>
                    <span>24/7</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold">LOCATION:</span>
                    <span>0123 Arba Minch City</span>
                </div>
            </div>
    </header>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white p-5">
            <h2 class="text-xl font-bold mb-6">Admin Panel</h2>
            <nav>
                <ul>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-blue-700">Dashboard</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-blue-700">Manage Doctors</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-blue-700">Manage Patients</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-blue-700">Appointments</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-blue-700">News</a></li>
                    <li class="mb-4"><a href="#" class="block p-2 rounded hover:bg-red-700">Logout</a></li>
                </ul>
            </nav>
        </aside>

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
    
</body>
</html>
