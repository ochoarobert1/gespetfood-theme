jQuery(document).ready(function ($) {
    "use strict";

    jQuery('.menu-btn').on('click', function () {
        jQuery(this).toggleClass('menu-btn-open');
        jQuery('.navbar-mobile-content').toggleClass('navbar-hidden');
    });

    jQuery('#stickerMobile').sticky({
        topSpacing: 0,
        zIndex: 9999
    })

    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 50,
            stretch: 10,
            slideShadows: false,
        },
        speed: 400,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        spaceBetween: 30,
        slidesPerView: 3,
        centeredSlides: true,
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
                autoplay: {
                    delay: 3000
                }
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 10,
                autoplay: {
                    delay: 3000
                }
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 3,
                spaceBetween: 10,
                autoplay: {
                    delay: 3000
                }
            },
            800: {
                slidesPerView: 3,
                spaceBetween: 10,
                autoplay: {
                    delay: 3000
                }
            }
        }
    });

    // below listed default settings
    AOS.init({
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
}); /* end of as page load scripts */
