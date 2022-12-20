$(document).ready(function () {

    //Banner 
    $('.site-banner').slick({
        dots: true,
        draggable: true,
        autoplay: true, /* this is the new line */
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        touchThreshold: 1000,
    });


    $('.about-we-get').slick({
        dots: false,
        draggable: true,
        autoplay: false, /* this is the new line */
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 3.8,
        slidesToScroll: 1,
        touchThreshold: 1000,
    });


    //Trusted Partners
    $('.trusted-partners').slick({
        centerMode: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true
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


$(window).ready(function () {
    setInterval(function () {
        $('#confetti').addClass("d-none")
    }, 8000);

});