//popup
$(document).ready(function(){
    function setCookie(name, value, expiredays) {  
	   var todayDate = new Date();
	   todayDate.setDate( todayDate.getDate() + expiredays );
	   document.cookie = name + '=' + escape( value ) + '; path=/; expires=' + todayDate.toGMTString() + ';'
	};
    
    $('.tClose').click(function(){ 
        setCookie('maindiv','done',1);
		$('.popupWrap').slideUp(0);
        $('html, body').css('overflow','visible');
    });	
    $('.eClose').click(function(){
        $('.popupWrap').slideUp(0);
        $('html,body').css('overflow','visible');
    });
    
	cookiedata = document.cookie;
	if(cookiedata.indexOf('maindiv=done') < 0 ){
		$('.popupWrap').css('display','block');
	}else{                        
		$('.popupWrap').css('display','none');
        $('html, body').css('overflow','visible');        
	}
});

//language
$(document).ready(function(){
    var select = '.language';
    var language = '.language li';
    $(select).find('button').click(function(){
        $(this).next().stop().slideToggle('fast');
        $(this).find('.icon').toggleClass('active');
    });
    $(select).mouseleave(function(){
        $(this).find('ul').stop().slideUp('fast');
        $(this).find('.icon').removeClass('active');
    });
    $(select).find('li:last a').keydown(function(e){
        if(e.keyCode == 9){
            if(!e.shiftKey){
                $(select).find('button').trigger('click');
            }
        }
    });
    $(select).find('button').keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){
                $(this).next().stop().slideUp('fast');
                $(this).find('.icon').removeClass('active');
            }
        }
    });
    $(language).click(function(){
        alert('페이지 준비중입니다.');
    });
});

//gnb
$(document).ready(function(){
    var main = '.mainNav';
    var sub = '.subNav';
    $(main).mouseenter(function(){
        $(sub).stop().slideUp(0);
        $(this).next().stop().slideDown('fast');
        $(main).removeClass('active');
        $(this).parent().mouseleave(function(){
            $(this).find(sub).stop().slideUp('fast');
            $(main).removeClass('active');
        });
    });
    $(main).focus(function(){
        var is = $(this).next().is(':hidden');
        if(is){
            $(sub).stop().slideUp('fast');
            $(this).next().slideDown('fast');
            $(main).removeClass('active');
            $(this).addClass('active');
        }
    });
    $(main).first().keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){
                $(this).next().stop().slideUp('fast');
                $(this).removeClass('active');
            }
        }
    });
    $(sub).last().find('li:last a').keydown(function(e){
        if(e.keyCode == 9){ //tab누름
            if(!e.shiftKey){ //shift는 안누름
                $(this).parents(sub).stop().slideUp('fast');
                $(this).parents(sub).prev().removeClass('active');
            }
        }
    });
});

//familySite
$(document).ready(function(){
    var select = '.familySite';

    $(select).find('button').click(function(){
        $(this).next().stop().slideToggle('fast');
        $(this).find('.icon').toggleClass('active');
    });

    $(select).mouseleave(function(){
        $(this).find('ul').stop().slideUp('fast');
        $(this).find('.icon').removeClass('active');
    });

    $(select).find('li:last a').keydown(function(e){
        if(e.keyCode == 9){
            if(!e.shiftKey){
                $(select).find('button').trigger('click');
            }
        }
    });
    $(select).find('button').keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){
                $(this).next().stop().slideUp('fast');
                $(this).find('.icon').removeClass('active');
            }
        }
    });
});

/* scrollBtn */
$(document).ready(function(){
    var btn = '.scrollBtn a';
    var scrollSpeed = 1200;
    var fadeSpeed = 'fast';
    var ease = 'easeOutQuart';
    var minWidth = 1370; 
    $(btn).fadeOut(0);
    $(btn).click(function(e){
        e.preventDefault(); 
        $('html, body').animate({
            scrollTop: 0 
        },scrollSpeed,ease);
    });

    $(window).on('scroll resize',function(){
        var top = $(window).scrollTop();
        var w = $(window).width();
        if(top < 500 || w < minWidth){
            $(btn).fadeOut(fadeSpeed);
        }else{
            $(btn).fadeIn(fadeSpeed);
        }
    });
});