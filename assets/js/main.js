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

    
        
});
//end swup reinit


// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc
