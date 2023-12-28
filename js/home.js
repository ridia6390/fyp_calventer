
// Modify the openUserProfileUpdate function to navigate directly
function openUserProfileUpdate() {
    window.location.href = 'user_profile_update.php';
  }
  
  // Function to navigate to the login page
  function navigateToLoginPage() {
    window.location.href = "login.php";
  }

// //------------------------Navbar----------------------------
//  const toggleBtn = document.querySelector('.toggle_btn');
//  const toggleBtnIcon = document.querySelector('.toggle_btn i');
//  const dropDownMenu = document.querySelector('.dropdown_menu');

//  toggleBtn.onclick = function () {
//      dropDownMenu.classList.toggle('open');
//      const isOpen = dropDownMenu.classList.contains('open');

//      toggleBtnIcon.classList = isOpen
//          ? 'fa-solid fa-xmark'
//          : 'fa-solid fa-bars';
// };



//------------------------NEWS PANNEL----------------------------

function scrollContainer() {
    var container = document.querySelector('.container');
    container.scrollTop += 1; // Adjust the scrolling speed as needed

    // Check if the scroll has reached the height of a single card
    if (container.scrollTop >= container.querySelector('.card').offsetHeight) {
        // Move the first card to the end to create a cycling effect
        var firstCard = container.querySelector('.card');
        container.appendChild(firstCard.cloneNode(true));
        container.removeChild(firstCard);
        container.scrollTop -= firstCard.offsetHeight; // Adjusted to maintain the scroll position
    }
}

var scrollInterval = setInterval(scrollContainer, 50);

var container = document.querySelector('.container');
container.addEventListener('mouseenter', function () {
    clearInterval(scrollInterval);
});

container.addEventListener('mouseleave', function () {
    scrollInterval = setInterval(scrollContainer, 50);
});

//-----------------------slider (NOT USED)-----------------------------

let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;

next.onclick = function() {
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}

prev.onclick = function() {
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}

let refreshInterval = setInterval(() => { next.click() }, 3000);

function reloadSlider() {
    // Adjust the left style of the slider to show the current active item
    slider.style.left = -items[active].offsetLeft + 'px';

    // Change the active state of dots
    let lastActiveDot = document.querySelector('.slider .dots li.active');
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active');

    // Reset the automatic slider interval
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => { next.click() }, 10000); // Adjust the interval time
}

dots.forEach((li, key) => {
    li.addEventListener('click', () => {
        active = key;
        reloadSlider();
    });
});

window.onresize = function(event) {
    reloadSlider();
};


//--------------------------------------------------------------

