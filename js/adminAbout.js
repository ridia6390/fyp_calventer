
// Add an event listener to the user-profile for opening the popup
document.querySelector(".user-profile").addEventListener("click", function (event) {
  // Prevent the event from bubbling up to the document
  event.stopPropagation();


  // Navigate to user_profile_update.php
  openUserProfileUpdate();
});

// Modify the openUserProfileUpdate function to navigate directly
function openUserProfileUpdate() {
  window.location.href = 'admin_profile_update.php';
}

function navigateToAdminLoginPage() {
  window.location.href = "adminLogin.php";
}