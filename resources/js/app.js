require("./bootstrap");

const navLinks = document.querySelector(".nav-links");
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
    burger.classList.toggle("burger-active");
    navLinks.classList.toggle("nav-active");
});
