<?php


// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "samsunginventorydb";
$port = "3307";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>