<?php
require_once __DIR__ . '/../../Templates/header.php';
?>

<!-- Admin Dashboard Content -->
<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white p-4">
        <h2 class="text-2xl font-bold mb-4">Admin Panel</h2>
        <ul>
            <li class="mb-2"><a href="<?php echo BASE_URL; ?>backend/admin/dashboard.php" class="block hover:bg-gray-700 p-2 rounded">Dashboard</a></li>
            <li class="mb-2"><a href="<?php echo BASE_URL; ?>backend/admin/manage_doctors.php" class="block hover:bg-gray-700 p-2 rounded">Manage Doctors</a></li>
            <li class="mb-2"><a href="<?php echo BASE_URL; ?>backend/admin/manage_patients.php" class="block hover:bg-gray-700 p-2 rounded">Manage Patients</a></li>
            <li class="mb-2"><a href="<?php echo BASE_URL; ?>backend/admin/appointments.php" class="block hover:bg-gray-700 p-2 rounded">Appointments</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-8">Manage Doctors</h1>
        <!-- Add your doctor management content here -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Doctor List</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Specialization</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">Dr. John Doe</td>
                        <td class="py-2 px-4 border-b">Cardiology</td>
                        <td class="py-2 px-4 border-b">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php
require_once __DIR__ . '/../../Templates/footer.php';
?>