<?php
    session_start();
    
    if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
    }else{
        $userid = "";
    }

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        $username = "";
    }

    include "./dbconn.php";
    $table = "notice";
    $mode = $_GET['mode'];
    
    if($mode == "modify"){
        $table = $_GET['table'];
        $num = $_GET['num'];
        $sql = "SELECT * FROM $table WHERE num=$num";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $item_subject = $row['subject'];
        $item_content = $row['content'];
		$item_file_0 = $row['file_name_0'];
		$item_file_1 = $row['file_name_1'];
		$copied_file_0 = $row['file_copied_0'];
		$copied_file_1 = $row['file_copied_1'];
    }
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>공지사항 글작성 페이지</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/notice.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="./write.js"></script>
    </head>
    <body>
        <header>
            <div class="hTop">
                <h1><a href="../index.php"><img src="../images/common/header_logo.png" alt="헤이븐호텔 로고"></a></h1>
                <? include "./topNav02.php"; ?>
                <div class="language">
                    <button>
                        <span class="text">KOREAN</span>
                        <span class="icon">▼</span>
                    </button>
                    <ul>
                        <li><a href="#eng">ENGLISH</a></li>
                        <li><a href="#chinese">CHINESE</a></li>
                        <li><a href="#japanese">JAPANESE</a></li>
                    </ul>
                </div>
            </div>
            <nav class="gnb">
                <ul>
                    <li>
                        <a href="../haven/haven.php" class="mainNav">호텔소개</a>
                        <ul class="subNav">
                            <li><a href="../haven/haven.php">호텔소개</a></li>
                            <li><a href="../haven/employment.php">채용정보</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../room/superior.php" class="mainNav">객실소개</a>
                        <ul class="subNav">
                            <li><a href="../room/superior.php">슈페리어</a></li>
                            <li><a href="../room/deluxe.php">디럭스</a></li>
                            <li><a href="../room/executive.php">이그제큐티브</a></li>
                            <li><a href="../room/suite.php">스위트</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../facility/cafe.php" class="mainNav">부대시설</a>
                        <ul class="subNav">
                            <li><a href="../facility/cafe.php">커피숍</a></li>
                            <li><a href="../facility/restraunt.php">레스토랑</a></li>
                            <li><a href="../facility/meetingroom.php">미팅룸</a></li>
                            <li><a href="../facility/fitnesscenter.php">피트니스센터</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../promotion/package.php" class="mainNav">프로모션</a>
                        <ul class="subNav">
                            <li><a href="../promotion/package.php">패키지</a></li>
                            <li><a href="../promotion/event.php">이벤트</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./faq.php" class="mainNav">고객지원</a>
                        <ul class="subNav">
                            <li><a href="./faq.php">FAQ</a></li>
                            <li><a href="./notice.php">공지사항</a></li>
                            <li><a href="./map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li class="btn">
                        <a href="#reservationSite">예약조회</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div id="mainImg" class="subMain05">
            <h2>고객지원<span class="subEngTitle">CUSTOMER</span></h2>
        </div>
        <nav id="subMenu">
           <ul class="column03">
               <li><a href="faq.php">FAQ</a></li>
               <li class="active"><a href="notice.php">공지사항</a></li>
               <li><a href="map.php">오시는 길</a></li>
           </ul>
        </nav>
        <div id="subContents" class="writeWrap">
            <div class="title">
                <h3>공지사항</h3>
            </div>
            <?php
                if($mode=="modify"){
            ?>
                <form name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data">
            <?php
                }else{
            ?>
                <form name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data">
            <?php
                }
            ?>
                <table>
                    <tr class="subject">
                        <th>제목</th>
                        <td colspan="4"><input type="text" name="subject" value="<?=$item_subject?>"></td>
                    </tr>
                    <tr class="content">
                        <th>내용</th>
                        <td colspan="4"><textarea name="content" cols="30" rows="15"><?=$item_content?></textarea></td>
                    </tr>
                    <tr class="file">
                        <th>파일1</th>
                        <td><input type="file" name="upfile[]"></td>
                        <th>파일2</th>
                        <td><input type="file" name="upfile[]"></td>
                    </tr>
                    <?php 	
                        if ($mode=="modify" && $item_file_0){
                    ?>
                        <div class="delete_ok"><?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제</div>
                    <?php
                        }
                    ?>
                    <?php	
                        if ($mode=="modify" && $item_file_1){
                    ?>
                        <div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제</div>
                    <?php
                        }
                    ?>
                </table>
                <div class="writeBtn fr">
                    <a href="#" class="save" onclick="check_input()">완료</a>
                    <a href="notice.php?table=<?=$table?>&page=<?=$page?>" class="goList">목록</a>
                </div>
            </form>
        </div>
    </body>
</html>