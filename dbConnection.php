<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

try {
    // Open a new connection to the MySQL server
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    // Check if the connection failed
    if (!$mysqli) {
        throw new Exception("Failed to connect to the database: " . mysqli_connect_error());
    }

     // Connection successful
     echo "Successfully connected to the database.";
    } catch (Exception $e) {
        // Handle connection error
        echo $e->getMessage();
    }
?>