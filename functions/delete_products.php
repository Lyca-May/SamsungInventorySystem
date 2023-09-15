<?php
include("connection.php");
// Check if 'id' parameter is set and if it's a POST request
if (isset($_POST['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // SQL query to delete the categories by their ID
    $sql = "DELETE FROM products WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
    mysqli_close($conn);
} else {
    // If 'id' parameter is not set or it's not a POST request, send an error response
    echo 'error';
}
?>