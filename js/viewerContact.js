// Add an event listener to the user-profile for opening the popup
document.querySelector(".user-profile").addEventListener("click", function (event) {
  // Prevent the event from bubbling up to the document
  event.stopPropagation();


  // Navigate to user_profile_update.php
  openUserProfileUpdate();
});

// Modify the openUserProfileUpdate function to navigate directly
function openUserProfileUpdate() {
  window.location.href = 'viewer_profile_update.php';
}


// Function to navigate to the login page
function navigateToViewerLoginPage() {
  window.location.href = "viewerLogin.php";
}



