function isValidEmailAddress(emailAddress) {
    'use strict';
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

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

    var mySwiper = new Swiper('.benefits-gallery-container', {
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

    var mySwiper2 = new Swiper('.testimonials-slider', {
        // Optional parameters
        direction: 'horizontal',
        speed: 400,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        spaceBetween: 10,
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
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

    jQuery(document).ready(function () {
        if (Cookies.get('cookie_consent') != undefined) {
            // cookie is set
            jQuery('.gpf-privacy-policy-accept').addClass('hidden-policy');
        } else {
            // cookie is not set
            jQuery('.gpf-privacy-policy-accept').removeClass('hidden-policy');
        }
    });

    jQuery(document).on('touchstart click', '#privacy-policy-accept-btn', function (event) {
        if (event.handled === false) return
        event.stopPropagation();
        event.preventDefault();
        event.handled = true;
        console.log('clicked');
        Cookies.set('cookie_consent', 'cookie_consent', {
            expires: 7
        });
        jQuery('.gpf-privacy-policy-accept').addClass('hidden-policy');
    });

    jQuery('.button-benefits-item-wrapper').on('click', function (e) {
        e.preventDefault();
        jQuery('.modal-body-dynamic').html('');
        var currentID = jQuery(this).attr('id');
        var currentHTML = jQuery('#' + currentID + ' .button-benefits-content').html();
        jQuery('#modalBenefits').modal('toggle');
        jQuery('.modal-body-dynamic').html(currentHTML);
    });

    jQuery('.btn-contact').on('click', (e) => {
        e.preventDefault();
        var passd = true;

        var formElements = jQuery('.contact-form-container :input');
        for (let index = 0; index < formElements.length; index++) {

            var element = formElements[index],
                errorName = element.name,
                errorInput = 'error-' + errorName;
            switch (element.name) {
                case 'firstname':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_name;
                    } else {
                        if (element.value.length < 2) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_name;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'lastname':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_last;
                    } else {
                        if (element.value.length < 2) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_last;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'email':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_email;
                    } else {
                        if (isValidEmailAddress(element.value) == false) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_email;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'country':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_country;
                    } else {
                        document.getElementsByClassName(errorInput)[0].innerHTML = '';
                    }
                    break;
                case 'message':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_message;
                    } else {
                        document.getElementsByClassName(errorInput)[0].innerHTML = '';
                    }
                    break;

                default:
                    break;
            }
        }

        if (passd == true) {
            jQuery.ajax({
                method: 'POST',
                url: admin_url.ajax_custom_url,
                data: {
                    action: 'custom_contact_form',
                    info: jQuery('.contact-form-container').serialize()
                },
                beforeSend: function () {
                    jQuery('.contact-form-loader').html('<div class="lds-dual-ring"></div>');
                },
                success: function (response) {
                    jQuery('.contact-form-loader').html('');
                    jQuery('.contact-form-response').html(response.data);
                }
            });
        }
    });

    jQuery('.btn-mayorista').on('click', (e) => {
        e.preventDefault();
        var passd = true;

        var formElements = jQuery('.mayorista-form-container :input');
        for (let index = 0; index < formElements.length; index++) {

            var element = formElements[index],
                errorName = element.name,
                errorInput = 'error-' + errorName;
            switch (element.name) {
                case 'firstname':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_name;
                    } else {
                        if (element.value.length < 2) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_name;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'lastname':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_last;
                    } else {
                        if (element.value.length < 2) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_last;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'email':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_email;
                    } else {
                        if (isValidEmailAddress(element.value) == false) {
                            passd = false;
                            document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.invalid_email;
                        } else {
                            document.getElementsByClassName(errorInput)[0].innerHTML = '';
                        }
                    }
                    break;
                case 'company':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_company;
                    } else {
                        document.getElementsByClassName(errorInput)[0].innerHTML = '';
                    }
                    break;
                case 'country':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_country;
                    } else {
                        document.getElementsByClassName(errorInput)[0].innerHTML = '';
                    }
                    break;
                case 'message':
                    if (element.value == '') {
                        passd = false;
                        document.getElementsByClassName(errorInput)[0].innerHTML = admin_url.error_message;
                    } else {
                        document.getElementsByClassName(errorInput)[0].innerHTML = '';
                    }
                    break;

                default:
                    break;
            }
        }

        if (passd == true) {
            jQuery.ajax({
                method: 'POST',
                url: admin_url.ajax_custom_url,
                data: {
                    action: 'custom_mayorista_form',
                    info: jQuery('.mayorista-form-container').serialize()
                },
                beforeSend: function () {
                    jQuery('.contact-form-loader').html('<div class="lds-dual-ring"></div>');
                },
                success: function (response) {
                    jQuery('.contact-form-loader').html('');
                    jQuery('.contact-form-response').html(response.data);
                }
            });
        }
    });


}); /* end of as page load scripts */