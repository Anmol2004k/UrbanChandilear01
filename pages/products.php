<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Luxury Chandeliers & Designer Lighting | Urban Chandelier
    </title>

    <meta
        name="description"
        content="Explore luxury crystal, modern, Italian, custom and long-height chandeliers from Urban Chandelier. Custom sizes, premium finishes and pan India chandelier solutions.">

    <meta
        name="robots"
        content="index, follow">



    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/product.css">

</head>


<body>


    <!-- =========================================
     HEADER
========================================= -->
     <?php include '../includes/header.php';?>



    <main>


        <!-- =========================================
         PRODUCT HERO
    ========================================== -->

        <section class="products-hero">

            <div class="products-container">

                <span class="products-eyebrow">
                    OUR COLLECTION
                </span>

                <h1>
                    Luxury Chandeliers
                    <span>& Lighting</span>
                </h1>

                <p>
                    Discover statement chandeliers designed for luxury
                    homes, villas, hotels, banquet halls and commercial
                    interiors across India.
                </p>

                <div class="products-stats">

                    <div>
                        <strong>500+</strong>
                        <span>Design Options</span>
                    </div>

                    <div>
                        <strong>Custom</strong>
                        <span>Sizes Available</span>
                    </div>

                    <div>
                        <strong>Pan India</strong>
                        <span>Service</span>
                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================
         FILTER SECTION
========================================= -->

        <section class="product-filter-section">

            <div class="products-container">


                <div class="filter-heading">

                    <div>

                        <span class="products-eyebrow">
                            EXPLORE COLLECTION
                        </span>

                        <h2>
                            Find Your Perfect Chandelier
                        </h2>

                    </div>

                    <p>
                        Browse our collection by style, type and price.
                    </p>

                </div>



                <!-- SEARCH -->

                <div class="product-search-row">

                    <div class="product-search">

                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="m16.5 16.5 4 4"></path>
                        </svg>

                        <input
                            type="search"
                            id="productSearch"
                            placeholder="Search chandeliers..."
                            aria-label="Search products">

                    </div>


                    <!-- SORT -->

                    <div class="product-sort">

                        <label for="sortProducts">
                            SORT BY
                        </label>

                        <select id="sortProducts">

                            <option value="default">
                                Newest First
                            </option>

                            <option value="price-low">
                                Price: Low to High
                            </option>

                            <option value="price-high">
                                Price: High to Low
                            </option>

                            <option value="name">
                                Name: A-Z
                            </option>

                        </select>

                    </div>

                </div>



                <!-- CATEGORY FILTER -->

                <div
                    class="category-filter"
                    role="group"
                    aria-label="Product categories">

                    <button
                        class="filter-btn active"
                        data-filter="all">
                        All
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="crystal">
                        Crystal
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="modern">
                        Modern
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="italian">
                        Italian
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="long-height">
                        Long Height
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="circular">
                        Circular
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="traditional">
                        Traditional
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="glass">
                        Glass
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="hanging">
                        Hanging Lights
                    </button>

                </div>



                <!-- PRICE FILTER -->

                <div class="price-filter">

                    <div class="price-filter-title">

                        <span>
                            PRICE RANGE
                        </span>

                        <strong id="priceValue">
                            ₹0 – ₹50,000+
                        </strong>

                    </div>

                    <input
                        type="range"
                        id="priceRange"
                        min="0"
                        max="50000"
                        value="50000"
                        step="1000"
                        aria-label="Maximum price">

                </div>



                <!-- FILTER RESULT -->

                <div class="filter-result">

                    <span id="productCount">
                        Showing 12 products
                    </span>

                    <button
                        id="clearFilters"
                        type="button">
                        Clear Filters
                    </button>

                </div>


            </div>

        </section>



        <!-- =========================================
         PRODUCTS
