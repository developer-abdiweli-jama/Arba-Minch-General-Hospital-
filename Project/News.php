<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Arba Minch General Hospital</title>
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

    <!-- News Section -->
    <section class="container mx-auto my-8 px-4">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">Latest News</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- News Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/news1.jpg" alt="News Image 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-2">New Cancer Treatment Facility</h2>
                    <p class="text-gray-700 mb-4">Arba Minch General Hospital has launched a state-of-the-art cancer
                        treatment facility to serve the community better.</p>
                    <a href="SingleNews.html?id=1" class="text-blue-600 font-semibold hover:text-blue-800">Read More
                        →</a>
                </div>
            </div>

            <!-- News Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="Project pictures/news2.jpg" alt="News Image 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-2">Free Health Checkup Camp</h2>
                    <p class="text-gray-700 mb-4">Join us for a free health checkup camp on November 15th, 2023, at the
                        hospital premises.</p>
                    <a href="SingleNews.html?id=2" class="text-blue-600 font-semibold hover:text-blue-800">Read More
                        →</a>
                </div>
            </div>

            <!-- News Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://d2jx2rerrg6sh3.cloudfront.net/image-handler/ts/20250128120727/ri/750/src/images/Article_Images/ImageForArticle_25736_17380840425967216.jpg"
                    alt="News Image 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-2">CRISPR-Based Diagnostics: The Future of Disease
                        Detection </h2>
                    <p class="text-gray-700 mb-4">CRISPR technology has revolutionized genetic testing and disease
                        detection, offering precise, rapid, and cost-effective diagnostic solutions. This gene-editing
                        tool has been adapted for molecular diagnostics, utilizing Cas proteins to detect specific
                        nucleic acid sequences with high sensitivity.y
                        <a href="SingleNews.html?id=3" class="text-blue-600 font-semibold hover:text-blue-800">Read More
                            →</a>
                </div>
            </div>
        </div>
    </section>

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
                    <li><a href="Appointments.html" class="hover:text-blue-300">Appointment</a></li>
                    <li><a href="Doctors.html" class="hover:text-blue-300">Doctors</a></li>
                    <li><a href="Services.html" class="hover:text-blue-300">Services</a></li>
                    <li><a href="index1.html" class="hover:text-blue-300">Home</a></li>
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