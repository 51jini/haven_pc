$(document).ready(function(){
    var mobile_keys = new Array('iPhone','iPod','Android','BlackBerry','Windows Phone','Windows CE','LG','MOT','SAMSUNG','SonyEricsson','Nokia');
    
    if(document.URL.match('move_pc_screen=1')){
        mobile_keys = null;
        $(('.mobileBtn')).fadeIn(0);
    }
    
    for(var i in mobile_keys){
        if(navigator.userAgent.match(mobile_keys[i])){
            location.href = 'http://mhaven1.dothome.co.kr'
        }
    }
});