//title
$(document).ready(function(){
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('#room .title').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 750){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');
});
$(document).ready(function(){
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('#facility .title').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 750){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');

});
$(document).ready(function(){
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('#notice .title').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 750){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');

});
$(document).ready(function(){
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('#notice ul').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 750){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');

});

//mSlider
$(document).ready(function(){
    var swiper = new Swiper('#mSlider .swiper-container', {
        effect: 'fade',
        navigation: {
            nextEl: '#mSlider .swiper-button-next',
            prevEl: '#mSlider .swiper-button-prev',
        },
        loop: true,
        allowTouchMove: false,
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            init: function(){
                $('#mSlider .progress .bar').addClass('active');
            },
            slideChangeTransitionStart: function(){
                $('#mSlider .progress .bar').removeClass('active');
            },
            slideChangeTransitionEnd: function(){
                $('#mSlider .progress .bar').addClass('active');
            },
        },
    });
});

//room
$(document).ready(function(){
    var swiper = new Swiper('#room .swiper-container', {
        effect: 'fade',
        navigation: {
            nextEl: '#room .swiper-button-next',
            prevEl: '#room .swiper-button-prev',
        },
        loop: true,
        speed: 800,
    });
    
});

//facility
$(document).ready(function(){
    var swiper = new Swiper('#facility .swiper-container', {
        effect: 'fade',
        navigation: {
            nextEl: '#facility .swiper-button-next',
            prevEl: '#facility .swiper-button-prev',
        },
        loop: true,
        speed: 800,      
    });
});

//promotion
$(document).ready(function(){
    var swiper01 = new Swiper('#promotion .swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 160,
        centeredSlides: true,
        navigation: {
            nextEl: '#promotion .swiper-button-next',
            prevEl: '#promotion .swiper-button-prev',
        },
        loop: true,
        speed: 1200,
    });
});
