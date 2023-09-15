document.addEventListener("DOMContentLoaded", function () {
    // Get a reference to the "Sign In" button
    var signInButton = document.getElementById("signin-btn");

    // Add a click event listener to the button
    signInButton.addEventListener("click", function () {
        // Redirect to the dashboard page
        window.location.href = "pages/dashboard.php"; // Change the URL to your dashboard page
    });
});