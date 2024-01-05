
document.addEventListener("DOMContentLoaded", function () {
    var navbarCollapse = document.getElementById("navbarCollapse");
    var logoImg = document.querySelector(".logo-img");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
            navbarCollapse.classList.add("scrolled");
            logoImg.style.height = "60px"; /* Adjust the height when scrolled */
            logoImg.style.opacity = "1"; /* Adjust the opacity when scrolled */
        } else {
            navbarCollapse.classList.remove("scrolled");
            logoImg.style.height = "0"; /* Set the height to 0 when at the top */
            logoImg.style.opacity = "0"; /* Set the opacity to 0 when at the top */
        }
    });
});

