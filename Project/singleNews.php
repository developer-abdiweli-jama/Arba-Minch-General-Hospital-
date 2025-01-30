<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single News - Arba Minch General Hospital</title>
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

    <!-- Single News Section -->
    <section class="container mx-auto my-8 px-4">
        <div id="news-content" class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- News content will be dynamically inserted here -->
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

    <!-- JavaScript to Load News Content -->
    <script>
        // News Data
        const newsData = [
            {
                id: 1,
                title: "New Cancer Treatment Facility",
                image: "Project pictures/news1.jpg",
                date: "October 10, 2023",
                content: `
                    Arba Minch General Hospital is proud to announce the opening of a new cancer treatment facility. 
                    This state-of-the-art center is equipped with the latest technology and staffed by highly trained 
                    oncologists and medical professionals. Our goal is to provide comprehensive cancer care to our 
                    community, including diagnosis, treatment, and support services.
                `
            },
            {
                id: 2,
                title: "Free Health Checkup Camp",
                image: "Project pictures/news2.jpg",
                date: "November 5, 2023",
                content: `
                    Join us for a free health checkup camp on November 15th, 2023, at the hospital premises. 
                    This camp will offer free screenings for diabetes, blood pressure, and other common health issues. 
                    Our team of doctors and nurses will be available to provide consultations and advice.
                `
            },
            {
                id: 3,
                title: "New Pediatric Wing Inaugurated",
                image: "Project pictures/news3.jpg",
                date: "September 20, 2023",
                content: `
                    What is CRISPR diagnostics?
            Emerging applications of CRISPR diagnostics
            Notable CRISPR diagnostics platforms
            Advantages and innovations in CRISPR diagnostics
            The future of CRISPR diagnostics
            References
            Further reading

            CRISPR technology has revolutionized genetic testing and disease detection, offering precise, rapid, and cost-effective diagnostic solutions. This gene-editing tool has been adapted for molecular diagnostics, utilizing Cas proteins to detect specific nucleic acid sequences with high sensitivity. CRISPR-based platforms such as SHERLOCK and DETECTR enable point-of-care testing, multiplexed detection, and portable diagnostics, transforming healthcare delivery in resource-limited settings.

            What is CRISPR diagnostics?
            CRISPR technology, originally discovered as a bacterial defense mechanism against viruses, has revolutionized genetic engineering and is rapidly transforming the field of diagnostics.1

            These systems consist of clustered, regularly interspaced short palindromic repeats (CRISPR) and CRISPR-associated (Cas) proteins.1  CRISPR-Cas systems utilize RNA guides to direct Cas proteins to specific DNA sequences, where the Cas protein cleaves the DNA. This ability to precisely target and cut DNA is the foundation for gene editing applications.1  

            Understanding CRISPR Therapy
            Its ability to recognize and bind to specific nucleic acid sequences with high sensitivity and specificity makes it ideal for diagnostic applications.2 A guide RNA (gRNA) is designed to be complementary to the target nucleic acid sequence (DNA or RNA) of the pathogen or biomarker of interest.2  

            When the gRNA finds and binds to its target, it activates the Cas enzyme.2 Upon activation, some Cas enzymes exhibit "collateral cleavage" activity, where they cleave nearby reporter molecules.2 This generates a detectable diagnostic signal, indicating the presence of the target sequence.2  

            Noteworthy among the recent advancements are SHERLOCK (Specific High-sensitivity Enzymatic Reporter unlocking)3,4 and DETECTR (DNA Endonuclease Targeted CRISPR Trans Reporter)4.   
                `
            }
        ];

        // Get the news ID from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const newsId = parseInt(urlParams.get('id'));

        // Find the news article
        const newsArticle = newsData.find(article => article.id === newsId);

        // Display the news article
        const newsContent = document.getElementById('news-content');
        if (newsArticle) {
            newsContent.innerHTML = `
                <img src="${newsArticle.image}" alt="News Image" class="w-full h-96 object-cover">
                <div class="p-8">
                    <h1 class="text-3xl font-bold text-blue-900 mb-4">${newsArticle.title}</h1>
                    <p class="text-gray-700 mb-4">Published on: <span class="font-semibold">${newsArticle.date}</span></p>
                    <p class="text-gray-700 leading-relaxed">${newsArticle.content}</p>
                </div>
            `;
        } else {
            newsContent.innerHTML = `<p class="p-8 text-red-600">News article not found.</p>`;
        }
    </script>
</body>

</html>