<?php

session_start(); // Start the session

// Include the database connection file
include("connection.php");

// Initialize variables
$category_name = "";
$message = "";

// Assuming you have established a database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize user input
    $category_name = htmlspecialchars($_POST["category_name"]);

    // Insert the user into the database
    $query = "INSERT INTO categories (category_name)
    VALUES ('$category_name')";

    if (mysqli_query($conn, $query)) {
        // User added successfully
        header("Location: ../pages/categories.php");
    } else {
        // Error adding user
        $response = array("success" => false, "message" => "Error: " . mysqli_error($conn));
    }

    // Convert the PHP array to a JSON string
    echo json_encode($response);
}



//get all users for the table
$query = "SELECT * FROM categories";
$result = mysqli_query($conn, $query);





// Close the connection after use
mysqli_close($conn);
?>