// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", () => {
    // Smooth Scrolling for Navigation Links
    const navLinks = document.querySelectorAll(".nav ul li a, .cta-btn, .hero-buttons a");

    navLinks.forEach(link => {
        link.addEventListener("click", event => {
            event.preventDefault();
            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 50, // Offset for sticky header
                    behavior: "smooth"
                });
            }
        });
    });

    // Form Submission Handling
    const appointmentForm = document.querySelector(".appointment-form");

    appointmentForm.addEventListener("submit", event => {
        event.preventDefault();

        const formData = new FormData(appointmentForm);
        const data = {
            name: formData.get("name"),
            email: formData.get("email"),
            phone: formData.get("phone"),
            department: formData.get("department"),
            message: formData.get("message")
        };

        // Display a success message (mock submission)
        alert(`Thank you, ${data.name}! Your appointment request has been submitted.`);

        // Optionally, reset the form
        appointmentForm.reset();
    });

    // Add Header Scroll Effect
    const header = document.querySelector(".header");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});
