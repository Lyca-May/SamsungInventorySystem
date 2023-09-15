<?php
include("./functions/userManagementFunction.php");
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
    <title>User</title>

</head>

<body>
    <div class="datatable-container">
        <div>
            <button class="btn" href="" target="_blank" onclick="toggleForm()">+ Add New User</button>
        </div>

        <!-- modal for adding the use -->
        <div id="addUserModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="toggleForm()">&times;</span>
                <h2>Add New User</h2>
                <!-- Your form content goes here -->
                <form id="addUserForm" action="" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required><br><br>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required><br><br>
                    <label for="user_role">User Role:</label>
                    <select name="user_role" id="user_role" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="special">Special</option>
                    </select><br><br>
                    <label for="status">Status:</label>
                    <select name="status" id="status" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

        <br>
        <br>
        <br>
        <table id="tableID3" class="display">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>User Role</th>
                    <th>Status</th>
                    <th>Last Login</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td>{$row['user_role']}</td>";
                    echo "<td>{$row['status']}</td>";
                    echo "<td>" . date("F j, Y, g:i a", strtotime($row['last_login'])) . "</td>";

                    // Add action icons for edit and delete
                    echo "<td>";
                    echo "<a href='#' onclick=\"openEditModal({$row['id']}, '{$row['name']}', '{$row['username']}')\" title='Edit'><i class='fas fa-edit'></i></a>";
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
            <form id="editUserForm">
                <input type="hidden" id="editUserId" name="id" value="">
                <label for="editName">Name:</label>
                <input type="text" id="editName" name="name">
                <label for="editUsername">Username:</label>
                <input type="text" id="editUsername" name="username">
                <button type="button" onclick="submitEditForm()">Save Changes</button>
            </form>
        </div>
    </div>

    <script src="./js/addUsers.js"></script>
    <script src="./js/updateUsers.js"></script>
    <script src="./js/deleteUsers.js"></script>


    <script>
function submitEditForm() {
    var formData = new FormData(document.getElementById("editUserForm"));

    $.ajax({
        type: "POST",
        url: "/functions/update_user_data.php", // Use an absolute path here
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Handle success, e.g., show a success message or update the UI
            alert("User data updated successfully!");
            // Close the edit modal or perform other actions as needed
            closeEditModal();
        },
        // error: function(xhr, status, error) {
        //     // Handle errors, e.g., display an error message
        //     alert("An error occurred: " + error);
        // }
    });
}

function closeEditModal() {
    // Close the edit modal (you may need to implement this function)
}
</script>


    <script>
        function openEditModal(id, name, username) {
            document.getElementById('editUserId').value = id;
            document.getElementById('editName').value = name;
            document.getElementById('editUsername').value = username;
            document.getElementById('editModal').style.display = 'block';
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>

    <script>
        document.getElementById("submitForm").addEventListener("click", function() {
            // Get form data
            var formData = new FormData(document.getElementById("addUserForm"));

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Define the AJAX request
            xhr.open("POST", "add_user.php", true);

            // Set the callback function to handle the response
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response here (e.g., show a success message)
                    alert("User added successfully!");
                    // You can also reload the current page or perform other actions
                    // window.location.reload();
                }
            };

            // Send the form data
            xhr.send(formData);
        });
    </script>
</body>

</html>