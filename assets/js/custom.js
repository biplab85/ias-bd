// css3 animation
// new WOW().init();


$(document).ready(function () {

    //Banner 
    $('.site-banner').slick({
        dots: true,
        draggable: true,
        autoplay: true, /* this is the new line */
        autoplaySpeed: 2000444444,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        touchThreshold: 100055588,
    });


    // $('.about-we-get').slick({
    //     dots: false,
    //     draggable: true,
    //     autoplay: false, /* this is the new line */
    //     autoplaySpeed: 2000,
    //     infinite: true,
    //     slidesToShow: 3.8,
    //     slidesToScroll: 1,
    //     touchThreshold: 1000,

    //     responsive: [
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1,
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1
    //             }
    //         }

    //     ]

    // });



    const aboutWeGet = $(".about-we-get");
    aboutWeGet
        .slick({
            dots: false,
            draggable: true,
            autoplay: true, /* this is the new line */
            autoplaySpeed: 2000,
            infinite: true,
            slidesToShow: 3.8,
            slidesToScroll: 1,
            touchThreshold: 1000,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });

    //Implementing navigation of slides using mouse scroll
    aboutWeGet.on('wheel', (function (e) {
        e.preventDefault();
        if (e.originalEvent.deltaY < 0) {
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
    }));



    //Trusted Partners
    $('.trusted-partners').slick({
        centerMode: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });


    //Registration Slider
    $('.registration-slider').slick({
        dots: true,
        arrows: false,
        draggable: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });



    //Speakers Slider
    $('.speakers-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.speakers-nav'
    });
    $('.speakers-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.speakers-for',
        dots: false,
        focusOnSelect: true,
        arrows: true,
        prevArrow: "<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>"
    });



    //Jquery Steps
    $(function () {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section.step-box",
            transitionEffect: "slideLeft"
        });
    });


    //Share button open~close S
    const shareButton = document.querySelectorAll("button.shareButton")
    if (shareButton.length > 0) {
        shareButton[0].addEventListener("click", (e) => {
            for (let i = 0; i < shareButton.length; i++) {
                shareButton[i].classList.toggle("open")
                shareButton[0].classList.remove("sent")
            }
        })

        for (let i = 1; i < shareButton.length; i++) {

            shareButton[i].addEventListener("click", (e) => {

                for (let i = 0; i < shareButton.length; i++) {
                    shareButton[i].classList.toggle("open")
                }
                shareButton[0].classList.toggle("sent")
            })
        }
    }
    //Share button open~close E

    jQuery('.stellarnav').stellarNav({
        theme: 'light',
        breakpoint: 960,
        position: 'right',
    });


    // Photo gallery 
    $('.photo-gallery-grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            horizontalOrder: true,
            columnWidth: '.grid-sizer'
        }
    });

});


// Success page confetti effect
$(window).ready(function () {
    setInterval(function () {
        $('#confetti').addClass("d-none")
    }, 8000);
});


// Page preloader
$(window).on('load', function () { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({ 'overflow': 'visible' });
})


/* ========================================== 
scrollTop() >= 200
Should be equal the the height of the header
========================================== */

$(window).scroll(function () {
    if ($(window).scrollTop() >= 200) {
        $('.menu-wrapper').addClass('fixed-header');
        $('body').addClass('header-visible');
    }
    else {
        $('.menu-wrapper').removeClass('fixed-header');
        $('body').removeClass('header-visible');
    }
});


// Scroll To Top

function scrollToTop() {

    window.scrollTo({ top: 0, behavior: 'smooth' });

}








