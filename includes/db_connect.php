<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urban_chandeler";
$port = 3307; // Aapka MySQL is port par chal raha hai

// Connection create karein (yahan end mein $port add kiya hai)
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Connection check karein
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// UTF-8 Charset set karein
$conn->set_charset("utf8mb4");
?>