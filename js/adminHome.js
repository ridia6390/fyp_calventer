//------------------------NEWS PANNEL----------------------------

function scrollContainer() {
  var container = document.querySelector(".container");
  container.scrollTop += 1; 

 
  if (container.scrollTop >= container.querySelector(".card").offsetHeight) {
    var firstCard = container.querySelector(".card");
    container.appendChild(firstCard.cloneNode(true));
    container.removeChild(firstCard);
    container.scrollTop -= firstCard.offsetHeight; 
  }
}

var scrollInterval = setInterval(scrollContainer, 50);

var container = document.querySelector(".container");
container.addEventListener("mouseenter", function () {
  clearInterval(scrollInterval);
});

container.addEventListener("mouseleave", function () {
  scrollInterval = setInterval(scrollContainer, 50);
});



let slider = document.querySelector(".slider .list");
let items = document.querySelectorAll(".slider .list .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let dots = document.querySelectorAll(".slider .dots li");

let lengthItems = items.length - 1;
let active = 0;

next.onclick = function () {
  active = active + 1 <= lengthItems ? active + 1 : 0;
  reloadSlider();
};

prev.onclick = function () {
  active = active - 1 >= 0 ? active - 1 : lengthItems;
  reloadSlider();
};

let refreshInterval = setInterval(() => {
  next.click();
}, 3000);

function reloadSlider() {
  
  slider.style.left = -items[active].offsetLeft + "px";

 
  let lastActiveDot = document.querySelector(".slider .dots li.active");
  lastActiveDot.classList.remove("active");
  dots[active].classList.add("active");

  
  clearInterval(refreshInterval);
  refreshInterval = setInterval(() => {
    next.click();
  }, 10000); 
}

dots.forEach((li, key) => {
  li.addEventListener("click", () => {
    active = key;
    reloadSlider();
  });
});

window.onresize = function (event) {
  reloadSlider();
};

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


