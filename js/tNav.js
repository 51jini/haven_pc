//join
$(document).ready(function(){
    var all = '#allChk';
    var c01  = '#chk01';
    var c02  = '#chk02';
    var c03  = '#chk03';
    
    $(all).change(function(){
        var allChk = $(this).prop('checked');
        if(allChk){
            $(this).parents().find('input[type=checkbox]').prop('checked',true);
        }else{
            $(this).parents().find('input[type=checkbox]').prop('checked',false);
        }
    });
    $(all).parents().find('input[type=checkbox]').change(function(){
        var chk01 = $(c01).prop('checked');
        var chk02 = $(c02).prop('checked');
        var chk03 = $(c03).prop('checked');
        if(chk01 && chk02 && chk03){
            $('#allChk').prop('checked',true);
        }else{
            $('#allChk').prop('checked',false);
        }
    });
    $('.step1').click(function(e){
        e.preventDefault();
        var chk01 = $(c01).prop('checked'); 
        var chk02 = $(c02).prop('checked'); 
        
        if(chk01 && chk02){
            location.assign('../tnav/join02.php');
        }else{
            alert('필수 약관에 동의해주셔야 합니다.');
        }
    });
});

//join02 - gender
$(document).ready(function(){
    var select = '.gender';
    
    $('.gender li').click(function(){
        var text = $(this).text();
        $(this).parent().prev().find('.text').html(text);
        
        $(this).parent().stop().slideUp('fast');
    });

    $(select).find('button').click(function(){
        $(this).next().stop().slideToggle('fast');
        $(this).find('.icon').toggleClass('active');
    });
    $(select).mouseleave(function(){
        $(this).find('ul').slideUp('fast');
        $(this).find('.icon').removeClass('active');
    });
    $(select).find('li:last').keydown(function(e){
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

//join02 - birth
$(document).ready(function(){
    //생년월일 ul 문서객체 담기
    var y = '.yBox ul';
    var m = '.mBox ul';
    var d = '.dBox ul';
    
    //li를 담을 변수
    var yOpt = '';
    var mOpt = '';
    
    //오늘 연도 구하기
    var today = new Date();
    var yToday = today.getFullYear();
    
    //년과 월 구현
    for(var i=yToday;i>=1900;i--){
        yOpt += '<li>' + i + '</li>';
    }
    for(var j=1;j<=12;j++){
        mOpt += '<li>' + j + '</li>';
    }
    $(y).html(yOpt);
    $(m).html(mOpt);
    
    //일 구현
    var date = [31,28,31,30,31,30,31,31,30,31,30,31];
    
    //일 구현 함수
    function datePrint(x,y){
        var leap = y;

        if((leap % 4 == 0 && leap % 100 != 0) || leap % 400 == 0){
            date[1] = 29;
        }else{
            date[1] = 28;
        }
        
        var dOpt = '';
        
        for(var i=1;i<=date[x];i++){
            dOpt += '<li>' + i + '</li>';
        }
        
        $(d).html(dOpt);
    }
        
    //초기실행 - 일 구현
    datePrint(0);
    
    //동적생성된 객체는 바로 이벤트를 줄수 없음
    //on('이벤트',동적객체선택',콜백함수)
    $(document).on('click','.birth li',function(){
        var text = $(this).text();        
        
        $(this).parent().prev().find('.text').html(text);
        
        var index = $(m).prev().find('.text').html();
        var yIndex = $(y).prev().find('.text').html();
        
        if(index == '월'){
            index = 1;
        }
        if(yIndex == '년'){
            yIndex = yToday; 
        }
        
        datePrint(index-1,yIndex);
        
        $(this).parent().stop().slideUp('fast');

    });
    
    //일이 사라지지 않는 현상 해결
    $(document).on('click','.dBox li',function(){
        $('.dBox ul').stop().slideUp('fast');
    });
    
    //클릭이벤트시 보이도록 처리
    var select = '.birth';

    $(select).find('button').click(function(){
        $(this).next().stop().slideToggle('fast');
        $(this).find('.icon').toggleClass('active');
    });
    $(select).mouseleave(function(){
        $(this).find('ul').slideUp('fast');
        $(this).find('.icon').removeClass('active');
    });
    $(select).find('li:last').keydown(function(e){
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

//join02 - phone
$(document).ready(function(){
    //firstNum 배열 선언, li동적생성
    var first = ['010','011','016','017'];
    var firstNumber = '.firstNum ul';
    var list = '';
    for(var i in first){
        list += '<li>' + first[i] + '</li>';
    }
    $(firstNumber).html(list);
    
    $(document).on('click','.firstNum li',function(){
        var num = $(this).text();
        $(this).parent().prev().find('.text').html(num);
        $(this).parent().stop().slideUp('fast');
    });
    
    
    //클릭이벤트시 보이도록 처리
    var select = '.firstNum';
    
    $(select).find('button').click(function(){
        $(this).next().stop().slideToggle('fast');
        $(this).find('.icon').toggleClass('active');
    });
    $(select).mouseleave(function(){
        $(this).find('ul').slideUp('fast');
        $(this).find('.icon').removeClass('active');
    });
    $(select).find('li:last').keydown(function(e){
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
   
//marketing
$(document).ready(function(){
    var all = '#all';
    var email  = '#emailChk';
    var sms  = '#sms';
    var cell  = '#cellphone';
    
    $(all).change(function(){
        var allChk = $(this).prop('checked');
        if(allChk){
            $(this).parents().find('input[type=checkbox]').prop('checked',true);
        }else{
            $(this).parents().find('input[type=checkbox]').prop('checked',false);
        }
    });
    $(all).parents().find('input[type=checkbox]').change(function(){
        var c01 = $(email).prop('checked');
        var c02 = $(sms).prop('checked');
        var c03 = $(cell).prop('checked');
        if(c01 && c02 && c03){
            $('#all').prop('checked',true);
        }else{
            $('#all').prop('checked',false);
        }
    });
});
                  
   