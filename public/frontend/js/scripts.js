// document.addEventListener('DOMContentLoaded', function() {
jQuery(document).ready(function ($) {

    
    // ================== Dropdown

    if ($(window).width() < 1200) {
        $(function () {
            $('#myUL li').click(function (e) {
                e.stopPropagation();
                $(this).children('ul').stop().slideToggle(400);
            });
        });
    } else {
        $('#myUL li').hover(function () {
            $(this).children('ul').stop().slideToggle(400);
        });
    }


    
    // ====================== footer ======================= //

    // Footer menu collapse jquiery
    if ($(window).width() <= 991) {
        $('.footer-list-items').removeClass('show');
    }

    $( window ).resize(function() {
        if ($(window).width() <= 991) {
            $('.footer-list-items').removeClass('show');
        } else {
            $('.footer-list-items').addClass('show');
        }
    });


    $(".fancybox").fancybox({
        padding: 0,
    
        openEffect: 'elastic',
        openSpeed: 300,
    
        closeEffect: 'elastic',
        closeSpeed: 300,
    
        closeClick: true,
    
        helpers: {
          overlay: {
            locked: false
          }
        },
    
        // Responsive breakpoints
        breakpoints: {
          1024: {
            slidesPerView: 3,
            spaceBetween: 0,
            shortSwipes: true,
          },
    
          768: {
            slidesPerView: 2,
            spaceBetween: 0,
            shortSwipes: true,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 0,
            shortSwipes: true,
          },
          420: {
            slidesPerView: 1,
            spaceBetween: 0,
            shortSwipes: true,
          }
        }
    
    });
    


});





