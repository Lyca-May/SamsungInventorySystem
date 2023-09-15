<?php
session_start(); // Start the session

// Include the database connection file
include("connection.php");
// Initialize variables
$product_title = "";
$category_id = 0; // Initialize with a default category ID
$in_stock = 0;
$selling_price = 0.0;
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize user input
    $product_title = htmlspecialchars($_POST["product_title"]);
    $category_id = intval($_POST["category_id"]);
    $in_stock = intval($_POST["in_stock"]);
    $selling_price = floatval($_POST["selling_price"]);

    // Initialize added_datetime
    $added_datetime = date("Y-m-d H:i:s");

    // Validate and handle file upload
    $upload_dir = "images/"; // Define your upload directory
    $photo = $_FILES["photo"]["name"];
    $photo_tmp = $_FILES["photo"]["tmp_name"];
    $photo_type = $_FILES["photo"]["type"];

    // Validate file type (you can add more checks here)
    if ($photo && ($photo_type == "image/jpeg" || $photo_type == "image/png")) {
        // Generate a unique filename
        $photo = uniqid() . "_" . $photo;
        $upload_path = $upload_dir . $photo;

        // Move the uploaded file to the upload directory
        if (move_uploaded_file($photo_tmp, $upload_path)) {
            // Insert data into the products table using a prepared statement
            $query = "INSERT INTO products (photo, product_title, category_id, in_stock, selling_price, added_datetime)
                      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ssiiis", $photo, $product_title, $category_id, $in_stock, $selling_price, $added_datetime);

            if (mysqli_stmt_execute($stmt)) {
                // Product added successfully
                $message = "Product added successfully.";
            } else {
                // Error adding product
                $message = "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            // File upload failed
            $message = "File upload failed.";
        }
    } else {
        // Invalid file type or no file uploaded
        $message = "Invalid file type or no file uploaded.";
    }
}


// Fetch products with category names using a JOIN
$query = "SELECT products.id, products.photo, products.product_title, categories.category_name, products.in_stock, products.selling_price, products.added_datetime
          FROM products
          INNER JOIN categories ON products.category_id = categories.id";

$result = mysqli_query($conn, $query);



$query = "SELECT * FROM categories";
$resultCategories = mysqli_query($conn, $query);


// Reset the result pointer
mysqli_data_seek($result, 0);

// Close the connection after use
mysqli_close($conn);

?>
