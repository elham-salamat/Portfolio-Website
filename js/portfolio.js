const burgerIcon = document.querySelector('.burger-menu');
const nav = document.querySelector('.nav-list');


burgerIcon.addEventListener('click', () => {
    nav.classList.toggle('nav-active');
});

$(document).ready(function() {
    $(".myprojects").owlCarousel( {
        loop:true,
        margin:10,
        nav:true,
        items: 1        
    });
});









