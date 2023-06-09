import './main.css'
alert("Hello!!")

window.addEventListener('scroll', function () {
    var navbar = document.querySelector('#navbar');
    var scrolled = window.scrollY > 0;

    if (scrolled) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});