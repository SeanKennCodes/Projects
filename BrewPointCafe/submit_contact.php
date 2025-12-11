<?php
// submit_contact.php - Handles contact form submissions

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize all inputs
    $name = filter_var(value: trim(string: $_POST['name']), filter: FILTER_SANITIZE_STRING);
    $email = filter_var(value: $_POST['email'], filter: FILTER_SANITIZE_EMAIL);
    $message = filter_var(value: trim(string: $_POST['message']), filter: FILTER_SANITIZE_STRING);

    // 2. Basic Validation
    if (empty($name) || empty($email) || empty($message) || !filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
        die("Error: All fields are required and email must be valid.");
    }

    // 3. Prepare SQL statement for insertion
    $stmt = $conn->prepare(query: "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); // "sss" means three string parameters

    // 4. Execute and check result
    if ($stmt->execute()) {
        $response = [
            'success' => true,
            'message' => "Message sent successfully! We will be in touch soon."
        ];
    } else {
        $response = [
            'success' => false,
            'message' => "Failed to save message: " . $stmt->error
        ];
    }

    $stmt->close();
    $conn->close();

    // 5. Output response as JSON
    header(header: 'Content-Type: application/json');
    echo json_encode(value: $response);
    exit;

} else {
    header(header: 'Location: contact.html');
    exit;
}
?>