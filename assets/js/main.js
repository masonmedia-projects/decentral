//swup init
$(document).ready(function() {
    const swup = new Swup({
        doScrollingRightAway: false,
        animateScroll: false,
        scrollFriction: .3,
        scrollAcceleration: .04
    //    scrollAcceleration: 0
    });
});

//init BS carousel and pass speed option
$(document).ready(function() {
    $('.carousel').carousel({
      interval: 2000
    });
});

//init AOS library
$(document).ready(function() {
    AOS.init();
});

//mobile menu animation
$(document).ready(function() {
    var wrapperMenu = document.querySelector('.wrapper-menu');
        wrapperMenu.addEventListener('click', function(){
        wrapperMenu.classList.toggle('open');  
        })
});

//close mobile nav on click
$(document).ready(function() {
    $('.nav-link, body').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });
});

//smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/
$(document).ready(function() {
    $('a[href*="#"]').on('click', function (e) {
	   e.preventDefault();

	   $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	   }, 500, 'linear');
    });
});

//change nav color on scroll
$(document).scroll(function () {
    $('#home nav, #home .navbar, #home .decentral-navbar-brand, #home .decentral-mobile-menu').toggleClass('scrolled', $(this).scrollTop() > 20);
  });

//lazy load

$(document).ready(function() {
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
});

//scroll reveal 
$(document).ready(function() {
//    var slideUp = {
//        distance: '150%',
//        duration: 2000,
//        opacity: 0,
//        origin: 'bottom',
//    //    easing: 'cubic-bezier(.46,.18,0,1.06)',
//        easing: 'cubic-bezier(.49,-0.63,.34,1.33)',
//        interval: 10,
//        reset: true
//    };
//
//    ScrollReveal().reveal('.slide-up', slideUp);
    
    ScrollReveal().reveal('.flip', {
        rotate: {
            x: 100,
            z: 20
        },
        duration: 1500,
        opacity: 0,
        easing: 'cubic-bezier(.49,-0.63,.34,1.33)',
        interval: 10,
        reset: true
            
    });
    
    ScrollReveal().reveal('.slide-up', {
        distance: '150%',
        duration: 1800,
        opacity: 0,
        origin: 'bottom',
        easing: 'cubic-bezier(.49,-0.63,.34,1.33)',
        interval: 10,
        reset: true
    });
    ScrollReveal().reveal('.slide-down', {
        distance: '150%',
        duration: 1500,
        opacity: 0,
        origin: 'top',
        easing: 'cubic-bezier(.46,.18,0,1.06)',
        interval: 10,
        reset: true
    });
    ScrollReveal().reveal('.slide-right', {
        distance: '150%',
        duration: 1500,
        opacity: 0,
        origin: 'left',
        easing: 'cubic-bezier(.46,.18,0,1.06)',
        interval: 10,
        reset: true
    });
});


//swup reinit plugins

document.addEventListener('swup:contentReplaced', function () {
    //aos reinit
    AOS.init();

    //lazyload reinit
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
    //init BS carousel and pass speed option

    $('.carousel').carousel({
      interval: 2000
    });

    //mobile menu animation

    var wrapperMenu = document.querySelector('.wrapper-menu, .nav-item');
        wrapperMenu.addEventListener('click', function(){
        wrapperMenu.classList.toggle('open');  
        })


    //close mobile nav on click
    $('.nav-link, body').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });

//smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/

    $('a[href*="#"]').on('click', function (e) {
	   e.preventDefault();

	   $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	   }, 500, 'linear');
    });


//change nav color on scroll
    $('#home nav, #home .navbar, #home .decentral-navbar-brand, #home .decentral-mobile-menu').toggleClass('scrolled', $(this).scrollTop() > 20);


//lazy load
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
    
    //scroll reveal 
    
    var slideUp = {
        distance: '150%',
        duration: 2000,
        opacity: 0,
        origin: 'bottom',
    //    easing: 'cubic-bezier(.46,.18,0,1.06)',
        easing: 'cubic-bezier(.49,-0.63,.34,1.33)',
        interval: 10,
        reset: true
    };

    ScrollReveal().reveal('.slide-up', slideUp);

    var slideRight = {
        distance: '150%',
        duration: 1500,
        opacity: 0,
        origin: 'left',
        easing: 'cubic-bezier(.46,.18,0,1.06)',
        interval: 10,
        reset: true
    };

    ScrollReveal().reveal('.slide-right', slideRight);

    var slideDown = {
        distance: '150%',
        duration: 1500,
        opacity: 0,
        origin: 'top',
        easing: 'cubic-bezier(.46,.18,0,1.06)',
        interval: 10,
        reset: true
    };

    ScrollReveal().reveal('.slide-down', slideDown);
    

});
//end swup reinit


// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc
