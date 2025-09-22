<?php
// TShowcaseRegisterLogin/login_process.php

session_start(); // Start the session at the very beginning
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=emptyfields");
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a new session
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to the main page
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            header("Location: login.php?error=wrongpassword");
            exit();
        }
    } else {
        // No user found
        header("Location: login.php?error=nouser");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>