========================================= -->

        <section class="products-section">

            <div class="products-container">

                <div
                    class="products-grid"
                    id="productsGrid">


                    <!-- PRODUCT 01 -->

                    <article
                        class="product-card"
                        data-category="crystal long-height"
                        data-price="45000"
                        data-name="Aurora Cascade Grand Crystal Chandelier">

                        <div class="product-image">

                            <span class="product-badge">
                                Featured
                            </span>

                            <img
                                src="/assets/images/gallery/Collection1.webp"
                                alt="Aurora Cascade Grand Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Crystal · Long Height
                            </span>

                            <h2>
                                Aurora Cascade Grand Crystal Chandelier
                            </h2>

                            <p>
                                A dramatic cascading crystal chandelier
                                designed for double-height interiors,
                                luxury villas and grand entrance spaces.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 02 -->

                    <article
                        class="product-card"
                        data-category="crystal circular"
                        data-price="38000"
                        data-name="Aurielle Luxe Circular Crystal Chandelier">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/Collection2.webp"
                                alt="Aurielle Luxe Circular Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="800">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Crystal · Circular
                            </span>

                            <h2>
                                Aurielle Luxe Circular Crystal Chandelier
                            </h2>

                            <p>
                                Layered crystal drops with warm ambient
                                lighting for elegant living rooms,
                                dining spaces and luxury interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 03 -->

                    <article
                        class="product-card"
                        data-category="modern glass"
                        data-price="19000"
                        data-name="Rose Arcora Modern Glass Chandelier">

                        <div class="product-image">

                            <span class="product-badge">
                                New
                            </span>

                            <img
                                src="/assets/images/products/rose-arcora-modern-glass-chandelier.webp"
                                alt="Rose Arcora Modern Glass Chandelier"
                                loading="lazy"
                                width="800"
                                height="800">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Modern · Glass
                            </span>

                            <h2>
                                Rosé Arcora Modern Glass Chandelier
                            </h2>

                            <p>
                                A contemporary statement chandelier
                                featuring curved rose-tinted glass arms
                                and a refined metallic structure.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    ₹19,000
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 04 -->

                    <article
                        class="product-card"
                        data-category="modern crystal"
                        data-price="32000"
                        data-name="Aurielle Luxe Modern Crystal Chandelier">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/Collection3.avif"
                                alt="Aurielle Luxe Modern Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="800">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Modern · Crystal
                            </span>

                            <h2>
                                Aurielle Luxe Modern Crystal Chandelier
                            </h2>

                            <p>
                                Precision-cut crystal rods combined
                                with a premium gold finish for modern
                                luxury interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 05 -->

                    <article
                        class="product-card"
                        data-category="italian crystal"
                        data-price="50000"
                        data-name="Italian Premium Gold Plated Crystal Chandelier">

                        <div class="product-image">

                            <span class="product-badge">
                                Premium
                            </span>

                            <img
                                src="/assets/images/gallery/Collection4.avif"
                                alt="Italian Premium Gold Plated Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Italian · Crystal
                            </span>

                            <h2>
                                Italian Premium Gold Plated Crystal Chandelier
                            </h2>

                            <p>
                                Luxury Italian-inspired crystal chandelier
                                designed for hotels, banquet halls,
                                villas and grand hospitality spaces.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 06 -->

                    <article
                        class="product-card"
                        data-category="italian crystal"
                        data-price="48000"
                        data-name="Italian Gold Plated Crystal Chandelier 96 Lights">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/Collection5.avif"
                                alt="Italian Gold Plated Crystal Chandelier with 96 Lights"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Italian · Crystal
                            </span>

                            <h2>
                                Italian Gold Plated Crystal Chandelier – 96 Lights
                            </h2>

                            <p>
                                An elegant large-format chandelier with
                                gold-plated structure and multiple lights.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 07 -->

                    <article
                        class="product-card"
                        data-category="italian crystal"
                        data-price="50000"
                        data-name="Italian Double Cap Crystal Chandelier">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/Collection6.avif"
                                alt="Italian Double Cap Gold Plated Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Italian · Crystal
                            </span>

                            <h2>
                                Italian Double Cap Crystal Chandelier
                            </h2>

                            <p>
                                Gold-plated double-cap chandelier with
                                clear crystal detailing for premium
                                hospitality and residential interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 08 -->

                    <article
                        class="product-card"
                        data-category="hanging glass"
                        data-price="16500"
                        data-name="Luxury Linear Glass Globe Hanging Light">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/product8.webp"
                                alt="Luxury Linear Glass Globe Hanging Light"
                                loading="lazy"
                                width="800"
                                height="700">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Hanging · Glass
                            </span>

                            <h2>
                                Luxury Linear Glass Globe Hanging Light
                            </h2>

                            <p>
                                Frosted glass globe hanging light with
                                a refined gold frame for modern interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    ₹16,500
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 09 -->

                    <article
                        class="product-card"
                        data-category="hanging glass"
                        data-price="8000"
                        data-name="Luxury Vertical Glass Globe Hanging Light">

                        <div class="product-image">

                            <img
                                src="/assets/images/products/luxury-vertical-glass-globe-hanging-light.webp"
                                alt="Luxury Vertical Glass Globe Hanging Light"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Hanging · Glass
                            </span>

                            <h2>
                                Luxury Vertical Glass Globe Hanging Light
                            </h2>

                            <p>
                                Vertical globe lighting with a premium
                                gold frame for bedrooms, living spaces
                                and luxury interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    ₹8,000
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 10 -->

                    <article
                        class="product-card"
                        data-category="hanging glass"
                        data-price="5600"
                        data-name="Modern Linear Glass Bubble Hanging Light">

                        <div class="product-image">

                            <img
                                src="/assets/images/gallery/produt10.webp"
                                alt="Modern Linear Glass Bubble Hanging Light"
                                loading="lazy"
                                width="800"
                                height="700">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Hanging · Glass
                            </span>

                            <h2>
                                Modern Linear Glass Bubble Hanging Light
                            </h2>

                            <p>
                                Contemporary linear lighting featuring
                                multiple glass bubble globes.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    ₹5,600
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 11 -->

                    <article
                        class="product-card"
                        data-category="crystal"
                        data-price="28000"
                        data-name="Modern Cascade Cylindrical Chandelier">

                        <div class="product-image">

                            <span class="product-badge">
                                Bestseller
                            </span>

                            <img
                                src="/assets/images/products/modern-cascade-cylindrical-chandelier.webp"
                                alt="Modern Cascade Cylindrical Crystal Chandelier"
                                loading="lazy"
                                width="800"
                                height="900">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Crystal
                            </span>

                            <h2>
                                Modern Cascade Cylindrical Chandelier
                            </h2>

                            <p>
                                Multi-layer crystal cascade chandelier
                                designed for staircases and double-height
                                interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    ₹28,000
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- PRODUCT 12 -->

                    <article
                        class="product-card"
                        data-category="modern circular"
                        data-price="35000"
                        data-name="Contemporary Circular Designer Chandelier">

                        <div class="product-image">

                            <img
                                src="/assets/images/products/contemporary-circular-designer-chandelier.webp"
                                alt="Contemporary Circular Designer Chandelier"
                                loading="lazy"
                                width="800"
                                height="800">

                            <a
                                href="product-details.html"
                                class="product-view">
                                View Details ↗
                            </a>

                        </div>

                        <div class="product-content">

                            <span class="product-category">
                                Modern · Circular
                            </span>

                            <h2>
                                Contemporary Circular Designer Chandelier
                            </h2>

                            <p>
                                Elegant circular chandelier designed
                                to create a refined focal point in
                                modern luxury interiors.
                            </p>

                            <div class="product-bottom">

                                <span class="product-price">
                                    Price on Request
                                </span>

                                <a href="/pages/contact.php">
                                    Enquire
                                </a>

                            </div>

                        </div>

                    </article>


                </div>



                <!-- NO RESULTS -->

                <div
                    class="no-products"
                    id="noProducts">

                    <h3>
                        No chandeliers found
                    </h3>

                    <p>
                        Try changing your filters or search terms.
                    </p>

                    <button
                        type="button"
                        id="resetProducts">
                        Reset Filters
                    </button>

                </div>


            </div>

        </section>



        <!-- =========================================
         WHY CHOOSE US
