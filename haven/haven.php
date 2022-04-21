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
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>호텔소개 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
    </head>
    <body>
        <header>
            <div class="hTop">
                <h1><a href="../index.php"><img src="../images/common/header_logo.png" alt="헤이븐호텔 로고"></a></h1>
                <? include "../tnav/topNav02.php"; ?>
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
                        <a href="haven.php" class="mainNav">호텔소개</a>
                        <ul class="subNav">
                            <li><a href="haven.php">호텔소개</a></li>
                            <li><a href="employment.php">채용정보</a></li>
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
                        <a href="../customer/faq.php" class="mainNav">고객지원</a>
                        <ul class="subNav">
                            <li><a href="../customer/faq.php">FAQ</a></li>
                            <li><a href="../customer/notice.php">공지사항</a></li>
                            <li><a href="../customer/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li class="btn">
                        <a href="#reservationSite">예약조회</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div id="mainImg" class="subMain01">
            <h2>호텔소개<span class="subEngTitle">ABOUT HAVEN</span></h2>
        </div>
       <nav id="subMenu">
           <ul class="column02">
               <li class="active"><a href="haven.php">호텔소개</a></li>
               <li><a href="employment.php">채용정보</a></li>
           </ul>
       </nav>
       <div id="subContents" class="haven">
           <h3>호텔소개</h3>
           <div class="haven01">
               <img src="../images/haven/haven_bn_01.jpg" class="fl" alt="호텔소개이미지01">
               <div class="tWrap fr">
                   <p class="tit">부산 원도심 최대 규모 프리미엄 호텔<br><span class="bold">HAVEN HOTEL</span>은</p>
                   <p class="first">
                        북항 재개발, 원도심 재생사업으로<br>
                        다시금 각광받고 있는<br>
                        부산 중구 중앙동에 위치하고 있습니다.
                   </p>
                   <p class="last">
                        지하 4층, 지상 27층, 500개의 객실로 구성되어있으며,<br>
                        아치형 디자인과 최고급 자연석으로<br>
                        꾸며진 현대식 건물입니다.
                   </p>
               </div>
           </div>
           <div class="haven02">
               <div class="tWrap fl">
                   <h4>Home away form Home</h4>
                   <p class="first">
                        호텔 내부는「집과 같은 편안함 Home away from Home」을<br>
                        느낄 수 있도록 따뜻한 느낌의 골드와 브라운 컬러를 사용하였으며,
                   </p>
                   <p class="last">
                        실속형 여행객을 비롯하여 가족, 연인, 비즈니스 고객들을 위한<br>
                        8가지의 다양한 객실 타입이 준비되어 있습니다.
                   </p>
               </div>
               <img src="../images/haven/haven_bn_02.jpg" class="fr" alt="호텔소개이미지02">
           </div>
           <div class="haven03">
               <div class="bg">
                   <div class="wrap">
                       <img src="../images/haven/haven_bn_03.jpg" class="forward" alt="호텔소개이미지03">
                       <p class="white fr">
                            저희 헤이븐 호텔은 부산역,여객터미널,김해공항과<br>
                            인접하여 국내외에서의 접근이 매우 용이하며,<br>
                            다양한 주변 환경으로 관광, 쇼핑, 문화, 역사 등<br>
                            부산의 모든 것을 경험할 수 있습니다.
                       </p>
                       <img src="../images/haven/haven_bn_04.jpg" class="back" alt="호텔소개이미지04">
                   </div>
               </div>
           </div>
           <div class="haven04">
               <img src="../images/haven/haven_bn_05.jpg" class="fl" alt="호텔소개이미지05">
               <div class="tWrap fr">
                   <h4>Bridge of Bridge</h4>
                   <div class="pWrap">
                       <p class="first">
                            해운대, 광안리와 같은 동남권 관광단지는<br>
                            '브릿지 오브 브릿지 Bridge of Bridge' 부산의 대표적인 다리를 통해<br>
                            환상적인 오션 라인을 보며 보다 더 가깝게 만날 수 있습니다.
                       </p>
                       <p class="fr">
                            관정 이종환 교육재단에서 출자한 호텔로 설립자의 뜻에 따라<br>
                            수익금 전액은 장학 사업의 재원으로 사용되어 단순 호텔 사업을 넘어<br>
                            사회적으로 공헌하는 진정한 노블레스 오블리주를 실현하고자 합니다.
                       </p>
                   </div>
               </div>
           </div>
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