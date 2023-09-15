function confirmDelete(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You want to delete this user.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Send an AJAX request to delete_user.php
            $.ajax({
                url: 'functions/delete_user.php',
                type: 'POST',
                data: { id: userId },
                success: function(response) {
                    // Handle the response here if needed
                    // For example, you can display another SweetAlert for success or error
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'The user has been deleted.',
                            icon: 'success'
                        });
                        // You can also reload the page or perform other actions here
                        location.reload();
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while deleting the user.',
                            icon: 'error'
                        });
                    }
                }
            });
        }
    });
}
