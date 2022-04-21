//scroll
$(document).ready(function(){
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('.haven > div').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 600){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');
});

//employment
$(document).ready(function(){
    //tabmenu
    var btn = '.employment .tabMenu .tabBtn a';
    var content = '.employment .tabMenu .tabContentsWrap > div';
    $(btn).first().addClass('active');
    $(content).first().fadeIn(0); 
    
    $(btn).click(function(){        
        $(btn).removeClass('active'); 
        $(this).addClass('active'); 
        
        var index = $(this).parent().index(); 
        $(content).fadeOut(0); 
        $(content).eq(index).fadeIn(0);
    });
    //scroll
    $(window).scroll(function(){
        var sTop = $(window).scrollTop();
        $('.personality > div').each(function(index){
            var divTop = $(this).offset().top;

            if(sTop > divTop - 600){ 
                $(this).addClass('active');
            }
        });
    });
    $(window).trigger('scroll');
});

//faq
$(document).ready(function(){
    var btn = '.faq dt a';
    var dt = '.faq dt';
    var dd = '.faq dd';
    
    $(btn).click(function(){
        var is = $(this).parent().next().is(':hidden');
        
        if(is){
            $(dd).stop().slideUp(200);
            $(this).parent().next().stop().slideDown(200);
            $(dt).removeClass('active');
            $(this).parent().addClass('active');
        }else{
            $(this).parent().next().stop().slideUp(200,function(){
                $(this).prev().removeClass('active');
            });
        }
    });
});

//map - tabMenu
$(document).ready(function(){
    var btn = '.tabMenu .tabBtn a';
    var content = '.tabMenu .tabContentsWrap > div';
    $(btn).first().addClass('active');
    $(content).first().fadeIn(0); 
    
    $(btn).click(function(){        
        $(btn).removeClass('active'); 
        $(this).addClass('active'); 
        
        var index = $(this).parent().index(); 
        $(content).fadeOut(0); 
        $(content).eq(index).fadeIn(0);
    });
});

//slideWrap - room,facility
$(document).ready(function(){
    var swiper = new Swiper('.slideWrap .swiper-container', {
        slidesPerView: 'auto',
        centeredSlides: true,
        navigation: {
            nextEl: '.slideWrap .swiper-button-next',
            prevEl: '.slideWrap .swiper-button-prev',
        },
        pagination: {
            el: '.slideWrap .swiper-pagination',
            clickable: true,
        },
        loop: true,
        speed: 1000,
    });
});