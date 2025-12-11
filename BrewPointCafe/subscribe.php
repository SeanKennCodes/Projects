<?php
// subscribe.php - Handles newsletter signups

// 1. Include the database connection
require 'db_connect.php';

// 2. Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Sanitize the email input
    $email = filter_var(value: $_POST['email'], filter: FILTER_SANITIZE_EMAIL);

    // 4. Validate the email
    if (empty($email) || !filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
        // Simple error response (can be improved with JSON for AJAX)
        die("Error: Invalid email format.");
    }

    // 5. Prepare SQL statement to insert the email
    // The use of prepared statements prevents SQL Injection attacks
    $stmt = $conn->prepare(query: "INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param(types: "s", var: $email);

    // 6. Execute the statement
    if ($stmt->execute()) {
        $response = [
            'success' => true,
            'message' => "Subscription successful! Welcome to the Brew Loop."
        ];
    } else {
        // Handle database error (e.g., duplicate entry due to UNIQUE constraint)
        if ($conn->errno == 1062) {
             $response = [
                'success' => false,
                'message' => "You are already subscribed. Thank you!"
            ];
        } else {
            $response = [
                'success' => false,
                'message' => "Database error: " . $stmt->error
            ];
        }
    }

    // 7. Close statement and connection
    $stmt->close();
    $conn->close();

    // 8. Output response as JSON
    header(header: 'Content-Type: application/json');
    echo json_encode(value: $response);
    exit;

} else {
    // If not a POST request, redirect or show an error
    header(header: 'Location: index.html');
    exit;
}
?>