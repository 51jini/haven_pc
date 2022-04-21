var element_wrap = document.getElementById('postBox');

function foldDaumPostcode() {
    
    element_wrap.style.display = 'none';
}

function sample3_execDaumPostcode() {
    // 현재 scroll 위치를 저장해놓는다.
    var currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
    new daum.Postcode({
    oncomplete: function(data) {
    
    var addr = ''; 
    var extraAddr = ''; 

 
    if (data.userSelectedType === 'R') { 
    addr = data.roadAddress;
    } else { 
    addr = data.jibunAddress;
    }

    if(data.userSelectedType === 'R'){
  
    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
        extraAddr += data.bname;
    }
   
    if(data.buildingName !== '' && data.apartment === 'Y'){
        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
    }
    
    if(extraAddr !== ''){
        extraAddr = ' (' + extraAddr + ')';
    }
        
    document.getElementById("extraAddr").value = extraAddr;

    } else {
    document.getElementById("extraAddr").value = '';
    }

    document.getElementById('postcode').value = data.zonecode;
    document.getElementById("addr").value = addr;
    // 커서를 상세주소 필드로 이동한다.
    document.getElementById("detailAddr").focus();

    element_wrap.style.display = 'none';

    document.body.scrollTop = currentScroll;
    },
    onresize : function(size) {
    element_wrap.style.height = size.height+'px';
    },
    width : '100%',
    height : '100%'
    }).embed(element_wrap);

    element_wrap.style.display = 'block';
}