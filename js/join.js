function check_id(){
    window.open("check_id.php?id=" + document.joinForm.id.value,
    "IDcheck",
    "left=600,top=150,width=300,height=160,scrollbars=no,resizable=yes");
}

$(document).ready(function(){
    $('#joinForm').submit(function(e){
        e.preventDefault();
    });
});

function check_input(){  
    if(!document.joinForm.id.value){
        alert("아이디를 입력하세요");    
        document.joinForm.id.focus();
        return;
    }

    if(!document.joinForm.pass.value){
        alert("비밀번호를 입력하세요");    
        document.joinForm.pass.focus();
        return;
    }

    if(!document.joinForm.passConfirm.value){
        alert("비밀번호확인을 입력하세요");    
        document.joinForm.passConfirm.focus();
        return;
    }

    if (!document.joinForm.korName.value){
        alert("이름을 입력하세요");    
        document.joinForm.korName.focus();
        return;
    }
    
    if(document.getElementById('gBoxText').textContent == "선택"){
        alert("성별을 선택해주세요");
        document.getElementById('gBoxBtn').focus();
        return;
    }
    
    if(document.getElementById('yBoxText').textContent == "년"){
        alert("년도를 선택해주세요");
        document.getElementById('yBoxBtn').focus();
        return;
    }
    
    if(document.getElementById('mBoxText').textContent == "월"){
        alert("월을 선택해주세요");
        document.getElementById('mBoxBtn').focus();
        return;
    }
    
    if(document.getElementById('dBoxText').textContent == "일"){
        alert("일을 선택해주세요");
        document.getElementById('dBoxBtn').focus();
        return;
    }

    if(document.getElementById('fPhoneText').textContent == "선택" || !document.joinForm.midPhone.value || !document.joinForm.lastPhone.value ){
        alert("휴대폰 번호를 입력하세요");    
        document.getElementById('fPhoneBtn').focus();
        return;
    }
    
    if (!document.joinForm.email.value){
        alert("이메일을 입력하세요");    
        document.joinForm.email.focus();
        return;
    }

    if(document.joinForm.pass.value != document.joinForm.passConfirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
        document.joinForm.pass.focus();
        document.joinForm.pass.select();
        return;
    }
    
    var gBoxText = document.getElementById('gBoxText').textContent;
    var yBoxText = document.getElementById('yBoxText').textContent;
    var mBoxText = document.getElementById('mBoxText').textContent;
    var dBoxText = document.getElementById('dBoxText').textContent;
    var fPhoneText = document.getElementById('fPhoneText').textContent;
    
    document.joinForm.gBoxText.value = gBoxText;
    document.joinForm.yBoxText.value = yBoxText;
    document.joinForm.mBoxText.value = mBoxText;
    document.joinForm.dBoxText.value = dBoxText;
    document.joinForm.fPhoneText.value = fPhoneText;
    
    
    
    document.joinForm.submit();
    
}

