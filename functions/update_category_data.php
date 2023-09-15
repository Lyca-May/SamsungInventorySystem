<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $category_name = $_POST['category_name'];

    $sql = "UPDATE categories SET category_name='$category_name' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../categories.php?update=success");
        exit();

    } else {
        header("Location: ../categories.php?update=error");
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
