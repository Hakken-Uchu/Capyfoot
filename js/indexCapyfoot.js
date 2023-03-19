
window.addEventListener('DOMContentLoaded', event => {
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    navbarShrink();


    document.addEventListener('scroll', navbarShrink);


    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };


    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


$("#pays").change(function () {
    emoteSelected();

})

function emoteSelected() {
    var pays = $("#pays").val();
    if (pays == "fr") {
        $(".PP").attr("src", "images/capyfr.png").css('width','50%');
        $(".PP2").attr("src", "images/capyfr.png").css('width','10%');
    }
    else if(pays == "es"){
        $(".PP").attr("src", "images/capyes.png").css('width','50%');
        $(".PP2").attr("src", "images/capyes.png").css('width','10%');
    }
    else if(pays == "en"){
        $(".PP").attr("src", "images/capyen.png").css('width','50%');
        $(".PP2").attr("src", "images/capyen.png").css('width','10%');
    }
    else if(pays == "ja"){
        $(".PP").attr("src", "images/capyja.png").css('width','50%');
        $(".PP2").attr("src", "images/capyja.png").css('width','10%');
    }
    else if(pays == "po"){
        $(".PP").attr("src", "images/capypo.png").css('width','50%');
        $(".PP2").attr("src", "images/capypo.png").css('width','10%');
    }
    else if(pays == "su"){
        $(".PP").attr("src", "images/capysu.png").css('width','50%');
        $(".PP2").attr("src", "images/capysu.png").css('width','10%');
    }
    else if(pays == "ru"){
        $(".PP").attr("src", "images/capyru.png").css('width','50%');
        $(".PP2").attr("src", "images/capyru.png").css('width','10%');
    }
    else if(pays == "us"){
        $(".PP").attr("src", "images/capyus.png").css('width','50%');
        $(".PP2").attr("src", "images/capyus.png").css('width','10%');
    }
    else if(pays == "br"){
        $(".PP").attr("src", "images/capybr.png").css('width','50%');
        $(".PP2").attr("src", "images/capybr.png").css('width','10%');
    }
    else {
    $(".PP").attr("src", "images/capyppbase.png").css('width','50%');
    $(".PP2").attr("src", "images/capyppbase.png").css('width','10%');
}
}

