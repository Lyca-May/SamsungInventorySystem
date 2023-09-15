<?php

session_start(); // Start the session

// Include the database connection file
include("connection.php");

// Initialize variables
$name = $username = $password = $user_role = $status = "";
$message = "";

// Assuming you have established a database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize user input
    $name = htmlspecialchars($_POST["name"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Assume you have sanitized and validated the input data

    $user_role = htmlspecialchars($_POST["user_role"]);
    $status = htmlspecialchars($_POST["status"]);

    // Insert the user into the database
    $query = "INSERT INTO users (name, username, password, user_role, status, last_login)
    VALUES ('$name', '$username', '$password', '$user_role', '$status', NOW())";

    if (mysqli_query($conn, $query)) {
        // User added successfully
        $response = array("success" => true, "message" => "User added successfully.");
    } else {
        // Error adding user
        $response = array("success" => false, "message" => "Error: " . mysqli_error($conn));
    }

    // Convert the PHP array to a JSON string
    echo json_encode($response);
}



//get all users for the table
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);





// Close the connection after use
mysqli_close($conn);
