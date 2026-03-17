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

// var navbar = document.getElementById("masthead");
// var sticky = navbar.offsetTop;
// function myScrollNav() {
//   if (window.pageYOffset > sticky) {
//     //alert(window.pageYOffset);
//     navbar.classList.add("sticky");
//     navbar.classList.add("stickynavbar");
//   } else {
//     navbar.classList.remove("sticky");
//     navbar.classList.remove("stickynavbar");
//   }
// }
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

// jQuery('.cat_toggle').click(function () {
//   jQuery('#cart_animate').toggle('slow');
// });
jQuery(document).click(function () {
  jQuery(".cat_box").hide();
});
jQuery(".cat_toggle").click(function (e) {
  jQuery(".cat_box").show();
  e.stopPropagation();
});
jQuery(".cat_box").click(function (e) {
  e.stopPropagation();
});
function setQueryParams(data_obj) {
  let url = new URL(window.location.href)
  let params = new URLSearchParams(url.search)

  const data_obj_keys = Object.keys(data_obj)

  for (let index = 0; index < data_obj_keys.length; index++) {
    const element = data_obj_keys[index]

    if ((element != 'base_url') && (element != 'values')) {

      const value = data_obj[element];

      if (Array.isArray(value)) {

        const joined_cat = value.join(',');
        params.set(element, joined_cat);
      } else {
        params.set(element, value);
      }
    }
  }

  const querySting = params.toString()

  window.history.replaceState(null, null, `?${querySting}`)
}

function checkCategoryCheckboxFromURL() {

  const params = new URLSearchParams(window.location.search);

  const categoriesParam = params.get('products_categories');

  const search_value = params.get('search_value');

  jQuery(`input[name="products_search"]`).val(search_value);

  if (categoriesParam) {

    const categoryIds = categoriesParam.split(',');

    categoryIds.forEach(categoryId => {

      const categoryCheckbox = jQuery(`input[name="products_categories"][value="${categoryId}"]`);

      if (categoryCheckbox.length) {
        categoryCheckbox.prop('checked', true);
      }
    });
  }
}


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

  var owl = jQuery('.kitchen-style-wrapper .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery(".kitchen-style-wrapper").data('speed')),
    loop: jQuery(".kitchen-style-wrapper").data('loops'),
    dots: true,
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 2
      },
      1024: {
        items: 3
      }
    },
    autoplayHoverPause: true,
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
    dots: true,
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 2
      },
      768: {
        items: 3
      },
      900: {
        items: 3
      },
      1024: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

  var owl = jQuery('#kitchen-tabs .owl-carousel');
  owl.owlCarousel({
    margin: 20,
    nav: jQuery("#kitchen-tabs").data('nav'),
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery("#kitchen-tabs").data('speed')),
    loop: jQuery("#kitchen-tabs").data('loops'),
    dots: jQuery("#kitchen-tabs").data('dots'),
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
        items: 3
      },
      900: {
        items: 3
      },
      1024: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

  var owl = jQuery('#testimonials .owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: false,
    autoplay : true,
    autoplayTimeout: parseInt(jQuery("#testimonials").data('speed')),
    loop: jQuery("#testimonials").data('loops'),
    lazyLoad: true,
    dots: jQuery("#testimonials").data('dots'),
    autoplayHoverPause:true,
    rtl:rtl_direction(),
    navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
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
    autoplayHoverPause : true,
    mouseDrag: true
  });

  var owl = jQuery('#latest-news .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: jQuery("#latest-news").data('nav'),
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: parseInt(jQuery("#latest-news").data('speed')),
    loop: jQuery("#latest-news").data('loops'),
    dots: jQuery("#latest-news").data('dots'),
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 2
      },
      1024: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

  var owl = jQuery('#team .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    loop: false,
    dots: false,
    autoplayHoverPause: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 3
      },
      900: {
        items: 3
      },
      1024: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

})

function add_to_wishlist(e) {
  setTimeout(() => {
    jQuery.ajax({
      type: 'POST',
      url: internet_service_provider_pro_customscripts_obj.ajaxurl,
      data: {
        action: 'get_wishlist_count'
      },
      success: function (response) {
        if (response.status == 200) {
          jQuery('.wishlist-counter.count').text(response.wishlist_count);
        }
      }
    });
  }, 1000);
}


jQuery('document').ready(function () {

  jQuery('#videoBtn').click(function () {
    jQuery("#chooseVideo").css("display", "block");
  });
  jQuery('.close-one').click(function () {
    jQuery("#chooseVideo").css("display", "none");
  });

  jQuery('.cat_toggle i').click(function () {
    jQuery('#cart_animate').toggle('slow');
  });


  jQuery(window).on('scroll', function (e) {
    if (jQuery("#about-us").offset() != undefined) {
      if (jQuery(window).scrollTop() >= (jQuery("#about-us").offset().top - (jQuery(window).height()))) {
        if (!jQuery("#about-us").hasClass("animated")) {
          jQuery('#about-us .counter1-up').each(function () {
            var targetValue = parseInt(jQuery(this).text().replace(/,/g, ''), 10);
            jQuery(this).prop('Counter', 0).animate({
              Counter: targetValue
            }, {
              duration: 10000,
              easing: 'swing',
              step: function (now) {
                jQuery(this).text(Math.ceil(now).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
              }
            });
          });
          jQuery("#triggered").addClass("show");
          jQuery("#about-us").addClass("animated");
        }
      }
    }
  });

  var interval = null;
  function show_loading_box() {
    jQuery(".eco-box").css("display", "none");
    clearInterval(interval);
  }

  // offer section

  jQuery('document').ready(function () {
    jQuery(".whychoose-box").mouseover(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("hover"));
    }).mouseout(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("src"));
    });

    jQuery(".process-box").mouseover(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("hover"));
    }).mouseout(function () {
      jQuery(this).find("img").attr('src', jQuery(this).find("img").data("src"));
    });

    interval = setInterval(show_loading_box, 1000);
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


jQuery('body').on('added_to_cart', function (e, fragments, cart_hash, button) {
  var product = '';
  var img = '';
  var title = '';
  var url = '';

  if (internet_service_provider_pro_customscripts_obj.is_home == "1") {
    var product = jQuery(button).closest('.product-box');
    var img = product.find('img').attr('src');
    var title = product.find('.product-title a').text();
    var url = product.find('.woocommerce-loop-product__link').attr('href');
  } else {
    var product = jQuery(button).closest('.popular-pro-box');
    var img = product.find('img').attr('src');
    var title = product.find('.product-title a').text();
    var url = product.find('.product-title a').attr('href');
  }
  if (product != '') {
    jQuery.notify({
      icon: img,
      title: title,
      message: "Product has been added to your cart.",
      url: url
    }, {
      type: 'minimalist',
      delay: "3000",
      icon_type: 'image',
      template: '  <div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<div class="d-flex gap-2 align-items-center">' +
        '<div>' +
        '<img data-notify="icon" class="img-circle pull-left">' +
        '</div>' +
        '<div>' +
        '<span class="prod-title" data-notify="title">{1}</span>' +
        '<div class="prod-messg" data-notify="message">{2}</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
    });
  }

});


jQuery(document).ready(function ($) {
  AOS.init({
    once: true,
  });

});