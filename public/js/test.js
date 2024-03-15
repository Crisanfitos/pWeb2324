var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

window.addEventListener('scroll', function () {
  if (window.scrollY > 150) {
    navbar.classList.add('navbar-solid');
  } else {
    navbar.classList.remove('navbar-solid');
  }
});

window.onscroll = function () { stickyNavbar() };

function stickyNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

