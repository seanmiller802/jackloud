
// While loading, show the page load screen
window.addEventListener("load", function() {
  var load_screen = document.getElementById("load_screen");
  document.body.removeChild(load_screen);
  document.getElementById('page').classList.add('ready');
});

// Smooth scroll to different sections when a link is clicked. Exclude links with a class of carousel-control
$(function() {
  $('a[href*="#"]:not(.carousel-control)').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - $('.navbar').height()
      }, 1000);
        return false;
      }
    }
  });
});

// Hide the navbar on page load. Reveal it when scrolling down
(function ($) {
  $(document).ready(function(){

    $(".navbar-toggle").on("click", function () {
      $(this).toggleClass("active");
    });

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

            // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 450) {
                $('.navbar').css('background', 'Black')
                $('.navbar').addClass('navbar-fixed-top')
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
    });
});
  }(jQuery));

// Highlight current navigation position
  var sections = $('section')
   , nav = $('nav')
   , nav_height = nav.outerHeight();

  $(window).on('scroll', function () {
   var cur_pos = $(this).scrollTop();

   sections.each(function() {
     var top = $(this).offset().top - nav_height,
         bottom = top + $(this).outerHeight();

     if (cur_pos >= top && cur_pos <= bottom) {
       nav.find('a').removeClass('current');
       sections.removeClass('current');

       $(this).addClass('current');
       nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('current');
     }
   });
  });

// Display email sign up form
var yes = document.querySelector('.Yes');
var signup = document.querySelector('.enter-raffle');
yes.addEventListener('click', function() {
  yes.classList.add('hidden');
  signup.classList.remove('hidden');
});
