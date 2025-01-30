<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - Arba Minch General Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">
    <!-- Topmost Section -->
    <header class="bg-blue-900 text-white py-2">
        <div class="container mx-auto flex justify-between items-center text-sm flex-wrap px-4">
            <!-- Left Side: Logo and Hospital Name -->
            <div class="flex items-center space-x-4">
                <img src="Project pictures/Logo.png"
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

    <!-- Navbar -->
    <nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <!-- Left Side: Navigation Links -->
            <div class="flex space-x-8 flex-wrap">
                <a href="index1.php" class="text-gray-700 hover:text-blue-600 font-semibold">Home</a>
                <a href="About.php" class="text-gray-700 hover:text-blue-600 font-semibold">About Us</a>
                <a href="Services.php" class="text-gray-700 hover:text-blue-600 font-semibold">Services</a>
                <a href="Doctors.php" class="text-gray-700 hover:text-blue-600 font-semibold">Doctors</a>
                <a href="Appointments.php" class="text-gray-700 hover:text-blue-600 font-semibold">Appointment</a>
                <a href="News.php" class="text-gray-700 hover:text-blue-600 font-semibold">News</a>
                <a href="Contact.php" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
            </div>

            <!-- Right Side: Login and Signup Buttons -->
            <div class="flex space-x-2">
                <a href="#"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                <a href="#"
                    class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">Our Doctors</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Doctor Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/Doctor2.png" alt="Dr. John Doe" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. John Doe</h2>
                    <p class="text-gray-600">Cardiologist</p>
                    <p class="text-gray-600 mt-2">Dr. John Doe is a highly experienced cardiologist with over 15 years of experience in treating heart-related conditions.</p>
                </div>
            </div>

            <!-- Doctor Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/Doctor1.png" alt="Dr. Jane Smith" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. Jane Smith</h2>
                    <p class="text-gray-600">Pediatrician</p>
                    <p class="text-gray-600 mt-2">Dr. Jane Smith specializes in pediatric care and has a passion for helping children lead healthy lives.</p>
                </div>
            </div>

            <!-- Doctor Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/Doctor3.jpg" alt="Dr. Michael Johnson" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. Michael Johnson</h2>
                    <p class="text-gray-600">Orthopedic Surgeon</p>
                    <p class="text-gray-600 mt-2">Dr. Michael Johnson is a renowned orthopedic surgeon with expertise in joint replacements and sports injuries.</p>
                </div>

            <!-- Doctor Card 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/Doctor4.jpg" alt="Dr. Michael Johnson" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. Michael Johnson</h2>
                    <p class="text-gray-600">Orthopedic Surgeon</p>
                    <p class="text-gray-600 mt-2">Dr. Michael Johnson is a renowned orthopedic surgeon with expertise in joint replacements and sports injuries.</p>
                </div>

            <!-- Doctor Card 5 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/doctor6.jpg" alt="Dr. Michael Johnson" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. Michael Johnson</h2>
                    <p class="text-gray-600">Orthopedic Surgeon</p>
                    <p class="text-gray-600 mt-2">Dr. Michael Johnson is a renowned orthopedic surgeon with expertise in joint replacements and sports injuries.</p>
                </div>

            <!-- Doctor Card 6 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/doctor6.jpg" alt="Dr. Michael Johnson" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-blue-900">Dr. Michael Johnson</h2>
                    <p class="text-gray-600">Orthopedic Surgeon</p>
                    <p class="text-gray-600 mt-2">Dr. Michael Johnson is a renowned orthopedic surgeon with expertise in joint replacements and sports injuries.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6">
        <div class="container mx-auto p-4 flex justify-between items-center flex-wrap">
            <div>
                <h3 class="font-bold text-xl">Important Links</h3>
                <ul class="mt-2">
                    <li><a href="Contact.php" class="hover:text-blue-300">Contact Us</a></li>
                    <li><a href="News.php" class="hover:text-blue-300">News</a></li>
                    <li><a href="Appointments.php" class="hover:text-blue-300">Appointment</a></li>
                    <li><a href="Doctors.php" class="hover:text-blue-300">Doctors</a></li>
                    <li><a href="Services.php" class="hover:text-blue-300">Services</a></li>
                    <li><a href="index1.php" class="hover:text-blue-300">Home</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-xl">Newsletter</h3>
                <form class="mt-2">
                    <input type="email" placeholder="Enter your email address" class="p-2 rounded">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded ml-2">Subscribe</button>
                </form>
            </div>
            <div>
                <h3 class="font-bold text-xl">Contact Information</h3>
                <p class="mt-2">Call: (251)681-812-255</p>
                <p class="mt-2">Email: arbaminchgh@moh.et</p>
                <p class="mt-2">Address: 9876 Arba Minch City, Ethiopia</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2025 Arba Minch General Hospital. All Rights Reserved by HIRGAL NEXUS</p>
        </div>
    </footer>
</body>

</html>