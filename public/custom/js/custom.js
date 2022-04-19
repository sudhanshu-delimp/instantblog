$(document).ready(function(){
        
    $("#tab1").addClass("block--tab");
    $("#tab4").fadeIn();
    $('.tab--hover---title ul li a').click(function(e){
        e.preventDefault();
        var ths = $(this);
        var tagid = $(this).data('tag');
        $('.tab--hover---title ul li a').removeClass('active--tab');
        ths.addClass("active--tab");
        $(".most--populer .tab--slider--inner .tab--hover-section").fadeOut();
        $('#'+tagid).fadeIn();
        
    });


    $('.tab--slider-tab ul li a').on("click", function(e){
        e.preventDefault();
        var ths = $(this);
        var tagid = $(this).data('tag');
        $('.tab--slider-tab ul li a').removeClass('active--tab');
        ths.addClass("active--tab");
        $(".tab--slider--inner .tab--slider-tabs").removeClass("block--tab");
        // $('#'+tagid).delay(500).queue(function(){$('#'+tagid).addClass('block--tab')});
            setTimeout(function(){ 
                $('#'+tagid).addClass("block--tab");
    }, 300);
        
    });

    // slider

    $('.tab---sliders').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });


        $('.tab---sliders2').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });


        $('.tab---sliders3').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });

        // banner slider
        $('.banner--slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });

    $('.slider-nav').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    });