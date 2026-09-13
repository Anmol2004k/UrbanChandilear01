<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Reuse your existing connection script safely
include_once __DIR__ . '/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($conn) || $conn->connect_error) {
        echo "Server database error. Please try again later.";
        exit();
    }

    // Capture and sanitize the submitted email string
    $email = $conn->real_escape_string(trim($_POST['email'] ?? ''));

    // Server-side validation
    if (empty($email)) {
        echo "Please enter your email address.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        exit();
    }

    // SQL execution: INSERT IGNORE skips duplicates cleanly if the email already exists
    $query = "INSERT IGNORE INTO newsletter_subscriptions (email) VALUES ('$email')";

    if ($conn->query($query)) {
        // If the database did not insert a new row, it means the email was already there
        if ($conn->affected_rows === 0) {
            echo "already_subscribed";
        } else {
            echo "success";
        }
        exit();
    } else {
        echo "Database error details: " . $conn->error;
        exit();
    }
} else {
    echo "Invalid request method.";
    exit();
}
?>
