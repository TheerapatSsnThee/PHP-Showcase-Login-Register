<?php
// TShowcaseRegisterLogin/register_process.php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        echo "Username and Password are required.";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        // Redirect to login page on successful registration
        header("Location: login.php?status=success");
        exit();
    } else {
        // Handle errors, like a duplicate username
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>