
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

// Function to hide popup (Just closes it, does NOT block it from showing next time)
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

// Form submit 
leadForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(leadForm);
    formData.append('submit_form', '1');

    try {
        const response = await fetch('/includes/popup-form.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.text();

        if (result.trim() === 'success') {
            alert('Form submitted successfully!');
            
            // PERMANENT FLAG: Save to localStorage so they NEVER see it again
            localStorage.setItem('formSubmittedSuccessfully', 'true'); 
            
            leadForm.reset();
            hidePopup();
        } else {
            alert('Something went wrong: ' + result);
        }

    } catch (error) {
        console.error(error);
        alert('Unable to connect to the server.');
    }
});


// sucessful message k liye 

// Paste this inside your JAVASCRIPT file:

leadForm.addEventListener('submit', async (e) => {
    e.preventDefault();

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
    }
});
