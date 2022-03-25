
// ==================== Testimonials Swiper ================= //


var testimonialswiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 3,
    spaceBetween: 40,
    loop: true,

        
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },


    pagination: {
        el: ".testimonial-pagination",
        clickable: true,
    },

    breakpoints: {

        1600: {
            spaceBetween: 30,
        },


        1200: {
            slidesPerView: 2,
            spaceBetween: 35,
        },
        
        991: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        
        767: {
            slidesPerView: 1,
        },
    }
});
  

// ==================== Screen Shot Swiper ================= //

var appssswiper = new Swiper('.app-ss-swiper', {
    slidesPerView: 'auto',
    loop: true,
    grabCursor: true,
    // preventClicks: false,
    // preventClicksPropagation: false,
    // shortSwipes: false,
    navigation: {
        nextEl: ".app-ss-next",
        prevEl: ".app-ss-prev",
    },

    breakpoints: {

        991: {
            centeredSlides: true,
        },

    }
 
});


