
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
            popupOverlay.classList.add('active');
        }

        // Function to hide popup
        function hidePopup() {
            popupOverlay.classList.remove('active');
        }

        // 1. 1 Minute (60,000 milliseconds) ke baad popup show karne ke liye timer
        setTimeout(() => {
            showPopup();
        }, 20000); // 60 seconds = 1 minute

        // 2. 'X' button click karne par popup band ho jaye
        closeBtn.addEventListener('click', hidePopup);

        // 3. Popup box ke bahar background par click karne par bhi popup band ho jaye
        popupOverlay.addEventListener('click', (e) => {
            if (e.target === popupOverlay) {
                hidePopup();
            }
        });

        // 4. Form submit hone par (Jab aap backend jodenge)
        leadForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Page refresh hone se rokne ke liye
            
            // Yahan aap apna AJAX ya fetch use karke data PHP backend ko bhej sakte hain
            alert('Form submitted successfully! (Backend integration pending)');
            
            hidePopup(); // Form submit hone ke baad popup close kar dein
        });