

$(document).ready(function () {


    $('.heroSelider').slick({
        infinite: true,
        arrows: false,
        dots: true,
        autoplay: true,
        speed: 1100,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
    });
    
    $('.testimonialSlider').slick({
        infinite: true,
        arrows: false,
        dots: true,
        autoplay: true,
        speed: 1100,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
    });
    
    $('.roomCardSlider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 1100,
        centerMargin: false,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]

    });


    $('[data-fancybox="gallery"]').fancybox({
        hash : true
    });
    $('.mainSlider').slick({
       slidesToScroll: 1,
       arrows: true,
       slide: '> div',
   });


    var ScrollTop = 100;
    $(window).scroll(function(e){
       var st = $(this).scrollTop();
       if (st > ScrollTop){
          $(".headerTop").addClass("topMenu")
          $(".headerTop .navbar .collapse ul li a").addClass("active")
          $(".navbar-brand").addClass("active")
       } else {
        $(".headerTop").removeClass("topMenu")
        $(".headerTop .navbar .collapse ul li a").removeClass("active")
        $(".navbar-brand").removeClass("active")
       }
    });

    AOS.init();

});