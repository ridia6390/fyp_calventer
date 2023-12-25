

// Add this function to close the popup
function closePopup() {
    document.getElementById("popup-container").style.display = "none";
  }
  
  // Add an event listener to the user-profile for opening the popup
  document.querySelector(".user-profile").addEventListener("click", function (event) {
    // Prevent the event from bubbling up to the document
    event.stopPropagation();
    
    // Show the popup
    showPopup('user_page.php?id=<?php echo $admin_id; ?>');
  });
  
  // Add an event listener to the document to close the popup
  document.addEventListener("click", function (event) {
    // Close the popup
    closePopup();
  });
  
  // Modify the showPopup function
  function showPopup(userPageUrl) {
    closePopup(); // Close any open popups first
    document.getElementById("popup-container").style.display = "block";
    document.getElementById("popup-iframe").src = userPageUrl;
  }
  


// function showPopup() {
 
//   document.getElementById("popup-container").style.display = "block";
//   document.getElementById("popup-iframe").src = "user_page.php";
// }

// function showPopup(userPageUrl) {
//     const userProfile = document.querySelector(".user-profile");
//     const userProfileRect = userProfile.getBoundingClientRect();

//     const popupContainer = document.getElementById("popup-container");
//     popupContainer.style.display = "block";

//     // Set the top and left positions initially
//     let topPosition = userProfileRect.bottom;
//     let leftPosition = userProfileRect.left;

//     // Check if the popup will go out of the right side of the viewport
//     if (leftPosition + popupContainer.offsetWidth > window.innerWidth) {
//       leftPosition = window.innerWidth - popupContainer.offsetWidth;
//     }

//     // Check if the popup will go out of the bottom of the viewport
//     if (topPosition + popupContainer.offsetHeight > window.innerHeight) {
//       topPosition = window.innerHeight - popupContainer.offsetHeight;
//     }

//     popupContainer.style.top = topPosition + "px";
//     popupContainer.style.left = leftPosition + "px";

//     document.getElementById("popup-iframe").src = userPageUrl;
//   }

// function showPopup(userPageUrl) {
//     const userProfile = document.querySelector(".user-profile");
//     const userProfileRect = userProfile.getBoundingClientRect();

//     const popupContainer = document.getElementById("popup-container");
//     popupContainer.style.display = "block";
//     popupContainer.style.top = userProfileRect.bottom + "px";
//     popupContainer.style.left = userProfileRect.left + "px";

//     document.getElementById("popup-iframe").src = userPageUrl;
//   }

// let slider = document.querySelector(".slider .list");
// let items = document.querySelectorAll(".slider .list .item");
// let next = document.getElementById("next");
// let prev = document.getElementById("prev");
// let dots = document.querySelectorAll(".slider .dots li");

// let lengthItems = items.length - 1;
// let active = 0;
// next.onclick = function () {
//   active = active + 1 <= lengthItems ? active + 1 : 0;
//   reloadSlider();
// };
// prev.onclick = function () {
//   active = active - 1 >= 0 ? active - 1 : lengthItems;
//   reloadSlider();
// };
// let refreshInterval = setInterval(() => {
//   next.click();
// }, 3000);
// function reloadSlider() {
//   slider.style.left = -items[active].offsetLeft + "px";
//   //
//   let last_active_dot = document.querySelector(".slider .dots li.active");
//   last_active_dot.classList.remove("active");
//   dots[active].classList.add("active");

//   clearInterval(refreshInterval);
//   refreshInterval = setInterval(() => {
//     next.click();
//   }, 3000);
// }

// dots.forEach((li, key) => {
//   li.addEventListener("click", () => {
//     active = key;
//     reloadSlider();
//   });
// });
// window.onresize = function (event) {
//   reloadSlider();
// };

// function myFunction(cardNumber) {
//   var dots = document.getElementById("dots" + cardNumber);
//   var moreText = document.getElementById("more" + cardNumber);
//   var btn = document.getElementById("myBtn" + cardNumber);

//   if (dots.style.display === "none") {
//     dots.style.display = "inline";
//     moreText.style.display = "none";
//     btn.innerHTML = "Read more";
//   } else {
//     dots.style.display = "none";
//     moreText.style.display = "inline";
//     btn.innerHTML = "Read less";
//   }
// }

function navigateToLoginPage() {
  window.location.href = "login.php";
}
