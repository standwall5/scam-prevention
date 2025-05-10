<?php
require 'db.php'; // This gives you $collection from your db.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name           = $_POST['name'] ?? '';
    $age            = $_POST['age'] ?? '';
    $email          = $_POST['email'] ?? '';
    $password       = $_POST['password'] ?? '';
    $repeatPassword = $_POST['repeat-password'] ?? '';

    if ($password != $repeatPassword) {
        echo "Passwords do not match";
        exit;
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Create user document
    $user = [
        'name'       => $name,
        'age'        => $age,
        'email'      => $email,
        'password'   => $hashedPassword,
        'created_at' => new MongoDB\BSON\UTCDateTime(),
    ];

    // Insert into MongoDB
    try {
        $result = $collection->insertOne($user);

        if ($result->getInsertedCount() === 1) {
            echo "Signup successful! User ID: " . $result->getInsertedId();
        } else {
            echo "Failed to sign up.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
