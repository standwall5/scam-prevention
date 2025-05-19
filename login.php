<?php
session_start();

$collection = require 'db.php'; // Get the users collection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Find user by email
    $user = $collection->findOne(['email' => $email]);

    if ($user && password_verify($password, $user['password'])) {
        // Login successful
        $_SESSION['email'] = $user['email'];
        $fullName          = $user['name'];
        $age               = $user['age'];
        $nameArray         = explode(' ', $fullName);
        if (count($nameArray) > 3) {                     // If their name is Gregory Extra H. House (only taking the first name)
            $firstNameParts = array_slice($nameArray, 0, 2); // Get the first two parts
            $firstName      = implode(" ", $firstNameParts);
        } else if (count($nameArray) == 3) {
            $firstName = array_pop($nameArray);
        }

        $_SESSION['name']     = $firstName;
        $_SESSION['fullName'] = $fullName;
        $_SESSION['age'] = $age;
        // Or wherever your homepage is
        header("Location: homepage.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}