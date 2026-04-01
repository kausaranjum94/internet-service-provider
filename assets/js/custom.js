/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

var stickyon = jQuery('#sticky-onoff').text().trim();
var a1 = stickyon.length;
window.onscroll = function () {
  if (a1 == 3) {
    myScrollNav();
  }
}


function rtl_direction(){
  if (jQuery('body').hasClass("rtl")) {
     return true;
  } else {
     return false;
  }
}

var navbar = document.getElementById("masthead");
var sticky = navbar.offsetTop;
function myScrollNav() {
  if (window.pageYOffset > sticky) {
    //alert(window.pageYOffset);
    navbar.classList.add("sticky");
    navbar.classList.add("stickynavbar");
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.remove("stickynavbar");
  }
}
jQuery(function ($) {

  jQuery('.search-icon > i').click(function () {
    jQuery(".serach_outer").slideDown(700);
  });

  jQuery('.closepop i').click(function () {
    jQuery(".serach_outer").slideUp(700);
  });
});

var menu_width = "";

var menu_width = "";
/* Mobile responsive Menu*/
jQuery(function ($) {
  jQuery('#open_nav').click(function () {
    jQuery('#sidebar1').css({ "width": "250px", "display": "block" })
  })
  jQuery('#close_nav').click(function () {
    jQuery('#sidebar1').css({ "width": "0", "display": "none" })
  })
});



jQuery(document).ready(function ($) {

  $(".search-btn").click(function(e){
    e.preventDefault();
    $(".search-wrapper").addClass("active");
    $(this).css("display", "none");
    $(".search-data").fadeIn(500);
    $(".close-btn").fadeIn(500);
    $(".search-data .line").addClass("active");
    setTimeout(function(){
      $(".search-data input").focus();
      $(".search-data label").fadeIn(500);
      $(".search-data span").fadeIn(500);
    }, 800);
  });
  $(".close-btn").click(function(){
    $(".search-wrapper").removeClass("active");
    $(".search-btn").fadeIn(800);
    $(".search-data").fadeOut(500);
    $(".close-btn").fadeOut(500);
    $(".search-data .line").removeClass("active");
    $("input").val("");
    $(".search-data label").fadeOut(500);
    $(".search-data span").fadeOut(500);
  });

  
   var owl = jQuery('#pricing-plan .owl-carousel');
    owl.owlCarousel({
    margin: 15,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery("#pricing-plan").data('speed')),
    loop: jQuery("#pricing-plan").data('loops'),
    dots: false,
    autoplayHoverPause:true,
    rtl:rtl_direction(),
    navText : ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2,
      },
      900: {
        items: 3,
      },
      1024: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });

  var owl = jQuery('#our-partner .owl-carousel');
    owl.owlCarousel({
    margin: 10,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery("#our-partner").data('speed')),
    loop: jQuery("#our-partner").data('loops'),
    dots: true,
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      900: {
        items: 5
      },
      1024: {
        items: 6
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
  

  var owl = jQuery('#records .owl-carousel');
    owl.owlCarousel({
    margin: 10,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery("#records").data('speed')),
    loop: jQuery("#records").data('loops'),
    dots: false,
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2
      },
      900: {
        items: 2
      },
      1024: {
        items: 2
      },
      1200: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

 

})

jQuery('document').ready(function () {

 
  var interval = null;
  function show_loading_box() {
    jQuery(".eco-box").css("display", "none");
    clearInterval(interval);
  }

  // offer section

    // jQuery(".whychoose-box").mouseover(function () {
    //   jQuery(this).find("img").attr('src', jQuery(this).find("img").data("hover"));
    // }).mouseout(function () {
    //   jQuery(this).find("img").attr('src', jQuery(this).find("img").data("src"));
    // });

    jQuery(".plan-info").mouseover(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("hover"));
    }).mouseout(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("src"));
    });

  //  offer section
  interval = setInterval(show_loading_box, 1000);
});

/* Counter */
jQuery(document).ready(function () {

  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function () {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop: 0                       // Scroll to top of body
    }, 1000);
  });

});


//At the document ready event
jQuery(function () {
  new WOW().init();
});

//also at the window load event
jQuery(window).on('load', function () {

  new WOW().init();
});

jQuery(document).ready(function ($) {
  AOS.init({
    once: true,
  });

});

// const elem = document.getElementById('map-image');
//   const panzoom = Panzoom(elem, {
//     maxScale: 5,
//     minScale: 1,
//     step: 0.3,
//     contain: 'outside'   // allows zoom beyond container edges
//   });

//   // Enable wheel zoom
//   elem.parentElement.addEventListener('wheel', panzoom.zoomWithWheel);

//   // Optional: start zoomed in so it fills nicely
//   panzoom.zoom(1.2);