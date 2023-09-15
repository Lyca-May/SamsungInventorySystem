<?php
include("connection.php"); 

// Product
$countProductquery = "SELECT COUNT(*) FROM Products";
$countProductresult = mysqli_query($conn, $countProductquery);
if (!$countProductresult) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($countProductresult);
$countProductquery = $row['COUNT(*)'];


//Users
$countUsersquery = "SELECT COUNT(*) FROM users";
$countUserResult = mysqli_query($conn, $countUsersquery);
if (!$countUserResult) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($countUserResult);
$countUsersquery = $row['COUNT(*)'];


//Categories
$countCategoriesQuery = "SELECT COUNT(*) FROM categories";
$countCategoriesResult = mysqli_query($conn, $countCategoriesQuery);
if (!$countCategoriesResult) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($countCategoriesResult);
$countCategoriesQuery = $row['COUNT(*)'];






// Close the database connection when done
mysqli_close($conn);
?>
