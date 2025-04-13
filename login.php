<?php
session_start();

$collection = require 'db.php'; // Get the users collection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Find user by email
    $user = $collection->findOne(['email' => $email]);

    if ($user && $password == $user['password']) {
        // Login successful
        $_SESSION['email'] = $user['email'];
        $_SESSION['name']  = $user['name'];
        // Or wherever your homepage is
        header("Location: test.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
