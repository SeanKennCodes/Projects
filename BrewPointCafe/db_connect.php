<?php
// db_connect.php

// Database configuration
$host = "localhost";        // Your host (usually localhost)
$username = "your_db_user"; // Replace with your MySQL username
$password = "your_db_pass"; // Replace with your MySQL password
$database = "brewpoint_db"; // The database name created above

// Attempt to establish a connection
$conn = new mysqli(hostname: $host, username: $username, password: $password, database: $database);

// Check connection
if ($conn->connect_error) {
    // Stop execution and show error if connection fails
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8 for proper handling of special characters
$conn->set_charset(charset: "utf8");

// The $conn object is now ready to be used in other scripts.
?>