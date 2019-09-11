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

//video modal
$('#modalVideo').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#modalVideo').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})

//owl carousel
$('.owl-carousel').owlCarousel({
 center: true,
    items:3,
    loop:true,
    margin:50,
    dots: true,
    responsive:{
        600:{
            items:5
        }
    }
})

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
