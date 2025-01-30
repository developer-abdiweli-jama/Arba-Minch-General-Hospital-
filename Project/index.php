<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arba Minch General Hospital</title>

    <!-- Include Tailwind CSS via CDN -->
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
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-center sm:text-left mt-2 sm:mt-0">
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
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <!-- Left Side: Navigation Links -->
            <div class="flex space-x-8 flex-wrap">
                <a href="home.php" class="text-gray-700 hover:text-blue-600 font-semibold">Home</a>
                <a href="About.php" class="text-gray-700 hover:text-blue-600 font-semibold">About Us</a>
                <a href="Services.php" class="text-gray-700 hover:text-blue-600 font-semibold">Services</a>
                <a href="Doctors.php" class="text-gray-700 hover:text-blue-600 font-semibold">Doctors</a>
                <a href="Appointments.php" class="text-gray-700 hover:text-blue-600 font-semibold">Appointment</a>
                <a href="News.php" class="text-gray-700 hover:text-blue-600 font-semibold">News</a>
                <a href="Contact.php" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
            </div>

            <!-- Right Side: Login and Signup Buttons -->
            <div class="flex space-x-2">
                <a href="login.php"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700">Login</a>
                <a href="signup.php"
                    class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Signup</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section pt-32">
        <div class="hero-overlay"></div> <!-- Semi-transparent overlay -->
        <div class="hero-content text-white px-4">
            <!-- Tagline -->
            <p class="text-lg font-semibold">CARING FOR LIFE</p>

            <!-- Heading -->
            <h1 class="text-4xl sm:text-5xl font-bold mt-4">
                Leading the Way<br> <!-- Line break for the split -->
                <span class="text-3xl sm:text-4xl font-semibold">in Medical Excellence</span>
            </h1>

            <!-- Call-to-Action Buttons -->
            <div class="mt-8 space-x-4">
                <a href="Services.php"
                    class="bg-blue-600 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-full font-semibold hover:bg-blue-700">Our
                    Services</a>
                <a href="Appointments.php"
                    class="bg-white text-blue-600 px-4 sm:px-6 py-2 sm:py-3 rounded-full font-semibold border border-blue-600 hover:bg-blue-50">Book
                    an Appointment</a>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title">Our Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Free Checkup</h3>
                <p class="mt-2">A Passion for Healing</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">5-Star Care</h3>
                <p class="mt-2">All our best</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Cardiogram</h3>
                <p class="mt-2">A Legacy of Excellence</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Dna Testing</h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card p-6">
                <h3 class="font-bold text-xl">Blood Bank</h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <!-- Our Specialties Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title">Our Specialties</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <div class="text-center">Neurology</div>
                <div class="text-center">Bones</div>
                <div class="text-center">Oncology</div>
                <div class="text-center">Otorhinolaryngology</div>
                <div class="text-center">Ophthalmology</div>
                <div class="text-center">Cardiovascular</div>
                <div class="text-center">Pulmonology</div>
                <div class="text-center">Renal Medicine</div>
                <div class="text-center">Gastroenterology</div>
                <div class="text-center">Urology</div>
                <div class="text-center">Dermatology</div>
                <div class="text-center">Gynaecology</div>
            </div>
        </div>
    </section>

    <!-- Book an Appointment Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title">Book an Appointment</h2>
        <form class="bg-white p-6 rounded-lg shadow-md" method="POST" action="book_appointment.php">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="text" placeholder="Name" class="p-2 border rounded" name="name" required>
                <select class="p-2 border rounded" name="gender" required>
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input type="email" placeholder="Email" class="p-2 border rounded" name="email" required>
                <input type="tel" placeholder="Phone" class="p-2 border rounded" name="phone" required>
                <input type="date" class="p-2 border rounded" name="date" required>
                <input type="time" class="p-2 border rounded" name="time" required>
                <select class="p-2 border rounded" name="doctor" required>
                    <option value="">Doctor</option>
                    <!-- Add doctor options dynamically from database -->
                </select>
                <select class="p-2 border rounded" name="department" required>
                    <option value="">Department</option>
                    <!-- Add department options dynamically from database -->
                </select>
                <textarea placeholder="Message" class="p-2 border rounded col-span-2" name="message"></textarea>
            </div>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold mt-4 hover:bg-blue-700">SUBMIT</button>
        </form>
    </section>

    <!-- Our Doctors Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title">Our Doctors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $conn = new mysqli("localhost", "username", "password", "hospital_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, name FROM doctors";
            $result = $conn->query($sql);
            ?>
            <select class="p-2 border rounded" name="doctor" required>
                <option value="">Select Doctor</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                }
                ?>
            </select>
            <?php
            $conn->close();
            ?>
        </div>
    </section>

    <!-- News Section -->
    <section class="container mx-auto my-12 p-4">
        <h2 class="section-title">Better Information, Better Health</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php
            $conn = new mysqli("localhost", "username", "password", "hospital_db");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, name FROM news";
            $result = $conn->query($sql);
            ?>
            <select class="p-2 border rounded" name="doctor" required>
                <option value="">Select</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                }
                ?>
            </select>
            <?php
            $conn->close();
            ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-white text-blue-900 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title text-center text-3xl font-bold mb-8">GET IN TOUCH</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Contact Box -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <h3 class="font-bold text-xl mb-4">CONTACT</h3>
                    <p class="mt-2">(251)681-812-255</p>
                    <p class="mt-2">(251)666-331-894</p>
                </div>

                <!-- Location Box -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <h3 class="font-bold text-xl mb-4">LOCATION</h3>
                    <p class="mt-2">0123 Arba Minch City</p>
                    <p class="mt-2">9876, Arba Minch Ethiopia</p>
                </div>

                <!-- Email & Working Hours Box -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" style="color: #1F2B6C;">
                    <h3 class="font-bold text-xl mb-4">EMAIL & WORKING HOURS</h3>
                    <p class="mt-2">arbaminchgh@moh.et</p>
                    <p class="mt-2">Mon-Sat 00:00-23:00</p>
                    <p class="mt-2">Sunday Emergency only</p>
                </div>
            </div>
        </div>
    </section>

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
                    <li><a href="About.php" class="hover:text-blue-300">About Us</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-xl">Newsletter</h3>
                <form class="mt-2" method="POST" action="subscribe.php">
                    <input type="email" placeholder="Enter your email address" class="p-2 rounded" name="email" required>
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