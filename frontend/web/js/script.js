// ---------- /Conveyor animation ----------

/*----------------------------------------------------------------

	Template Name: Hayley - Creative Personal Onepage HTML Template

	-------------------------------------------------------------------------------*/

/**************************************************************

 Main Js Activation
 01. Preloader
 02. Menu
 03. Header Shadow
 04. Pagepiling
 05. Carousels
 06. Forms
 __ End Js Activation

 ***************************************************************/



(function ($) {
    'use strict';

    /*-------------------------------------------------------------------------------
      Preloader
    -------------------------------------------------------------------------------*/

    $(window).on('load', function () {
        if ($('.preloader').length) {
            $('.preloader').fadeOut('slow');
        }
    });


    /*-------------------------------------------------------------------------------
      Menu
    -------------------------------------------------------------------------------*/

    $('.a-nav-toggle').on('click', function () {
        if ($('html').hasClass('body-menu-opened')) {
            $('html').removeClass('body-menu-opened').addClass('body-menu-close');
        } else {
            $('html').addClass('body-menu-opened').removeClass('body-menu-close');
        }
    });


    /*-------------------------------------------------------------------------------
      Header Shadow
    -------------------------------------------------------------------------------*/

    $('.pp-scrollable').scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.header').addClass('header-shadow');
        } else {
            $('.header').removeClass('header-shadow');
        }
    });


    /*-------------------------------------------------------------------------------
      Pagepiling
    -------------------------------------------------------------------------------*/


    if ($('.a-pagepiling').length) {
        $('.a-pagepiling').pagepiling({
            scrollingSpeed: 280,
            menu: '#menu, #menuMain, #menuMain1',
            anchors: ['Intro', 'Services', 'Projects', 'Awards'],
            loopTop: false,
            loopBottom: false,
            navigation: {
                'position': 'right'
            },
            onLeave: function () {
                $('.header').removeClass('header-shadow');
                if ($('.pp-scrollable.active').scrollTop() > 0) {
                    $('.header').addClass('header-shadow');
                } else {
                    $('.header').removeClass('header-shadow');
                }
                if ($('.slide-dark-footer').hasClass('active')) {
                    $('body').addClass('body-copyright-light');
                } else {
                    $('body').removeClass('body-copyright-light');
                }
                if ($('.slide-dark-bg').hasClass('active')) {
                    $('body').addClass('body-bg-dark');
                } else {
                    $('body').removeClass('body-bg-dark');
                }
                $('.a-carousel-projects').trigger('refresh.owl.carousel');
            }
        });
    }


    //$('.a-pagepiling').pagepiling.setAllowScrolling(false);

    /*-------------------------------------------------------------------------------
      Carousels
    -------------------------------------------------------------------------------*/

    if ($('.a-carousel-projects').length) {
        $('.a-carousel-projects').owlCarousel({
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
            navText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            smartSpeed: 750,
            dots: false,
            nav: true,
            loop: true
        });
    }

    if ($('.a-carousel-experience').length) {
        $('.a-carousel-experience').owlCarousel({
            items: 1,
            navText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            smartSpeed: 750,
            margin: 30,
            dots: false,
            nav: true,
            navContainer: '.a-carousel-nav',
            loop: true
        });
    }

    if ($('.a-carousel-testimonial').length) {
        $('.a-carousel-testimonial').owlCarousel({
            items: 1,
            navText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            smartSpeed: 750,
            margin: 30,
            dots: false,
            nav: true
        });
    }


    /*-------------------------------------------------------------------------------
      Forms
    -------------------------------------------------------------------------------*/

    // File Input Path
    $(document).on('change', '.a-file input[type="file"]', function () {
        var file_field = $(this).closest('.a-file');
        var path_input = file_field.find('input.file-path');
        var files = $(this)[0].files;
        var file_names = [];
        for (var i = 0; i < files.length; i++) {
            file_names.push(files[i].name);
        }
        path_input.val(file_names.join(", "));
        path_input.trigger('change');
    });


    // Material
    if ($('.a-form-group').length) {
        $('.a-form-group .form-control').each(function () {
            if ($(this).val().length > 0 || $(this).attr('placeholder') !== undefined) {
                $(this).closest('.a-form-group').addClass('active');
            }
        });
        $('.a-form-group .form-control').focus(function () {
            $(this).closest('.a-form-group').addClass('active');
        });
        $('.a-form-group .form-control').blur(function () {
            if ($(this).val() == '' && $(this).attr('placeholder') == undefined) {
                $(this).closest('.a-form-group').removeClass('active');
            }
        });
        $('.a-form-group .form-control').change(function () {
            if ($(this).val() == '' && $(this).attr('placeholder') == undefined) {
                $(this).closest('.a-form-group').removeClass('active');
            } else {
                $(this).closest('.a-form-group').addClass('active');
            }
        });
    }

    // Send Form
    if ($('.a-ajax-form').length) {
        $('.a-ajax-form').each(function () {
            var succMessage = $(this).find('.success-message');
            var errMessage = $(this).find('.error-message');
            $(this).validate({
                errorClass: 'error',
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: $(form).serialize(),
                        success: function () {
                            succMessage.show();
                        },
                        error: function () {
                            errMessage.show();
                        }
                    });
                }
            });
        });
    }

}($));


