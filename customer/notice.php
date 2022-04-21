<?php
    session_start();
    $table = "notice";
    
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
        <?php
            include "./dbconn.php";
        
            $scale = 10;
        
            $mode = $_GET['mode'];
            $search = $_POST['search'];
            $find = $_POST['find'];
            
            if($mode == "search"){
                if(!$search){
                    echo "
                        <script>
                            window.alert('검색할 단어를 입력해주세요');
                            history.go(-1);
                        </script>
                    ";
                    exit;
                }
                $sql = "SELECT * FROM $table WHERE $find LIKE '%$search%' ORDER BY num DESC";
            }else{
                $sql = "SELECT * FROM $table ORDER BY num DESC";
            }

            $result = mysqli_query($connect,$sql);
            
            $total_record = mysqli_num_rows($result);
        
            if($total_record % $scale == 0){ 
                $total_page = floor($total_record/$scale);
            }else{ 
                $total_page = floor($total_record/$scale) + 1;
            }
    
            if (isset($_GET["page"])){ 
                $page = $_GET["page"]; 
            }else{
                $page = 1;
            }
        
            if($page == 0){
                $page = 1;
            }
        
            $start = ($page - 1) * $scale;
            $number = $total_record - $start;
        ?>
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
           <div class="noticeWrap">
               <div class="nTitle">
                   <ul>
                       <li class="nTitle01">번호</li>
                       <li class="nTitle02">제목</li>
                       <li class="nTitle03">등록일</li>
                       <li class="nTitle04">조회수</li>
                   </ul>
               </div>
               <div class="nContent">
                    <?php
                        for($i=$start;$i<$start+$scale && $i<$total_record;$i++){
                            mysqli_data_seek($result,$i);
               
                            $row = mysqli_fetch_assoc($result);
               
                            $item_num = $row['num'];
                            $item_subject = str_replace(" ","&nbsp;",$row['subject']);
                            $item_hit = $row['hit'];
                            $item_date = $row['regist_day'];
                            $item_date = substr($item_date,0,10);
                    ?>
                    <ul class="nItem">
                        <li class="nItem01"><?= $number ?></li>
                        <li class="nItem02"><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></li>
                        <li class="nItem03"><?= $item_date ?></li>
                        <li class="nItem04"><?= $item_hit ?></li>
                    </ul>
                    <?php
                            $number--;
                        }
                    ?>
               </div>
           </div>
           <div class="pageNum">
               <?php
                    for($i=1;$i<=$total_page;$i++){
                        if($page == $i){
                            echo "<b>$i</b>";
                        }else{
                             echo "<a href='notice.php?table=$table&page=$i'> $i </a>";
                        }
                    }
                ?>
           </div>
           <ul class="pageBtn fl">
               <a href="notice.php?table=<?=$table?>&page=<?=$page?>">목록</a>
               <? 
                    if($userid == "admin"){
                ?>
                    <a href="write_form.php?table=<?=$table?>&page=<?=$page?>">글쓰기</a>
                <? } ?>
           </ul>
           <form action="notice.php?table=<?=$table?>&mode=search" method="post" name="boardForm">
               <div id="noticeSearch">
                   <div class="nSearch fl">
                       <select name="find">
                           <option value="subject">제목</option>
                           <option value="content">내용</option>
                       </select>
                   </div>
                   <input type="text" name="search" id="search">
                   <label for="search" class="away">공지사항 검색 상자</label>
                   <input type="button" name="searchBtn" id="searchBtn" value="검색">
                   <label for="searchBtn" class="away">검색버튼</label>
               </div>
           </form>
       </div>
       
        <footer>
            <div class="fTop">
                <ul class="fNav">
                    <li><a href="../customer/map.php">오시는 길</a></li>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보취급방침</a></li>
                    <li><a href="#">이메일무단수집거부</a></li>
                    <li class="last"><a href="#">영상정보처리기기 운영·관리 방침</a></li>
                </ul>
                <div class="familySite">
                    <button>
                        <span class="text">Family Site</span>
                        <span class="icon">▼</span>
                    </button>
                    <ul>
                        <li><a href="https://www.crownparkhotel.co.kr/" target="_blank">크라운 하버 호텔 서울</a></li>
                        <li><a href="http://www.jejucrowncc.co.kr/" target="_blank">크라운 컨트리 클럽</a></li>
                        <li><a href="http://www.ikef.or.kr/" target="_blank">관정 이종환 교육재단</a></li>
                    </ul>
                </div>
            </div>
            <div class="fBottom">
                <h1><img src="../images/common/footer_logo.png" alt="헤이븐호텔 로고"></h1>
                <p class="text">
                    <span class="address">
                        부산광역시 중구 중앙대로 114 | TEL 000 – 000 – 0000 FAX 000 – 000 – 0000 | E-mail ooo@naver.com <br> 
                        대표이사 박진희 | 사업자등록번호 000 – 00 – 00000 | 통신판매업신고번호 제0000 – 부산중구 – 0000호
                    </span>
                    <span class="copy">&copy; 2020 HAVEN HOTEL ALL RIGHTS RESERVED.</span>
                </p>
                <ul class="sns">
                    <li><a href="https://ko-kr.facebook.com/" target="_blank" title="헤이븐호텔 페이스북"><img src="../images/common/footer_sns_icon_01.png" alt="페이스북 아이콘"></a></li>
                    <li class="second"><a href="https://www.instagram.com/accounts/login/?hl=ko" target="_blank" title="헤이븐호텔 트위터"><img src="../images/common/footer_sns_icon_02.png" alt="트위터 아이콘"></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank" title="헤이븐호텔 인스타그램"><img src="../images/common/footer_sns_icon_03.png" alt="인스타그램 아이콘"></a></li>
                    <li><a href="https://twitter.com/?lang=ko" target="_blank" title="헤이븐호텔 유튜브"><img src="../images/common/footer_sns_icon_04.png" alt="유튜브 아이콘"></a></li>
                </ul>
            </div>
        </footer>
        <div class="scrollBtn"><a href="#">스크롤탑버튼</a></div>
    </body>
</html>