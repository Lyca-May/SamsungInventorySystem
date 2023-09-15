// Function to get query parameters from URL
function getQueryParam(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

// Check for the login query parameter
const loginStatus = getQueryParam("update");

if (loginStatus === "success") {
    // Display a custom-styled SweetAlert for successful login
    Swal.fire({
        title: 'Success!',
        text: 'You have successfully updated the user!',
        icon: 'success',
        showConfirmButton: false, // Remove the "OK" button
        timer: 1000, // Automatically close after 2 seconds
        timerProgressBar: true, // Show progress bar
        toast: true, // Display as a toast notification
        position: 'top',
        showClass: {
            popup: 'swal2-noanimation',
            backdrop: 'swal2-noanimation'
        },
        hideClass: {
            popup: '',
            backdrop: ''
        },
        customClass: {
            container: 'swal-container-class',
            popup: 'swal-popup-class',
            header: 'swal-header-class',
            title: 'swal-title-class',
            closeButton: 'swal-close-button-class',
            icon: 'swal-icon-class',
            image: 'swal-image-class',
            content: 'swal-content-class',
            input: 'swal-input-class',
            actions: 'swal-actions-class',
            confirmButton: 'swal-button-class',
            denyButton: 'swal-button-class',
            cancelButton: 'swal-button-class',
            loader: 'swal-loader-class',
            footer: 'swal-footer-class'
        }
    });
} else if (loginStatus === "error") {
    // Display a custom-styled SweetAlert for successful login
    Swal.fire({
        title: 'Error!',
        text: 'You have not updated the user!',
        icon: 'error',
        showConfirmButton: false, // Remove the "OK" button
        timer: 1000, // Automatically close after 2 seconds
        timerProgressBar: true, // Show progress bar
        toast: true, // Display as a toast notification
        position: 'top',
        showClass: {
            popup: 'swal2-noanimation',
            backdrop: 'swal2-noanimation'
        },
        hideClass: {
            popup: '',
            backdrop: ''
        },
        customClass: {
            container: 'swal-container-class',
            popup: 'swal-popup-class',
            header: 'swal-header-class',
            title: 'swal-title-class',
            closeButton: 'swal-close-button-class',
            icon: 'swal-icon-class',
            image: 'swal-image-class',
            content: 'swal-content-class',
            input: 'swal-input-class',
            actions: 'swal-actions-class',
            confirmButton: 'swal-button-class',
            denyButton: 'swal-button-class',
            cancelButton: 'swal-button-class',
            loader: 'swal-loader-class',
            footer: 'swal-footer-class'
        }
    });
}