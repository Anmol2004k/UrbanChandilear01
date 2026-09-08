<?php

$catalogues = [

    'stone' => [
        'file' => '/catalogues/Stone_Chandelier_Catalogue-Urban-Chandelier.pdf',
        'title' => 'Stone Chandelier Catalogue',
        'whatsapp' => 'Stone Chandelier Catalogue'
    ],

    'rectangle' => [
        'file' => '/catalogues/Rectangle_Shape_Chandelier_Catalogue-Urban_chandelier.pdf',
        'title' => 'Rectangle Shape Chandelier Catalogue',
        'whatsapp' => 'Rectangle Shape Chandelier Catalogue'
    ],

    'genie' => [
        'file' => '/catalogues/Stone Chandelier Catalogue - Genie Lighting (1).pdf',
        'title' => 'Circular Shape Chandelier Catalogue',
        'whatsapp' => 'Circular Shape Chandelier Catalogue'
    ],

    'long-height' => [
        'file' => '/catalogues/Long_Height_Chandelier_Catalogue-Urban_chandelier.pdf',
        'title' => 'Long Height Chandelier Catalogue',
        'whatsapp' => 'Long Height Chandelier Catalogue'
    ],

    'rectangle-2' => [
        'file' => '/catalogues/Rectangle_Shape_Chandelier_Catalogue-Urban_chandelier.pdf',
        'title' => 'Rectangle Shape Chandelier Catalogue',
        'whatsapp' => 'Rectangle Shape Chandelier Catalogue'
    ]

];


// Get selected catalogue
$pdfKey = $_GET['pdf'] ?? 'stone';


// Check catalogue
if (!isset($catalogues[$pdfKey])) {

    http_response_code(404);
    die('Catalogue not found.');

}


// Selected catalogue
$catalogue = $catalogues[$pdfKey];

$pdfFile = $catalogue['file'];
$pdfTitle = $catalogue['title'];
$whatsappText = $catalogue['whatsapp'];


// WhatsApp message
$whatsappMessage = urlencode(
    "Hello Urban Chandelier, I am interested in the {$whatsappText}."
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php echo htmlspecialchars($pdfTitle); ?> | Urban Chandelier
    </title>

    <meta
        name="description"
        content="View the <?php echo htmlspecialchars($pdfTitle); ?> online. Explore premium chandelier designs and contact our team for pricing, customization and installation."
    >

    <link
        rel="stylesheet"
        href="/css/style.css"
    >

    <link
        rel="stylesheet"
        href="/css/catalogue-view.css"
    >

</head>


<body class="catalogue-view-page">


    <!-- =========================================
         PDF VIEWER
    ========================================== -->

    <main class="catalogue-viewer">


        <iframe
            src="<?php echo htmlspecialchars($pdfFile); ?>"
            title="<?php echo htmlspecialchars($pdfTitle); ?>"
            class="catalogue-pdf"
        ></iframe>


        <!-- =====================================
             FLOATING CTA
        ====================================== -->

        <aside class="catalogue-floating-cta">

            <p>
                Interested in this Chandelier?
            </p>


            <a
                href="https://wa.me/917388984529?text=<?php echo $whatsappMessage; ?>"
                target="_blank"
                rel="noopener"
                class="catalogue-whatsapp"
            >

                <span>◉</span>

                WhatsApp

            </a>


            <a
                href="tel:+917388984529"
                class="catalogue-call"
            >

                <span>☎</span>

                Call

            </a>

        </aside>


        <!-- =====================================
             MOBILE CTA
        ====================================== -->

        <div class="catalogue-mobile-cta">

            <a
                href="https://wa.me/917388984529?text=<?php echo $whatsappMessage; ?>"
                target="_blank"
                rel="noopener"
            >
                WhatsApp
            </a>


            <a
                href="tel:+917388984529"
            >
                Call
            </a>

        </div>


    </main>


    <script src="/js/script.js"></script>

</body>

</html>