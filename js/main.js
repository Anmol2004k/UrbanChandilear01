
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

