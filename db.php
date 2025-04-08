<?php
// db.php - Handles MongoDB connection

require 'vendor/autoload.php'; // Include Composer's autoloader

// MongoDB connection URI
$uri = "mongodb+srv://johnpatricksalen890:mongoDbKrab1@sifthr.mxjihsg.mongodb.net/"; // Default MongoDB URI (change if needed)

// Create a MongoDB client
try {
    $client = new MongoDB\Client($uri);
    echo "MongoDB connection established successfully!";
} catch (MongoDB\Driver\Exception\Exception $e) {
    // Handle connection error
    echo "MongoDB connection failed: " . $e->getMessage();
    exit; // Stop execution if connection fails
}

// Select your database and collection
$database   = $client->{'sifthr-database'}; // Replace with your database name
$collection = $database->users;             // Replace with your collection name

// Return the database and collection so you can use them elsewhere
return $collection;
