(function($) {
    "use strict";

    //   if ($(window).width() < 1200) {
    //     $('body').hide();
    //    }
    //  else {
    //   $('body').show();
    //  }

    // var eventFired = 0;

    // if ($(window).width() < 1200) {
    //     // alert('Less than 1200');
    //     eventFired=0;

    // }
    // else {
    //     console.log('More than 1200');
    //     eventFired = 1;
    // }



    //  $(window).on('resize', function() {
    //   if (!eventFired) {
    //       if ($(window).width() < 1200) {
    //           console.log($(window).width())
    //           $('body').hide();
    //           $('aside').show();
    //       } else {
    //           console.log('More than 1200 resize');
    //           $('body').show();
    //           $('aside').hide();
    //       }
    //   }
    // });

    // Preloader (if the #preloader div exists)
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove().then(() => console.log('preloader removed'));
                // $('#video').play();
                // $(window).scrollTop();
            })
        }

    });

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Initiate the wowjs animation library
    new WOW().init();

    // Header scroll class
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
    }

    // Smooth scroll for the navigation and links with .scrollto classes
    $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-scrolled')) {
                        top_space = top_space - 40;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.main-nav, .mobile-nav').length) {
                    $('.main-nav .active, .mobile-nav .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                    $('.mobile-nav-overly').fadeOut();
                }
                return false;
            }
        }
    });

    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.main-nav, .mobile-nav');
    var main_nav_height = $('#header').outerHeight();

    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop();

        nav_sections.each(function() {
            var top = $(this).offset().top - main_nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                main_nav.find('li').removeClass('active');
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
        });
    });

    // jQuery counterUp (used in Whu Us section)
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    // Porfolio isotope and filter
    $(window).on('load', function() {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item'
        });
        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({ filter: $(this).data('filter') });
        });
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        items: 1
    });

    // Clients carousel (uses the Owl Carousel library)
    $(".clients-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 2 },
            768: { items: 4 },
            900: { items: 6 }
        }
    });

    $(".guest-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: { items: 1 },
            768: { items: 1 },
            900: { items: 3 }
        }
    });

    $("#owl-demo").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        //  singleItem:true

        // "singleItem:true" is a shortcut for:
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        dots: true,
        loop: true,

    });


    // $("#notifBell").click(()=>{
    //   $("#NotifPanel").addClass("wow bounceInRight animated");
    //   $("#NotifPanel").attr("style", "visibility: visible; animation-name: bounceInRight;");
    //   console.log('bell button clicked')
    // })


})(jQuery);



var flag = 0;

function notif() {
    if (flag == 0) {
        document.getElementById("NotifPanel").style.width = "20%";
        flag = 1;
        console.log('panel opened')
    } else {
        document.getElementById("NotifPanel").style.width = "0";
        flag = 0;

        console.log('panel closed')
    }
}

// window.addEventListener("resize", function() {
//   if (window.matchMedia("(min-width: 1200px)").matches) {
//   console.log("Screen width is at least 500px");
//   } else {
//   console.log("Screen less than 500px");
//   }
//   });

// Play only one video at a time
$('video').bind('play', function(e) {
    var video = $('video');
    for (var i = 0; i < video.length; i++) {
        if (video[i] != e.target) {
            video[i].pause();
        }
    }
});

// Play video when player is visible
$(window).scroll(function() {

    var currentYpos = window.pageYOffset || document.documentElement.scrollTop;

    $('#video').each(function() {
        // if ($(this).visible(true)) {
        //     $(this)[0].play();
        //     console.log('video playing');
        // } else {
        //     $(this)[0].pause();
        //     console.log('video paused');
        // }

        if (currentYpos >= $(this)[0].offsetTop && currentYpos <= $(this)[0].offsetTop + $(this)[0].offsetHeight * (5 / 6)) {
            //Play video if the current scroll position 
            //is between the top and bottom of the video element
            $(this)[0].play();
            console.log("video playing");
        } else {
            //else pause the video 
            $(this)[0].pause();
            console.log("video paused");
        }
    })
});

$(window).load(function() {
    $('#video').each(function() {
        $(this)[0].play();
    })
});

$(document).ready(function() {


    $("#mute").click(function() {
        if ($("video").prop('muted')) {
            $("video").prop('muted', false);
            $("#mute").css("background-image", "url(img/loud.svg)");
        } else {
            $("video").prop('muted', true);
            $("#mute").css("background-image", "url(img/mute.svg)");
        }
    });
});