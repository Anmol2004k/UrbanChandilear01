<?php
// Silently ignore if someone is just loading the main page (index.php) via GET
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Turn on internal error display ONLY during form submission processing
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Secure path adjustment to find your database credentials safely
    include_once __DIR__ . '/db_connect.php';

    // Verify database connection variable exists before running query
    if (isset($conn) && !$conn->connect_error) {
        
        // Read values safely
        $name = isset($_POST['name']) ? $conn->real_escape_string(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? $conn->real_escape_string(trim($_POST['email'])) : '';
        $phone = isset($_POST['phone']) ? $conn->real_escape_string(trim($_POST['phone'])) : '';

        if (!empty($name) && !empty($email)) {
            $query = "INSERT INTO leads (name, email, phone) VALUES ('$name', '$email', '$phone')";

            if ($conn->query($query)) {
                echo "success"; 
                exit();
            } else {
                echo "Database error: " . $conn->error;
                exit();
            }
        } else {
            echo "Please fill required fields.";
            exit();
        }
    } else {
        echo "Database connection is down or missing. Check db_connect.php configuration.";
        exit();
    }
}
// Do not output anything if the request method is GET (avoids breaking index.php layout)
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timed Popup Form</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">




</head>

<body>



    <!-- === POPUP HTML STRUCTURE === -->
    <div id="leadPopup" class="popup-overlay">
        <div class="popup-box">
            <!-- Close Button -->
            <button class="popup-close" id="closePopup">&times;</button>

            <h2>Get Free Consultation</h2>
            <p>Enter your details and our team will contact you shortly.</p>

            <!-- Form (Filhal backend integration ke bina, action ko baad mein PHP file par set kar sakte hain) -->
            <form id="leadForm" action="/includes/popup-form.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <button type="submit" name="submit_form" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>

    <!-- === JAVASCRIPT FOR 1-MINUTE TIMER & POPUP CONTROL === -->

    <script src="/js/main.js"></script>
</body>

</html>