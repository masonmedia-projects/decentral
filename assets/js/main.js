const swup = new Swup({
    doScrollingRightAway: false,
    animateScroll: false,
    scrollFriction: .3,
    scrollAcceleration: .04
//    scrollAcceleration: 0
});

document.addEventListener('swup:contentReplaced', function () {
    AOS.init();
    
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
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
$('.nav-link, body').on('click',function() {
  $('.navbar-collapse').collapse('hide');
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

//jaxx blog API call
$(document).ready(function() {
var blogButtonContainer = document.getElementById("blog-button-container");

var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=3');
ourRequest.onload = function() {
  if (ourRequest.status >= 200 && ourRequest.status < 400) {
    var data = JSON.parse(ourRequest.responseText);
      createHTML(data);
  } else {
    console.log("We connected to the server, but it returned an error.");
  }
};

ourRequest.onerror = function() {
  console.log("Connection error");
};

ourRequest.send();  

});

function createHTML(postsContent) {
    var jaxxBlogString = '';
            var blogButtonContainer = document.getElementById("blog-button-container");

    for (i = 0; i < postsContent.length; i++) {

        // heading
        const blogHeading = document.createElement('h2');
        blogHeading.append(postsContent[i].title.rendered);

        // blog content
        const blogContent = document.createElement('div');
        blogContent.innerHTML = postsContent[i].content.rendered.substring(0, 1000) + '...';

        // read more button
        const ellipsis = document.createElement('a');
        ellipsis.className = 'btn btn-outline-orange';
        ellipsis.textContent = 'Read More';
        ellipsis.href = postsContent[i].link;
        ellipsis.target = '_blank';

        blogButtonContainer.appendChild(blogHeading);
        blogButtonContainer.appendChild(blogContent);
        blogButtonContainer.appendChild(ellipsis);

    }
}

//smoothstate
$(function(){
  'use strict';
  var options = {
    prefetch: true,
    cacheLength: 10,
    blacklist: '.no-smoothState',
    onStart: {
      duration: 700, // Duration of our animation
      render: function ($container) {
        // Add your CSS animation reversing class
        $container.addClass('is-exiting');

        // Restart your animation
        smoothState.restartCSSAnimations();
      }
    },
    onReady: {
      duration: 0,
      render: function ($container, $newContent) {
        // Remove your CSS animation reversing class
        $container.removeClass('is-exiting');

        // Inject the new content
        $container.html($newContent);

      }
    },
      onAfter: function() {
          //mobile menu animation
            var wrapperMenu = document.querySelector('.wrapper-menu');
                wrapperMenu.addEventListener('click', function(){
                wrapperMenu.classList.toggle('open');  
            })
            //lazy load
            $(".lazy").recliner({
                attrib: "data-src", // selector for attribute containing the media src
                throttle: 0,      // millisecond interval at which to process events
                threshold: 5,     // scroll distance from element before its loaded
                printable: true    // be printer friendly and show all elements on document print
            //    live: true          // auto bind lazy loading to ajax loaded elements
            });
          
          //reinit AOS scroll animation
          AOS.init();
          //reinit BS carousel
          $('.carousel').carousel({
            interval: 1200
            });
          $('.nav-link, body').on('click',function() {
              $('.navbar-collapse').collapse('hide');
            });
          //reinit smooth scroll
          $('a[href*="#"]').on('click', function (e) {
               e.preventDefault();

               $('html, body').animate({
                  scrollTop: $($(this).attr('href')).offset().top
               }, 500, 'linear');
            });
          
          //reinit blog API call
          var blogButtonContainer = document.getElementById("blog-button-container");

            var ourRequest = new XMLHttpRequest();
            ourRequest.open('GET', 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=3');
            ourRequest.onload = function() {
              if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var data = JSON.parse(ourRequest.responseText);
                  createHTML(data);
              } else {
                console.log("We connected to the server, but it returned an error.");
              }
            };

            ourRequest.onerror = function() {
              console.log("Connection error");
            };

            ourRequest.send();  
          
          function createHTML(postsContent) {
                var jaxxBlogString = '';
                    var blogButtonContainer = document.getElementById("blog-button-container");

                for (i = 0; i < postsContent.length; i++) {

                // heading
                const blogHeading = document.createElement('h2');
                blogHeading.append(postsContent[i].title.rendered);

                // blog content
                const blogContent = document.createElement('div');
                blogContent.innerHTML = postsContent[i].content.rendered.substring(0, 1000) + '...';

                // read more button
                const ellipsis = document.createElement('a');
                ellipsis.className = 'btn btn-outline-orange';
                ellipsis.textContent = 'Read More';
                ellipsis.href = postsContent[i].link;
                ellipsis.target = '_blank';

                blogButtonContainer.appendChild(blogHeading);
                blogButtonContainer.appendChild(blogContent);
                blogButtonContainer.appendChild(ellipsis);

                }
            }
          
        }//end onAfter
  },
  smoothState = $('#main').smoothState(options).data('smoothState');
});

// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc
