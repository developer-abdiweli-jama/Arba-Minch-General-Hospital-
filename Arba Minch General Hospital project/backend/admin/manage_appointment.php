<?php
require_once __DIR__ . '/../../Templates/header.php';
require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];

    $stmt = $conn->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $patient_id, $doctor_id, $appointment_date, $appointment_time);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to book appointment']);
    }
}
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
        <h1 class="text-3xl font-bold mb-8">Appointments</h1>
        <!-- Add your appointment management content here -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Appointment List</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Patient Name</th>
                        <th class="py-2 px-4 border-b">Doctor Name</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">Jane Doe</td>
                        <td class="py-2 px-4 border-b">Dr. John Doe</td>
                        <td class="py-2 px-4 border-b">2023-10-15</td>
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