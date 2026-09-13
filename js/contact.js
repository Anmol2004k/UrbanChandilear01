/* =========================================
   CONTACT FORM (LOCAL INTEGRATION)
========================================= */

const contactForm = document.getElementById("contactForm");
const formMessage = document.getElementById("formMessage");

if (contactForm) {
    contactForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        /* Clear previous errors */
        document.querySelectorAll(".form-error").forEach((error) => {
            error.textContent = "";
        });

        if (formMessage) {
            formMessage.className = "form-message";
            formMessage.textContent = "";
        }

        /* Get values */
        const fullName = document.getElementById("fullName").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        let isValid = true;

        /* Name Validation */
        if (fullName.length < 2) {
            showError("fullName", "Please enter your full name.");
            isValid = false;
        }

        /* Phone Validation */
        const phonePattern = /^[6-9]\d{9}$/;
        const cleanPhone = phone.replace(/\D/g, "").slice(-10);
        if (!phonePattern.test(cleanPhone)) {
            showError("phone", "Please enter a valid 10-digit mobile number.");
            isValid = false;
        }

        /* Email Validation */
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            showError("email", "Please enter a valid email address.");
            isValid = false;
        }

        /* Subject Validation */
        if (subject.length < 3) {
            showError("subject", "Please enter a subject.");
            isValid = false;
        }

        /* Message Validation */
        if (message.length < 10) {
            showError("message", "Please enter at least 10 characters.");
            isValid = false;
        }

        /* If Validation fails, stop here */
        if (!isValid) {
            if (formMessage) {
                formMessage.textContent = "Please check the highlighted fields.";
                formMessage.classList.add("error");
            }
            return;
        }

        /* =================================
           DATA SAVE LOGIC (NO LIBRARIES)
        ================================= */
        if (formMessage) {
            formMessage.textContent = "Sending your message...";
            formMessage.classList.add("info");
        }

        const formData = new FormData(contactForm);

        try {
            const response = await fetch('/includes/contact-process.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.text();

            if (formMessage) {
                formMessage.className = "form-message"; // Reset classes
                
                if (result.trim() === 'success') {
                    // Success display (Uses your existing CSS classes)
                    formMessage.textContent = "Thank you! Your enquiry has been received we can calling You As Soon As Possible.";
                    formMessage.classList.add("success");
                    contactForm.reset(); // Clear form fields
                } else {
                    // Error returned from PHP backend
                    formMessage.textContent = "Error: " + result;
                    formMessage.classList.add("error");
                }
            }

        } catch (error) {
            console.error(error);
            if (formMessage) {
                formMessage.className = "form-message error";
                formMessage.textContent = "Unable to connect to the server. Please try again.";
            }
        }
    });
}

/* Show error function */
function showError(field, message) {
    const error = document.querySelector(`[data-error="${field}"]`);
    if (error) {
        error.textContent = message;
    }
}
