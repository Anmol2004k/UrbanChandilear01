
const menuToggle = document.getElementById("menuToggle");
const mainNavigation = document.getElementById("mainNavigation");

const dropdownToggle = document.querySelector(".dropdown-toggle");
const dropdownParent = document.querySelector(".has-dropdown");


/* ================================
   MOBILE MENU
================================ */

if (menuToggle) {

    menuToggle.addEventListener("click", () => {

        mainNavigation.classList.toggle("active");

    });

}


/* ================================
   MOBILE SERVICE DROPDOWN
================================ */

if (dropdownToggle) {

    dropdownToggle.addEventListener("click", () => {

        dropdownParent.classList.toggle("open");

    });

}


/* =========================================
   GALLERY FILTER
========================================= */

const galleryFilters =
    document.querySelectorAll(".gallery-filter");

const galleryCards =
    document.querySelectorAll(".gallery-card");


galleryFilters.forEach((filter) => {

    filter.addEventListener("click", () => {

        const selectedCategory =
            filter.dataset.filter;


        /* Active button */

        galleryFilters.forEach((item) => {
            item.classList.remove("active");
        });

        filter.classList.add("active");


        /* Filter cards */

        galleryCards.forEach((card) => {

            const cardCategory =
                card.dataset.category;


            if (
                selectedCategory === "all" ||
                cardCategory === selectedCategory
            ) {

                card.style.display = "";

            } else {

                card.style.display = "none";

            }

        });

    });

});
 

const popupOverlay = document.getElementById('leadPopup');
const closeBtn = document.getElementById('closePopup');
const leadForm = document.getElementById('leadForm');

// Function to show popup
function showPopup() {
    // Check if the user has already successfully submitted the form
    if (!localStorage.getItem('formSubmittedSuccessfully')) {
        popupOverlay.classList.add('active');
    }
}

// Function to hide popup (Just closes it)
function hidePopup() {
    popupOverlay.classList.remove('active');
}

// 20 seconds ke baad popup show
setTimeout(() => {
    showPopup();
}, 20000);

// Close button
closeBtn.addEventListener('click', hidePopup);

// Popup ke bahar click karne par close
popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) {
        hidePopup();
    }
});

// ⚡ FIXED: Sirf EK baar submit listener rakha hai jo double entry ko rokega
if (leadForm) {
    leadForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Safe protection: Button ko temporarily disable karein taaki fast double-click se do baar data na jaye
        const submitBtn = leadForm.querySelector('button[type="submit"]');
        if (submitBtn) submitBtn.disabled = true;

        const formData = new FormData(leadForm);
        formData.append('submit_form', '1');

        try {
            const response = await fetch('/includes/popup-form.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.text();

            if (result.trim() === 'success') {
                // 🌟 Professional Success Modal
                Swal.fire({
                    title: 'Success!',
                    text: 'Form submitted successfully!',
                    icon: 'success',
                    confirmButtonColor: '#2ecc71',
                    timer: 2000
                });
                
                // PERMANENT FLAG: Save to localStorage so they NEVER see it again
                localStorage.setItem('formSubmittedSuccessfully', 'true'); 
                
                leadForm.reset();
                hidePopup();
            } else {
                // ❌ Clean Error Modal if PHP backend fails
                Swal.fire({
                    title: 'Submission Failed',
                    text: 'Something went wrong: ' + result,
                    icon: 'error',
                    confirmButtonColor: '#e74c3c'
                });
                if (submitBtn) submitBtn.disabled = false; // Re-enable button on failure
            }

        } catch (error) {
            console.error(error);
            // ⚠️ Server Network Error Modal
            Swal.fire({
                title: 'Connection Error',
                text: 'Unable to connect to the server. Please try again later.',
                icon: 'warning',
                confirmButtonColor: '#f39c12'
            });
            if (submitBtn) submitBtn.disabled = false; // Re-enable button on error
        }
    });
}
 

/* =========================================
   FOOTER NEWSLETTER SUBMIT HANDLER
========================================= */
const newsletterForm = document.getElementById("newsletterForm");
const newsletterMessage = document.getElementById("newsletterMessage");

if (newsletterForm) {
    newsletterForm.addEventListener("submit", async function (event) {
        event.preventDefault(); // Stop standard whole-page reloads

        if (newsletterMessage) {
            newsletterMessage.textContent = "Processing subscription...";
            newsletterMessage.style.color = "#3498db"; // Neutral informational color
        }

        const formData = new FormData(newsletterForm);

        try {
            const response = await fetch('/includes/newsletter-process.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.text();
            const responseStatus = result.trim();

            if (newsletterMessage) {
                if (responseStatus === 'success') {
                    newsletterMessage.textContent = "Thank you for subscribing!";
                    newsletterMessage.style.color = "#2ecc71"; // Success Green
                    newsletterForm.reset(); 
                } else if (responseStatus === 'already_subscribed') {
                    newsletterMessage.textContent = "You are already signed up for our newsletter.";
                    newsletterMessage.style.color = "#f39c12"; // Informational Orange
                    newsletterForm.reset();
                } else {
                    newsletterMessage.textContent = "Error: " + result;
                    newsletterMessage.style.color = "#e74c3c"; // Danger Red
                }
            }

        } catch (error) {
            console.error(error);
            if (newsletterMessage) {
                newsletterMessage.textContent = "Network error. Unable to link to server.";
                newsletterMessage.style.color = "#e74c3c";
            }
        }
    });
}
