<?php
    session_start();
?>
<meta charset="utf-8">
<?php
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    if(!$id){
        echo "
            <script>
                window.alert('아이디를 입력하세요.');
                history.go(-1);
            </script>
        ";
        exit;
    }

    if(!$pass){
        echo "
            <script>
                window.alert('비밀번호를 입력하세요.');
                history.go(-1);
            </script>
        ";
        exit;
    }

    include "./dbconn.php";

    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($connect,$sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match){
        echo "
            <script>
                window.alert('등록되지 않은 아이디입니다.');
                history.go(-1);
            </script>
        ";
    }else{ 
        $row = mysqli_fetch_assoc($result);
        
        $db_pass = $row['pass']; 
        
        if($pass != $db_pass){
            echo "
                <script>
                    window.alert('비밀번호가 틀립니다.');
                    history.go(-1);
                </script>
            ";
        }else{ 
            $userid = $row['id'];
		    $username = $row['name'];
		    
            $_SESSION['userid'] = $userid;
            $_SESSION['username'] = $username;
            
            echo "
                <script>
                    location.href = '../index.php';
                </script>
            ";
        }
    }
?>