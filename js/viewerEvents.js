// An event listener to the user-profile for opening the popup
document.querySelector(".user-profile").addEventListener("click", function (event) {
  event.stopPropagation();
  openUserProfileUpdate();
});

function openUserProfileUpdate() {
  window.location.href = 'viewer_profile_update.php';
}

function navigateToViewerLoginPage() {
  window.location.href = "viewerLogin.php";
}