var bg = document.querySelector('.item-bg');
var adss = document.querySelector('.burty');
var adssss = document.querySelector('.dsfa');
var dreees = document.querySelector('.dirsx');
var dreeeas = document.querySelector('.dirsxa');
var items = document.querySelectorAll('.news__item');
var item = document.querySelector('.news__item');


if ($(window).width() > 1500) {
    $(document).on("mouseover", ".news__item", function (_event, _element) {


        var newsItem = document.querySelectorAll('.news__item');
        newsItem.forEach(function (element, index) {
            element.addEventListener('mouseover', function () {
                var x = this.getBoundingClientRect().left;
                var y = this.getBoundingClientRect().top;
                var width = this.getBoundingClientRect().width;
                var height = this.getBoundingClientRect().height;

                $('.item-bg').addClass('active');
                $('.news__item').removeClass('active');
                // $('.news__item').removeClass('active');


                bg.style.width = width + 'px';
                bg.style.height = height + 'px';
                bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            });

            element.addEventListener('mouseleave', function () {
                $('.item-bg').removeClass('active');
                $('.news__item').removeClass('active');
            });

        });

    });
}
function is_touch_device() {
    return 'ontouchstart' in window;

}
var swiper;
if (is_touch_device()){
    swiper = new Swiper('.news-slider', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true
        },
        // autoplay: {
        //     delay: 6000,
        //     disableOnInteraction: false,
        // },
        allowTouchMove: false,
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.news-slider-next',
            prevEl: '.news-slider-prev'
        },
        pagination: {
            el: '.news-slider__pagination',
            clickable: true,
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.news__item');

                $('.swiper-slide-active .news__item').addClass('active');

                var x = sliderItem.getBoundingClientRect().left;
                var y = sliderItem.getBoundingClientRect().top;
                var width = sliderItem.getBoundingClientRect().width;
                var height = sliderItem.getBoundingClientRect().height;


                $('.item-bg').addClass('active');

                bg.style.width = width + 'px';
                bg.style.height = height + 'px';
                bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            }
        }
    });
    adss.style.display = "none";
    adssss.style.display = "none";
}else {
    swiper = new Swiper('.news-slider', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true
        },
        // autoplay: {
        //     delay: 6000,
        //     disableOnInteraction: false,
        // },
        allowTouchMove: true,
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.news-slider-next',
            prevEl: '.news-slider-prev'
        },
        pagination: {
            el: '.news-slider__pagination',
            clickable: true,
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.news__item');

                $('.swiper-slide-active .news__item').addClass('active');

                var x = sliderItem.getBoundingClientRect().left;
                var y = sliderItem.getBoundingClientRect().top;
                var width = sliderItem.getBoundingClientRect().width;
                var height = sliderItem.getBoundingClientRect().height;


                $('.item-bg').addClass('active');

                bg.style.width = width + 'px';
                bg.style.height = height + 'px';
                bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            }
        }
    });
    dreees.style.display = "none";
    dreeeas.style.display = "none";
}



