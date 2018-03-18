<?php

// Define constants for database connections
$servername = "localhost:3306";
$username = "paigedah_cas222";
$password = "Bennybear95";

// Create a database connection

try {
     //Create connection
     $connection = new PDO("mysql:host=$servername;dbname=paigedah_aith", $username, $password);
     // Error display, so we can see problems if they occur
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // Display message for successful connection
     //echo " Database connection succeeded!";
} 
catch (PDOException $e) {
     die("Database connection failed: " . $e->getMessage());
}

?>