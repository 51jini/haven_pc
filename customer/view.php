<?php
    session_start();
    
    if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
    }else{
        $userid = "";
    }

    include "./dbconn.php";
    
    $num = $_GET['num'];
    $table = $_GET['table'];
    $page = $_GET['page'];

    $sql = "SELECT * FROM $table WHERE num=$num";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $item_num = $row['num'];
    $item_nick = $row['nick'];
	$item_hit = $row['hit'];

    $image_name[0]   = $row['file_name_0'];
	$image_name[1]   = $row['file_name_1'];

	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];

    $item_date    = $row['regist_day'];
	$item_subject = str_replace(" ", "&nbsp;", $row['subject']);

	$item_content = $row['content'];
    
    for($i=0; $i<2; $i++){
		if ($image_copied[$i]){
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);

			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785){
				$image_width[$i] = 785;
            }
		}else{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

    $new_hit = $item_hit + 1;
    $sql = "UPDATE $table SET hit=$new_hit WHERE num=$num";
    mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>공지사항 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/notice.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
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
        <div id="subContents" class="notice">
            <div class="title">
               <h3>공지사항</h3>
               <p>헤이븐호텔의 다양한 소식을 확인 해보세요.</p>
            </div>

            <div class="viewWrap">
                <div class="viewTitle">
                    <h5><?= $item_subject ?></h5>
                    <p><?= $item_date ?> | 조회 : <?= $item_hit ?></p>
                </div>
                <div class="viewContent">
                    <!--컨텐츠내용가져오기-->
                
                    <!--1. 이미지를 반복문으로 가져옴-->
                    <?php
                        for($i=0; $i<2; $i++){
                            if ($image_copied[$i]){
                                $img_name = $image_copied[$i];
                                $img_name = "./data/".$img_name;
                                $img_width = $image_width[$i];
                
                                echo "<img src='$img_name' width='$img_width'>"."<br><br>";
                            }
                        }
                    ?>
                
                    <!--2. 컨텐츠 내용 가져오기-->
                    <?= $item_content ?>
                </div>
            </div>
            <div class="viewBtn">
                <!--버튼-->

                <!--1. 목록버튼-->
                <a href="notice.php?table=<?=$table?>&page=<?=$page?>" class="fl">목록</a>

                <?php
                    if($userid="admin" || $userlevel==1 ){
                ?>

                <!--2. 수정버튼-->
                <a href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$item_num?>&page=<?=$page?>" class="fl">수정</a>&nbsp;

                <!--3. 삭제버튼-->
                <a href="delete.php?table=<?=$table?>&num=<?=$item_num?>" id="delBtn" class="fl">삭제</a>&nbsp;

                <?php
                    }
                ?>

                <!--4. 글쓰기버튼-->
                <?php
                    if($userid == "admin"){
                ?>
                    <a href="write_form.php?table=<?=$table?>" class="fl">글쓰기</a>
                <?php
                    }
                ?>

            </div>
        </div>
    </body>
</html>

