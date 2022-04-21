<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>아이디 중복체크</title>
        <link rel="stylesheet" href="../css/tNav.css">
    </head>
    <body>
        <div id="chkId">
            <h3>아이디 중복체크</h3>
            <?
                $id = $_GET["id"];
            
                if(!$id){
                    echo "아이디를 입력하세요.";
                }else{
                    include "./dbconn.php";
            
                    $sql = "SELECT * FROM member WHERE id='$id'";
            
                    $result = mysqli_query($connect, $sql);
                    $num_record = mysqli_num_rows($result);
            
                    if($num_record){
                        echo "아이디가 중복됩니다!<br>";
                        echo "다른 아이디를 사용하세요.<br>";
                    }else{
                        echo "사용가능한 아이디입니다.";
                    }
            
                    mysqli_close($connect);
                }
            ?>
            <div class="checkIdClose">
                <a href="#close" onclick="javascript:self.close()">닫기X</a>
            </div>
        </div>
    </body>
</html>
