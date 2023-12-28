// Add this function to close the popup
function closePopup() {
  document.getElementById("popup-container").style.display = "none";
}

// Add an event listener to the user-profile for opening the popup
document.querySelector(".user-profile").addEventListener("click", function (event) {
  // Prevent the event from bubbling up to the document
  event.stopPropagation();

  // Close the popup
  closePopup();

  // Navigate to user_profile_update.php
  openUserProfileUpdate();
});

// Add an event listener to the document to close the popup
document.addEventListener("click", function (event) {
  // Close the popup
  closePopup();
});

// Modify the openUserProfileUpdate function to navigate directly
function openUserProfileUpdate() {
  window.location.href = 'user_profile_update.php';
}

// Function to navigate to the login page
function navigateToLoginPage() {
  window.location.href = "login.php";
}
