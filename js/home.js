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

const quoteForm =
    document.getElementById("quoteForm");


if (quoteForm) {

    quoteForm.addEventListener(
        "submit",
        function (event) {

            event.preventDefault();


            const formMessage =
                document.getElementById(
                    "formMessage"
                );


            const name =
                document.getElementById(
                    "name"
                ).value.trim();


            const phone =
                document.getElementById(
                    "phone"
                ).value.trim();


            const service =
                document.getElementById(
                    "service"
                ).value;


            if (!name || !phone || !service) {

                formMessage.textContent =
                    "Please fill all required fields.";

                return;

            }


            formMessage.textContent =
                "Thank you! Your enquiry has been received.";


            quoteForm.reset();


            /*
                IMPORTANT:

                Abhi frontend demo hai.

                PHP + MySQL conversion ke baad
                yahan AJAX/fetch se:

                submit-enquiry.php

                ko data bhejenge.
            */

        }
    );

}


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