swiper.on('touchEnd', function () {
    $('.news__item').removeClass('active');
    $('.swiper-slide-active .news__item').addClass('active');
});

swiper.on('slideChange', function () {
    $('.news__item').removeClass('active');
});

swiper.on('slideChangeTransitionEnd', function () {
    $('.news__item').removeClass('active');
    var activeItem = document.querySelector('.swiper-slide-active');

    var sliderItem = activeItem.querySelector('.news__item');

    $('.swiper-slide-active .news__item').addClass('active');

    var x = sliderItem.getBoundingClientRect().left;
    var y = sliderItem.getBoundingClientRect().top;
    var width = sliderItem.getBoundingClientRect().width;
    var height = sliderItem.getBoundingClientRect().height;


    $('.item-bg').addClass('active');

    bg.style.width = width + 'px';
    bg.style.height = height + 'px';
    bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
});


// ---------- PC screen blocks filler ----------
var shapeColor = anime({
    targets: '#Group .btm-pc-left-col',
    fill: '#0195a1',
    delay: 2000,
    loop: true
});

var shapeColor2 = anime({
    targets: '#Group .btm-pc-btm-row-right',
    fill: '#addce0',
    delay: 3000,
    loop: true
});

var shapeColor3 = anime({
    targets: '#Group .btm-pc-top-row-mid-col',
    fill: '#2d2040',
    delay: 1500,
    loop: true
});

var shapeColor4 = anime({
    targets: '#Group .btm-pc-circle',
    fill: '#41de536028e6',
    delay: 3500,
    loop: true
});

var shapeColor5 = anime({
    targets: '#Group .btm-pc-top-row-left-col',
    fill: '#addce0',
    delay: 2500,
    loop: true
});

var shapeColor6 = anime({
    targets: '#Group .btm-pc-top-row-right-col',
    fill: '#66676d',
    delay: 1000,
    loop: true
});
// ---------- /PC screen blocks filler ----------
// ---------- Right diagram columns animation ----------
var diagramMov1 = anime({
    targets: '.first-diagram-moving',
    translateY: '25',
    scaleY: '0.7',
    easing: 'linear',
    duration: 2000,
    direction: 'alternate',
    loop: true
});
var diagramMov2 = anime({
    targets: '.second-diagram-moving',
    translateY: '23',
    scaleY: '0.7',
    easing: 'linear',
    duration: 3000,
    direction: 'alternate',
    loop: true
});
var diagramMov3 = anime({
    targets: '.third-diagram-moving',
    translateY: '20',
    scaleY: '0.7',
    easing: 'linear',
    duration: 2500,
    direction: 'alternate',
    loop: true
});
var diagramMov4 = anime({
    targets: '.fourth-diagram-moving',
    translateY: '15',
    scaleY: '0.7',
    easing: 'linear',
    duration: 1800,
    direction: 'alternate',
    loop: true
});

// var elems = document.querySelectorAll('.diagram')


// var diagramMove = anime({
//   targets: elems,
//   direction: 'alternate',
//   easing: 'linear',
//   duration: 2500,
//   loop: true,
//   scaleY: '0.65',

//   translateY: function(el, i){
//     // console.log(Number( (i + 1) + '5'));
//     return Number( (elems.length - i) + '5');
//   }

// delay: function(el, i){
//   var randomDelay = Math.floor(Math.random() * 1000) + 100;
//   console.log(randomDelay);
//   console.log(i);
//   return randomDelay;

// }
// ---------- /Right diagram columns animation ----------
// ---------- Left graph dots animation ----------



/*///////////*/

var bg1 = document.querySelector('.item-bg1');


