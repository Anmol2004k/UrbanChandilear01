/* =========================================================
   SERVICE PAGE JAVASCRIPT
========================================================= */

document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       SCROLL REVEAL
    ====================================================== */

    const revealElements = document.querySelectorAll(".reveal");

    if ("IntersectionObserver" in window) {

        const observer = new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        observer.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            }
        );


        revealElements.forEach(function (element) {
            observer.observe(element);
        });

    } else {

        revealElements.forEach(function (element) {
            element.classList.add("show");
        });

    }


    /* =====================================================
       SERVICE CARD STAGGER
    ====================================================== */

    const cards = document.querySelectorAll(
        ".service-card, .additional-card, .process-card"
    );

    cards.forEach(function (card, index) {

        card.style.transitionDelay =
            `${(index % 5) * 80}ms`;

    });


    /* =====================================================
       CONTACT SERVICE AUTO SELECT
    ====================================================== */

    const currentUrl = new URL(window.location.href);

    const service = currentUrl.searchParams.get("service");

    if (service) {

        console.log(
            "Selected service:",
            service
        );

    }


    /* =====================================================
       PREVENT EMPTY LINKS
    ====================================================== */

    const links = document.querySelectorAll(
        'a[href="#"]'
    );

    links.forEach(function (link) {

        link.addEventListener("click", function (event) {

            event.preventDefault();

        });

    });


});