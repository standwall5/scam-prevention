<?php
// db.php - Handles MongoDB connection

require 'vendor/autoload.php'; // Include Composer's autoloader
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// MongoDB connection URI
$uri = $_ENV['DB_URI']; // Default MongoDB URI (change if needed)

// Create a MongoDB client
try {
    $client = new MongoDB\Client($uri);
} catch (Exception $e) {
    // Handle connection error
    echo "MongoDB connection failed: " . $e->getMessage();
    exit; // Stop execution if connection fails
}

// Select your database and collection
$database   = $client->{'sifthr-database'}; // Replace with your database name
$collection = $database->users;             // Replace with your collection name

// Return the database and collection so you can use them elsewhere
return $collection;