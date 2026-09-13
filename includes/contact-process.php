<?php
// 1. SECURITY FIX: Turn OFF visible display errors for production so hackers can't see your table structure.
// Change to 1 ONLY when actively debugging local code.
error_reporting(E_ALL);
ini_set('display_errors', 0); 

// Load database connection settings securely
include_once __DIR__ . '/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($conn) || $conn->connect_error) {
        echo "Service is temporarily unavailable. Please try again later.";
        exit();
    }

    // 2. Data trimming (No need for real_escape_string anymore because Prepared Statements handle safety)
    $name    = trim($_POST['fullName'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Input Validation
    if (empty($name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill all the required fields (*).";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        exit();
    }

    // 3. ROBUST SECURITY FIX: Use Prepared Statements to completely eliminate SQL Injection risk.
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, phone, email, subject, service, message) VALUES (?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        // "ssssss" means 6 structural string inputs are securely mapped to parameters
        $stmt->bind_param("ssssss", $name, $phone, $email, $subject, $service, $message);
        
        if ($stmt->execute()) {
            
            // Handle optional newsletter integration using a secure statement structure too
            if (isset($_POST['newsletter']) && $_POST['newsletter'] === 'yes') {
                $news_stmt = $conn->prepare("INSERT IGNORE INTO newsletter_subscriptions (email) VALUES (?)");
                if ($news_stmt) {
                    $news_stmt->bind_param("s", $email);
                    $news_stmt->execute();
                    $news_stmt->close();
                }
            }

            echo "success"; // Sent directly to your custom frontend JavaScript controller
            $stmt->close();
            exit();
            
        } else {
            // Write database error details secretly behind the scenes into your private logs
            error_log("Database Execution Error: " . $stmt->error);
            echo "Failed to save submission securely. Please try again.";
            $stmt->close();
            exit();
        }
    } else {
        error_log("Database Preparation Error: " . $conn->error);
        echo "Server processing error. Please try again.";
        exit();
    }
} else {
    echo "Invalid request method.";
    exit();
}
?>
