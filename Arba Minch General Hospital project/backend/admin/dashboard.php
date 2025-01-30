<?php
require_once __DIR__ . '/../../Templates/header.php';
?>

<!-- Admin Navbar -->
<nav class="bg-white shadow-md" aria-label="Admin Navigation">
    <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
        <!-- Left Side: Admin Navigation Links -->
        <div class="flex space-x-8 flex-wrap">
            <a href="<?php echo BASE_URL; ?>backend/admin/dashboard.php" class="text-gray-700 hover:text-blue-600 font-semibold">Dashboard</a>
            <a href="<?php echo BASE_URL; ?>backend/admin/manage_doctors.php" class="text-gray-700 hover:text-blue-600 font-semibold">Manage Doctors</a>
            <a href="<?php echo BASE_URL; ?>backend/admin/manage_patients.php" class="text-gray-700 hover:text-blue-600 font-semibold">Manage Patients</a>
            <a href="<?php echo BASE_URL; ?>backend/admin/appointments.php" class="text-gray-700 hover:text-blue-600 font-semibold">Appointments</a>
        </div>

        <!-- Right Side: Logout Button -->
        <div class="flex space-x-2">
            <a href="<?php echo BASE_URL; ?>frontend/logout.php"
                class="bg-red-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-red-700">Logout</a>
        </div>
    </div>
</nav>

<!-- Admin Dashboard Content -->
<div class="flex h-screen">
    <!-- Sidebar and Main Content Here -->
</div>

<?php
require_once __DIR__ . '/../../Templates/footer.php';
?>