window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});

function toggleMenu() {
    const menuToggle = document.querySelector('.toggle');
    const menuMovil = document.querySelector('.menu-movil');
    menuToggle.classList.toggle('active');
    menuMovil.classList.toggle('active');
}