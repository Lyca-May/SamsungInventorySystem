
function toggleForm() {
 const modal = document.getElementById('addUserModal');
 const form = document.getElementById('addUserForm');
 const isOpen = modal.style.display === 'block';

 if (isOpen) {
     modal.style.display = 'none';
     form.reset(); // Reset the form when closing the modal
 } else {
     modal.style.display = 'block';
 }
}
