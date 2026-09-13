<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Reuse your primary central database connection array safely
include_once __DIR__ . '/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($conn) || $conn->connect_error) {
        echo "Database connectivity is currently unavailable.";
        exit();
    }

    // Capture fields matching the name attributes inside the HTML form string
    $name    = $conn->real_escape_string(trim($_POST['name'] ?? ''));
    $phone   = $conn->real_escape_string(trim($_POST['phone'] ?? ''));
    $email   = $conn->real_escape_string(trim($_POST['email'] ?? ''));
    $city    = $conn->real_escape_string(trim($_POST['city'] ?? ''));
    $service = $conn->real_escape_string(trim($_POST['service'] ?? ''));
    $message = $conn->real_escape_string(trim($_POST['message'] ?? ''));

    // Server-side validation check for required inputs (*)
    if (empty($name) || empty($phone) || empty($city) || empty($service)) {
        echo "Please fill out all required fields marked with an asterisk (*).";
        exit();
    }

    // Optional email validation layout (if the user typed one in)
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please provide a valid email structure.";
        exit();
    }

    // Prepare and run the insertion statement matching table headers
    $query = "INSERT INTO quote_enquiries (name, phone, email, city, service, message) 
              VALUES ('$name', '$phone', '$email', '$city', '$service', '$message')";

    if ($conn->query($query)) {
        echo "success"; // Echo matches Javascript expected conditional target string
        exit();
    } else {
        echo "Database error details: " . $conn->error;
        exit();
    }
} else {
    echo "Access denied.";
    exit();
}
?>
