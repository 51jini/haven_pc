<meta charset="utf-8">
<?
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $korName = $_POST["korName"];
    $gender = $_POST["gBoxText"];

    $yBoxText = $_POST["yBoxText"];
    $mBoxText = $_POST["mBoxText"];
    $dBoxText = $_POST["dBoxText"];

    $engName1 = $_POST["engNameF"];
    $engName2 = $_POST["engNameL"];

    $fPhoneText = $_POST["fPhoneText"];
    $midPhone = $_POST["midPhone"];
    $lastPhone = $_POST["lastPhone"];

    $postcode = $_POST["postcode"];
    $addr = $_POST["addr"];
    $detailAddr = $_POST["detailAddr"];
    $extraAddr = $_POST["extraAddr"];
    
    $email = $_POST["email"];
    $marketing = $_POST["marketing"];

    $birth = $yBoxText.$mBoxText.$dBoxText;
    $engName = $engName1.$engName2;
    $hp = $fPhoneText."-".$midPhone."-".$lastPhone;
    $address = $postcode."&nbsp;".$addr."&nbsp;".$detailAddr.$extraAddr;

    $regist_day = date("Y-m-d (H:i)");

    $ip = $REMOTE_ADDR; 

    include "./dbconn.php";

    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($connect,$sql);
    $exist_id = mysqli_num_rows($result);

    if($exist_id) {
        echo("
            <script>
                window.alert('해당 아이디가 존재합니다.')
                history.go(-1)
            </script>
        ");
        exit;
    }else{ 
        $sql = "INSERT INTO member(id, pass, name, gender, birth, engName, hp, address, email, marketing, regist_day)";
        $sql .= "VALUES('$id', '$pass', '$korName', '$gender', '$birth', '$engName', '$hp', '$address', '$email', '$marketing', '$regist_day')";

        mysqli_query($connect, $sql);
        echo $sql;
    }

    mysqli_close($connect);
    echo "
        <script>
            location.href = './join03.php';
        </script>
    ";
?>

   
