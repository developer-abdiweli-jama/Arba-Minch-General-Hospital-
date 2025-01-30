<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - Arba Minch General Hospital</title>
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
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-white shadow-md" aria-label="Main Navigation">
        <div class="container mx-auto flex justify-between items-center p-4 flex-wrap">
            <!-- Left Side: Navigation Links -->
            <div class="flex space-x-8 flex-wrap">
                <a href="index1.html" class="text-gray-700 hover:text-blue-600 font-semibold">Home</a>
                <a href="About.html" class="text-gray-700 hover:text-blue-600 font-semibold">About Us</a>
                <a href="Services.html" class="text-gray-700 hover:text-blue-600 font-semibold">Services</a>
                <a href="Doctors.html" class="text-gray-700 hover:text-blue-600 font-semibold">Doctors</a>
                <a href="Appointments.html" class="text-gray-700 hover:text-blue-600 font-semibold">Appointment</a>
                <a href="News.html" class="text-gray-700 hover:text-blue-600 font-semibold">News</a>
                <a href="Contact.html" class="text-gray-700 hover:text-blue-600 font-semibold">Contact</a>
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

    <!-- Main Content -->
    <main class="container mx-auto p-8">
        <!-- Grid Container for Appointment Form and Schedule Hours -->
        <div class="grid-container">
            <!-- Book an Appointment Section -->
            <section class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold mb-6 text-blue-900">Book an Appointment</h2>
                <p class="text-gray-600 mb-6">
                    Schedule your visit with ease and convenience. Whether you're seeking expert advice, a consultation,
                    or personalized services, our team is here to assist you. Booking an appointment is quick and
                    simple—just choose a time that works best for you, and we’ll take care of the rest. Let us help you
                    take the next step toward achieving your goals. Your time is valuable, and we’re committed to
                    providing you with a seamless and professional experience.
                </p>
                <form action="php/appointments.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Appointment Date -->
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 font-semibold mb-2">Appointment Date</label>
                        <input type="date" id="date" name="date"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Select Doctor -->
                    <div class="mb-4">
                        <label for="doctor" class="block text-gray-700 font-semibold mb-2">Select Doctor</label>
                        <select id="doctor" name="doctor"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="Dr. John Doe">Dr. John Doe</option>
                            <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                            <option value="Dr. Michael Brown">Dr. Michael Brown</option>
                            <option value="Dr. Sarah Johnson">Dr. Sarah Johnson</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="md:col-span-2">
                        <button type="submit"
                            class="bg-blue-600 text-white p-3 rounded-lg w-full font-semibold hover:bg-blue-700 transition duration-300">SUBMIT</button>
                    </div>
                </form>
            </section>

            <!-- Schedule Hours -->
            <section class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6 text-blue-900">Schedule Hours</h2>
                <div class="space-y-4">
                    <!-- Monday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Monday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Tuesday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Tuesday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Wednesday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Wednesday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Thursday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Thursday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Friday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Friday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Saturday -->
                    <div class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Saturday</span>
                            <span class="text-gray-600">12:00 AM - 11:00 PM</span>
                        </div>
                    </div>

                    <!-- Sunday -->
                    <div class="p-4 border border-gray-200 rounded-lg bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-gray-700">Sunday</span>
                            <span class="text-gray-600">Closed</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6">
        <div class="container mx-auto p-4 flex justify-between items-center flex-wrap">
            <div>
                <h3 class="font-bold text-xl">Important Links</h3>
                <ul class="mt-2">
                    <li><a href="Contact.html" class="hover:text-blue-300">Contact Us</a></li>
                    <li><a href="News.html" class="hover:text-blue-300">News</a></li>
                    <li><a href="index1.html" class="hover:text-blue-300">Home</a></li>
                    <li><a href="Doctors.html" class="hover:text-blue-300">Doctors</a></li>
                    <li><a href="Services.html" class="hover:text-blue-300">Services</a></li>
                    <li><a href="About.html" class="hover:text-blue-300">About Us</a></li>
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