<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>회원가입 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/tNav.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
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
                        <a href="../customer/faq.php" class="mainNav">고객지원</a>
                        <ul class="subNav">
                            <li><a href="../customer/faq.php">FAQ</a></li>
                            <li><a href="../customer/notice.php">공지사항</a></li>
                            <li><a href="../customer/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li class="btn">
                        <a href="#reservation_site">예약조회</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div id="tNavImg">
            <h2>회원가입<span class="subEngTitle">JOIN</span></h2>
        </div>
        <div id="joinStep">
            <ul>
                <li class="active">STEP1<br>약관동의</li>
                <li class="active">STEP2<br>정보입력</li>
                <li class="active last">STEP3<br>가입완료</li>
            </ul>
        </div>
        <div id="subContents" class="join03">
            <h3>회원가입이 완료 되었습니다.</h3>
            <div class="btn">
                <a href="login.php" class="goLogin fl">로그인 하기</a>
                <a href="../index.php" class="goMain fl">메인페이지 이동</a>
            </div>
        </div>
       
        <footer>
            <div class="fTop">
                <ul class="fNav">
                    <li><a href="../customer/map.html">오시는 길</a></li>
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