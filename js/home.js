/* =========================================
   HOME PAGE JAVASCRIPT
========================================= */


/* =========================================
   SCROLL REVEAL
========================================= */

document.addEventListener("DOMContentLoaded", () => {

    const revealElements =
        document.querySelectorAll(".reveal");


    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("visible");

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );


        revealElements.forEach(element => {

            observer.observe(element);

        });

    } else {

        revealElements.forEach(element => {

            element.classList.add("visible");

        });

    }

});


/* =========================================
   QUOTE FORM
========================================= */
 

/* =========================================
   HOMEPAGE QUOTE FORM SUBMIT HANDLER
========================================= */
const quoteForm = document.getElementById("quoteForm");
const quoteMessage = document.getElementById("formMessage");

if (quoteForm) {
    quoteForm.addEventListener("submit", async function (event) {
        event.preventDefault(); // Stop standard browser page reloads

        // 1. Double submit protection: Temporarily lock the button
        const submitBtn = quoteForm.querySelector(".form-submit");
        if (submitBtn) submitBtn.disabled = true;

        if (quoteMessage) {
            quoteMessage.textContent = "Sending your enquiry...";
            quoteMessage.style.color = "#3498db"; // Neutral Information color
        }

        const formData = new FormData(quoteForm);

        try {
            // 2. Fetch connection to our new standalone PHP endpoint
            const response = await fetch('/includes/quote-process.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.text();
            const responseStatus = result.trim();

            if (quoteMessage) {
                if (responseStatus === 'success') {
                    // 3. Native client feedback loop
                    quoteMessage.textContent = "Thank you! Your quote request has been received.";
                    quoteMessage.style.color = "#2ecc71"; // Success Green
                    quoteForm.reset(); // Wipe inputs clean
                } else {
                    quoteMessage.textContent = "Error: " + result;
                    quoteMessage.style.color = "#e74c3c"; // Failure Red
                    if (submitBtn) submitBtn.disabled = false; // Re-enable button to let user re-try
                }
            }

        } catch (error) {
            console.error(error);
            if (quoteMessage) {
                quoteMessage.textContent = "Unable to connect to the server. Please try again.";
                quoteMessage.style.color = "#e74c3c";
            }
            if (submitBtn) submitBtn.disabled = false;
        }
    });
}




            /*
                IMPORTANT:

                Abhi frontend demo hai.

                PHP + MySQL conversion ke baad
                yahan AJAX/fetch se:

                submit-enquiry.php

                ko data bhejenge.
            */

       
/* =========================================
   WHATSAPP SERVICE LINKS
========================================= */

document
    .querySelectorAll(".service-links a")
    .forEach(link => {

        link.addEventListener(
            "click",
            () => {

                link.style.opacity = "0.7";

            }
        );

    });