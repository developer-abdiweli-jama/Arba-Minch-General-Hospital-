<?php
require_once __DIR__ . '/../templates/header.php';
?>

<!-- Navbar -->
<nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <!-- Left Side: Navigation Links -->
            <div class="flex space-x-8 flex-wrap">
                <a href="index.php" class="text-gray-700 hover:text-blue-600 font-semibold">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-blue-600 font-semibold">About Us</a>
                <a href="services.php" class="text-gray-700 hover:text-blue-600 font-semibold">Services</a>
                <a href="doctors.php" class="text-gray-700 hover:text-blue-600 font-semibold">Doctors</a>
                <a href="appointments.php" class="text-gray-700 hover:text-blue-600 font-semibold">Appointment</a>
                <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
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

    <!-- Main Content -->
    <main class="container mx-auto p-8">
        <!-- About Us Section -->
        <section class="mb-12">
            <h2 class="text-4xl font-bold mb-6 " style="color: #1F2B6C;">About Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Side: Image -->
                <div>
                    <img src="Project pictures/Arba_Minch_General_Hospital_Front_Gate.jpg" alt="About Us Image"
                        class="rounded-lg shadow-lg">
                </div>
                <!-- Right Side: Text Content -->
                <div class="text-gray-700">
                    <p class="mb-4">
                        Arba Minch General Hospital is a leading healthcare provider in the region, offering a wide
                        range of medical services. Our mission is to deliver exceptional patient care with compassion,
                        innovation, and excellence.
                    </p>
                    <p class="mb-4">
                        Established in 1985, we have grown to become a trusted name in healthcare, serving thousands of
                        patients annually. Our team of highly skilled doctors, nurses, and staff are dedicated to
                        improving the health and well-being of our community.
                    </p>
                    <p class="mb-4">
                        We are equipped with state-of-the-art facilities and cutting-edge technology to ensure the
                        highest standards of medical care. From emergency services to specialized treatments, we are
                        committed to meeting the diverse healthcare needs of our patients.
                    </p>
                    <a href="#"
                        class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 inline-block mt-4">Learn
                        More</a>
                </div>
            </div>
        </section>

        <!-- Mission and Vision Section -->
        <section class="mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Our Mission</h3>
                    <p class="text-gray-700">
                        To provide high-quality, patient-centered healthcare services that improve the lives of
                        individuals and communities we serve.
                    </p>
                </div>
                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Our Vision</h3>
                    <p class="text-gray-700">
                        To be the leading healthcare institution in the region, recognized for excellence in medical
                        care, innovation, and community service.
                    </p>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="mb-12">
            <h3 class="text-3xl font-bold text-blue-900 mb-6">Our Core Values</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-blue-900 mb-2">Compassion</h4>
                    <p class="text-gray-700">
                        We treat every patient with empathy, kindness, and respect.
                    </p>
                </div>
                <!-- Value 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-blue-900 mb-2">Excellence</h4>
                    <p class="text-gray-700">
                        We strive for the highest standards in medical care and service delivery.
                    </p>
                </div>
                <!-- Value 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold text-blue-900 mb-2">Innovation</h4>
                    <p class="text-gray-700">
                        We embrace new technologies and practices to improve patient outcomes.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <!-- Contact Section -->
    <section class="bg-white text-blue-900 py-12">
        <div class="container mx-auto p-4">
            <h2 class="section-title text-white text-center text-3xl font-bold mb-8">GET IN TOUCH</h2>
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

    <?php
require_once __DIR__ . '/../templates/footer.php';
?>