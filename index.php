<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">

    <title>Samsung Inventory Management</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <?php include('sidebar.php'); ?>

        <div class="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                include("$page.php");
            } else {
                include('pages/dashboard.php'); // Default page
            }
            ?>
        </div>
    </div>
</body>

</html>