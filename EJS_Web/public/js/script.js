const header = document.querySelector("header");


window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 60)
    header.classList.toggle("sticky1", window.scrollY > 650)
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};