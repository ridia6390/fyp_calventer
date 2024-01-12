// An event listener to the user-profile for opening the popup
document.querySelector(".user-profile").addEventListener("click", function (event) {
  event.stopPropagation();
  openUserProfileUpdate();
});

function openUserProfileUpdate() {
  window.location.href = 'admin_profile_update.php';
}

function navigateToAdminLoginPage() {
  window.location.href = "adminLogin.php";
}