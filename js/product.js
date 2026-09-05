/* =========================================
   PRODUCT FILTER SYSTEM
========================================= */

document.addEventListener("DOMContentLoaded", () => {

    const productGrid =
        document.getElementById("productsGrid");

    if (!productGrid) {
        return;
    }


    const products = [
        ...productGrid.querySelectorAll(".product-card")
    ];


    const filterButtons =
        document.querySelectorAll(".filter-btn");

    const searchInput =
        document.getElementById("productSearch");

    const sortSelect =
        document.getElementById("sortProducts");

    const priceRange =
        document.getElementById("priceRange");

    const priceValue =
        document.getElementById("priceValue");

    const productCount =
        document.getElementById("productCount");

    const clearFilters =
        document.getElementById("clearFilters");

    const noProducts =
        document.getElementById("noProducts");

    const resetProducts =
        document.getElementById("resetProducts");


    let currentCategory = "all";


    /* =========================================
       FILTER PRODUCTS
    ========================================== */

    function filterProducts() {

        const searchTerm =
            searchInput.value
                .toLowerCase()
                .trim();


        const maximumPrice =
            Number(priceRange.value);


        let visibleProducts = [];


        products.forEach((product) => {

            const categories =
                product.dataset.category
                    .toLowerCase()
                    .split(" ");


            const productName =
                product.dataset.name
                    .toLowerCase();


            const productPrice =
                Number(product.dataset.price);


            /* CATEGORY */

            const categoryMatch =
                currentCategory === "all" ||
                categories.includes(currentCategory);


            /* SEARCH */

            const searchMatch =
                productName.includes(searchTerm);


            /* PRICE */

            const priceMatch =
                productPrice <= maximumPrice;


            const shouldShow =
                categoryMatch &&
                searchMatch &&
                priceMatch;


            if (shouldShow) {

                product.style.display = "";

                visibleProducts.push(product);

            } else {

                product.style.display = "none";

            }

        });


        /* SORT */

        sortProducts(visibleProducts);


        /* COUNT */

        productCount.textContent =
            `Showing ${visibleProducts.length} product${visibleProducts.length === 1 ? "" : "s"}`;


        /* NO RESULTS */

        if (visibleProducts.length === 0) {

            noProducts.classList.add("show");

        } else {

            noProducts.classList.remove("show");

        }

    }


    /* =========================================
       SORT
    ========================================== */

    function sortProducts(productList) {

        const sortValue =
            sortSelect.value;


        if (sortValue === "price-low") {

            productList.sort((a, b) => {

                return Number(a.dataset.price) -
                    Number(b.dataset.price);

            });

        }


        if (sortValue === "price-high") {

            productList.sort((a, b) => {

                return Number(b.dataset.price) -
                    Number(a.dataset.price);

            });

        }


        if (sortValue === "name") {

            productList.sort((a, b) => {

                return a.dataset.name
                    .localeCompare(
                        b.dataset.name
                    );

            });

        }


        productList.forEach((product) => {

            productGrid.appendChild(product);

        });

    }


    /* =========================================
       CATEGORY BUTTONS
    ========================================== */

    filterButtons.forEach((button) => {

        button.addEventListener("click", () => {

            filterButtons.forEach((btn) => {

                btn.classList.remove("active");

            });


            button.classList.add("active");


            currentCategory =
                button.dataset.filter;


            filterProducts();

        });

    });


    /* =========================================
       SEARCH
    ========================================== */

    searchInput.addEventListener(
        "input",
        filterProducts
    );


    /* =========================================
       SORT
    ========================================== */

    sortSelect.addEventListener(
        "change",
        filterProducts
    );


    /* =========================================
       PRICE RANGE
    ========================================== */

    priceRange.addEventListener(
        "input",
        () => {

            const value =
                Number(priceRange.value);


            if (value >= 50000) {

                priceValue.textContent =
                    "₹0 – ₹50,000+";

            } else {

                priceValue.textContent =
                    `₹0 – ₹${value.toLocaleString("en-IN")}`;

            }


            filterProducts();

        }
    );


    /* =========================================
       CLEAR FILTERS
    ========================================== */

    function resetAllFilters() {

        currentCategory = "all";


        filterButtons.forEach((button) => {

            button.classList.remove("active");

        });


        const allButton =
            document.querySelector(
                '.filter-btn[data-filter="all"]'
            );


        if (allButton) {
            allButton.classList.add("active");
        }


        searchInput.value = "";

        sortSelect.value = "default";

        priceRange.value = "50000";

        priceValue.textContent =
            "₹0 – ₹50,000+";


        filterProducts();

    }


    clearFilters.addEventListener(
        "click",
        resetAllFilters
    );


    resetProducts.addEventListener(
        "click",
        resetAllFilters
    );


    /* =========================================
       INITIAL LOAD
    ========================================== */

    filterProducts();

});