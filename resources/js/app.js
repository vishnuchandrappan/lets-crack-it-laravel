require("./bootstrap");

const navLinks = document.querySelector(".nav-links");
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
    burger.classList.toggle("burger-active");
    navLinks.classList.toggle("nav-active");
});

const container = document.querySelector(".container");

container.addEventListener("click", () => {
    if (burger.classList.contains("burger-active")) {
        burger.classList.remove("burger-active");
        navLinks.classList.remove("nav-active");
    }
});
