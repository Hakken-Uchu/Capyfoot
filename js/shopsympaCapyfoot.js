window.addEventListener('DOMContentLoaded', event => {
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.add('navbar-shrink')
        } else if (window.scrollY !== 0) {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    navbarShrink();


    document.addEventListener('scroll', navbarShrink);




});