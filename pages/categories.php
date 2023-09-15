<?php
include("./functions/categoriesManagementFunction.php");
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your other CSS and script includes here -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="./css/modalAddUser.css">
    <link rel="stylesheet" href="./css/modalEditUser.css">
    <link rel="stylesheet" href="./css/user.css">
    <script src="js/index.js"></script>
    <title>Categories</title>

</head>

<body>

<div class="col-2">
<h2>Add New Category</h2>
            <form id="addUserForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="name">Category Name:</label>
                <input type="text" name="category_name" id="name" required><br><br>
                <input type="submit" value="Submit">
            </form>

</div>
    <div class="datatable-container">

        <br>
        <br>
        <br>
        <table id="tableID" class="display">
            <thead>
                <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['category_name']}</td>";
                echo "<td>";
                echo "<a href='#' onclick=\"openEditModal({$row['id']}, '{$row['category_name']}')\" title='Edit'><i class='fas fa-edit'></i></a>";
                echo "&nbsp;&nbsp;";
                echo "<a href='javascript:void(0);' title='Delete' onclick='confirmDelete({$row['id']})'><i class='fas fa-trash'></i></a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


    <!-- The Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Edit User</h2>
            <form action="/functions/update_user_data.php" method="post">
                <input type="hidden" id="editUserId" name="id" value="">
                <label for="editName">Name:</label>
                <input type="text" id="editName" name="name">
                <label for="editUsername">Username:</label>
                <input type="text" id="editUsername" name="username">
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>

   <!-- The Modal -->
   <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Edit Category</h2>
            <form action="./functions/update_category_data.php" method="post">
                <input type="hidden" id="editUserId" name="id" value="">
                <label for="editName">Category Name:</label>
                <input type="text" id="editName" name="category_name">
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>
    
    <script src="./js/deleteCategory.js"></script>


    <script>
        function openEditModal(id, category_name) {
            document.getElementById('editUserId').value = id;
            document.getElementById('editName').value = category_name;
            document.getElementById('editModal').style.display = 'block';
        }
        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>
</body>

</html>