//글쓰기폼 글저장버튼
function check_input(){
    if(!document.board_form.subject.value){
        alert("제목을 입력하세요!");    
        document.board_form.subject.focus();
        return;
    }

    if(!document.board_form.content.value){
        alert("내용을 입력하세요!");    
        document.board_form.content.focus();
        return;
    }
    
    document.board_form.submit();
}

//삭제버튼 클릭 시
$(document).ready(function(){
    $('#delBtn').click(function(e){
        e.preventDefault();
        
        var href = $(this).attr('href');
        
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
            document.location.href = href;
        }
    });
});