========================================= -->

        <section class="products-trust">

            <div class="products-container">

                <span class="products-eyebrow">
                    WHY Urban Chandelier
                </span>

                <h2>
                    More Than Just Lighting
                </h2>

                <div class="trust-grid">

                    <div>
                        <strong>
                            01
                        </strong>

                        <h3>
                            Custom Sizes
                        </h3>

                        <p>
                            Get chandelier dimensions tailored
                            to your interior and ceiling height.
                        </p>
                    </div>


                    <div>
                        <strong>
                            02
                        </strong>

                        <h3>
                            Professional Installation
                        </h3>

                        <p>
                            Expert chandelier installation for
                            residential and commercial projects.
                        </p>
                    </div>


                    <div>
                        <strong>
                            03
                        </strong>

                        <h3>
                            Pan India Service
                        </h3>

                        <p>
                            Chandelier supply and project support
                            across locations in India.
                        </p>
                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================
         CTA
========================================= -->

        <section class="products-cta">

            <div class="products-container">

                <span class="products-eyebrow">
                    NEED HELP CHOOSING?
                </span>

                <h2>
                    Find the chandelier
                    your space deserves.
                </h2>

                <p>
                    Tell us about your space and requirements.
                    Our team can help you select the right design,
                    size and lighting solution.
                </p>

                <a
                    href="/pages/contact.php"
                    class="products-cta-button">
                    Get Free Consultation
                    <span>↗</span>
                </a>

            </div>

        </section>


    </main>


    <!-- =========================================
     FOOTER
========================================= -->

    <!--
    Yahan tumhara existing premium footer paste hoga
-->
       <?php include '../includes/footer.php'; ?>

    <?php include '../includes/floating-buttons.php';
    include '../includes/popup-form.php';
    
    ?>


    <script src="js/script.js"></script>
    <script src="/js/product.js"></script>

</body>

</html>