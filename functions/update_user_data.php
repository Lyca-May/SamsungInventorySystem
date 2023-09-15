<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the edited data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];

    $sql = "UPDATE users SET name='$name', username='$username' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../usermanagement.php?update=success");
        exit();

    } else {
        header("Location: ../usermanagement.php?update=error");
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
