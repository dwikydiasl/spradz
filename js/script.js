//humberger

$('#toggle').click(function() {
 $(this).toggleClass('active');
 $('#overlay_menu').toggleClass('open');
});

//header scrolled

$(function() {
  var header = $(".header");
  
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      header.addClass("scrolled");
    } 
    else {
      header.removeClass("scrolled");
    }
  });
  
});

//visibilty password
function seePassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

//video modal
$('#modalVideo').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#modalVideo').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})

//owl carousel
jQuery(document).ready(function($) {
  "use strict";
  $('#slide-all-testimoni').owlCarousel({
   center: true,
   items:3,
   loop:true,
   margin:50,
   dots: false,
   responsive:{
    500:{
      items:3
    },
    1000: {
      items: 5
    }
  }
});
});

//owl carousel all client
jQuery(document).ready(function($) {
  "use strict";
  $('#slide-all-client').owlCarousel({
   center: true,
   items:4,
   loop:true,
   margin:20,
   autoplay: true,
   autoplayTimeout:6000,
   smartSpeed: 1000,
   autoWidth:true
 });
});


//owl prev - next

var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.owl-next').click(function() {
  owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.owl-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
  })

//scroll testimonial
jQuery(document).ready(function($) {
  "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
              loop: true,
              center: true,
              items: 3,
              margin: 0,
              autoplay: true,
              autoplayTimeout:6000,
              smartSpeed: 1000,
              dots:false,
              responsive: {
                0: {
                  items: 1
                },
                700: {
                  items: 2
                },
                1200: {
                  items: 3
                }
              }
            });
          });





//fade in hero
var animateHTML = function() {
  var elems;
  var windowHeight;
  function init() {
    elems = document.querySelectorAll('.hidden-hero');
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var positionFromTop = elems[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace(
          'hidden-hero',
          'fade-in-element'
          );
      }
    }
  }
  return {
    init: init
  };
};
animateHTML().init();


//slide right
var animateHTML = function() {
  var elems;
  var windowHeight;
  function init() {
    elems = document.querySelectorAll('.hidden-text');
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var positionFromTop = elems[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace(
          'hidden-text',
          'slide-right'
          );
      }
    }
  }
  return {
    init: init
  };
};
animateHTML().init();

//slide right
var animateHTML = function() {
  var elems;
  var windowHeight;
  function init() {
    elems = document.querySelectorAll('.hidden-text2');
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var positionFromTop = elems[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace(
          'hidden-text2',
          'slide-left'
          );
      }
    }
  }
  return {
    init: init
  };
};
animateHTML().init();


//value testimoni



