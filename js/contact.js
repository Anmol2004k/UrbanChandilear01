/* =========================================
   CONTACT FORM
========================================= */

const contactForm =
    document.getElementById("contactForm");

const formMessage =
    document.getElementById("formMessage");


if (contactForm) {

    contactForm.addEventListener("submit", function (event) {

        event.preventDefault();


        /* Clear previous errors */

        document
            .querySelectorAll(".form-error")
            .forEach((error) => {

                error.textContent = "";

            });


        formMessage.className = "form-message";

        formMessage.textContent = "";


        /* Get values */

        const fullName =
            document.getElementById("fullName").value.trim();

        const phone =
            document.getElementById("phone").value.trim();

        const email =
            document.getElementById("email").value.trim();

        const subject =
            document.getElementById("subject").value.trim();

        const message =
            document.getElementById("message").value.trim();


        let isValid = true;


        /* =================================
           NAME
        ================================= */

        if (fullName.length < 2) {

            showError(
                "fullName",
                "Please enter your full name."
            );

            isValid = false;

        }


        /* =================================
           PHONE
        ================================= */

        const phonePattern =
            /^[6-9]\d{9}$/;

        const cleanPhone =
            phone.replace(/\D/g, "").slice(-10);


        if (!phonePattern.test(cleanPhone)) {

            showError(
                "phone",
                "Please enter a valid 10-digit mobile number."
            );

            isValid = false;

        }


        /* =================================
           EMAIL
        ================================= */

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


        if (!emailPattern.test(email)) {

            showError(
                "email",
                "Please enter a valid email address."
            );

            isValid = false;

        }


        /* =================================
           SUBJECT
        ================================= */

        if (subject.length < 3) {

            showError(
                "subject",
                "Please enter a subject."
            );

            isValid = false;

        }


        /* =================================
           MESSAGE
        ================================= */

        if (message.length < 10) {

            showError(
                "message",
                "Please enter at least 10 characters."
            );

            isValid = false;

        }


        /* =================================
           RESULT
        ================================= */

        if (!isValid) {

            formMessage.textContent =
                "Please check the highlighted fields.";

            formMessage.classList.add("error");

            return;

        }


        /*
         * TEMPORARY SUCCESS
         *
         * Later PHP will handle:
         *
         * contact.php
         * MySQL
         * Email
         * WhatsApp notification
         *
         */


        formMessage.textContent =
            "Thank you! Your enquiry has been received.";

        formMessage.classList.add("success");


        contactForm.reset();


    });

}


/* =========================================
   SHOW ERROR
========================================= */

function showError(field, message) {

    const error =
        document.querySelector(
            `[data-error="${field}"]`
        );

    if (error) {

        error.textContent = message;

    }

}