window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) { // You can adjust this value to change when the background color changes
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});