if ($(window).width() > 1500) {
    $(document).on("mouseover", ".news__item1", function (_event, _element) {

        var newsItem = document.querySelectorAll('.news__item1');
        newsItem.forEach(function (element, index) {
            element.addEventListener('mouseover', function () {
                var x = this.getBoundingClientRect().left;
                var y = this.getBoundingClientRect().top;
                var width = this.getBoundingClientRect().width;
                var height = this.getBoundingClientRect().height;

                $('.item-bg1').addClass('active');
                $('.news__item1').removeClass('active');
                // $('.news__item1').removeClass('active');


                bg1.style.width = width + 'px';
                bg1.style.height = height + 'px';
                bg1.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            });

            element.addEventListener('mouseleave', function () {
                $('.item-bg1').removeClass('active');
                $('.news__item1').removeClass('active');
            });

        });

    });
}


var swiper1;
if (is_touch_device()){
    swiper1 = new Swiper('.news-slider1', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true
        },
        // autoplay: {
        //     delay: 6000,
        //     disableOnInteraction: false,
        // },
        allowTouchMove: false,
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.news-slider-next1',
            prevEl: '.news-slider-prev1'
        },
        pagination: {
            el: '.news-slider__pagination1',
            clickable: true,
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.wer.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.news__item1');

                $('.wer.swiper-slide-active .news__item1').addClass('active');

                var x = sliderItem.getBoundingClientRect().left;
                var y = sliderItem.getBoundingClientRect().top;
                var width = sliderItem.getBoundingClientRect().width;
                var height = sliderItem.getBoundingClientRect().height;


                $('.item-bg1').addClass('active');

                bg1.style.width = width + 'px';
                bg1.style.height = height + 'px';
                bg1.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            }
        }
    });
}else {
    swiper1 = new Swiper('.news-slider1', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: true
        },
        // autoplay: {
        //     delay: 6000,
        //     disableOnInteraction: false,
        // },
        allowTouchMove: true,
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.news-slider-next1',
            prevEl: '.news-slider-prev1'
        },
        pagination: {
            el: '.news-slider__pagination1',
            clickable: true,
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.wer.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.news__item1');

                $('.wer.swiper-slide-active .news__item1').addClass('active');

                var x = sliderItem.getBoundingClientRect().left;
                var y = sliderItem.getBoundingClientRect().top;
                var width = sliderItem.getBoundingClientRect().width;
                var height = sliderItem.getBoundingClientRect().height;


                $('.item-bg1').addClass('active');

                bg1.style.width = width + 'px';
                bg1.style.height = height + 'px';
                bg1.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
            }
        }
    });
}



swiper1.on('touchEnd', function () {
    $('.news__item1').removeClass('active');
    $('.wer.swiper-slide-active .news__item1').addClass('active');
});

swiper1.on('slideChange', function () {
    $('.news__item1').removeClass('active');
});

swiper1.on('slideChangeTransitionEnd', function () {
    $('.news__item1').removeClass('active');
    var activeItem = document.querySelector('.wer.swiper-slide-active');

    var sliderItem = activeItem.querySelector('.news__item1');

    $('.wer.swiper-slide-active .news__item1').addClass('active');

    var x = sliderItem.getBoundingClientRect().left;
    var y = sliderItem.getBoundingClientRect().top;
    var width = sliderItem.getBoundingClientRect().width;
    var height = sliderItem.getBoundingClientRect().height;


    $('.item-bg1').addClass('active');

    bg1.style.width = width + 'px';
    bg1.style.height = height + 'px';
    bg1.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
});



let background1 = document.querySelector('.background1');

function def() {
    background1.style.background='';
}

function tashkent() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Tashkent.jpg')";


}

function buxara() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Buxara.jpg')  ";

}

function djizak() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Jizzak.jpg') ";

}

function kashidarya() {
    document.querySelector(".background1").style.backgroundImage= "url('./pro/Karshi.jpg')";

}

function navoi() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Navoi.jpg') ";

}

function namangan() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Namangan.jpg') ";

}

function samarkand() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Samarkand.jpg')  ";

}

function surxandarya() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Termez.jpg') ";

}

function sirdarya() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Gulistan.jpg') ";

}

function fergana() {
    document.querySelector(".background1").style.backgroundImage= "url('./pro/Fergana.jpg') ";

}

function xorezm() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Yrgench.jpg') ";

}

function andijan() {
    document.querySelector(".background1").style.backgroundImage = "url('./pro/Andijan.jpg') ";

}







