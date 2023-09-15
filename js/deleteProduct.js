function confirmDelete(userId) {
    Swal.fire({
        title: 'Are you sure',
        text: 'You want to delete this product?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Send an AJAX request to delete_category.php
            $.ajax({
                url: 'functions/delete_products.php',
                type: 'POST',
                data: { id: userId },
                success: function(response) {
                    if (response === 'success') {
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'The product has been deleted.',
                            icon: 'success'
                        });
                        location.reload();
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while deleting the product.',
                            icon: 'error'
                        });
                    }
                }
            });
        }
    });
}
