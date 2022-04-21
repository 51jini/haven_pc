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
    
    if(!isset($_SESSION['LAST_ACTIVITY'])) {
        // initiate value
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    if(time() - $_SESSION['LAST_ACTIVITY'] > 1800) {
        // last activity is more than 10 minutes ago
        session_destroy();
    }else{
        $_SESSION['LAST_ACTIVITY'] = time();
    }
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>HAVEN HOTEL</title>
        <link rel="shortcut icon" href="images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>
        <script src="js/mobile.js"></script>
    </head>
    <body>
        <div class="popupWrap">
            <div class="popup">
                <div class="pNotice">
                    <span class="title">NOTICE</span>
                    <p>
                        본 사이트는 상업적 목적이 아닌<br>
                        <span class="red">개인 포트폴리오</span> 용도로 만들어졌습니다.<br>
                        홈페이지의 일부 내용과 이미지 등은<br>
                        그 <span class="red">출처가 따로 있음</span>을 밝힙니다.<br>
                        본 사이트는 <span class="red">HTML5와 CSS3</span>를 기준으로<br>
                        크롬, 사파리, 오페라, 파이어폭스, IE10이상의<br>
                        브라우저에 맞춘 홈페이지입니다.
                    </p>
                </div>
                <div class="pMobile">
                    <span class="title">MOBILE</span>
                    <img src="images/common/QRcode.png" class="fl" alt="모바일QR">
                    <p>
                        QR코드를 스캔하시면<br>
                        모바일버전으로 이동하실 수 있습니다.
                    </p>
                </div>
                <div class="pClose">
                    <a href="#closePopup" class="tClose">오늘 하루 보이지 않기</a>
                    <a href="#closePopup" class="eClose">[CLOSE]</a>
                </div>
            </div>
        </div>
        <header id="header">
            <div class="hTop">
                <h1><a href="index.php"><img src="images/common/header_logo.png" alt="헤이븐호텔 로고"></a></h1>
                <? include "./tnav/topNav01.php"; ?>
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
                        <a href="haven/haven.php" class="mainNav">호텔소개</a>
                        <ul class="subNav">
                            <li><a href="haven/haven.php">호텔소개</a></li>
                            <li><a href="haven/employment.php">채용정보</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="room/superior.php" class="mainNav">객실소개</a>
                        <ul class="subNav">
                            <li><a href="room/superior.php">슈페리어</a></li>
                            <li><a href="room/deluxe.php">디럭스</a></li>
                            <li><a href="room/executive.php">이그제큐티브</a></li>
                            <li><a href="room/suite.php">스위트</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="facility/cafe.php" class="mainNav">부대시설</a>
                        <ul class="subNav">
                            <li><a href="facility/cafe.php">커피숍</a></li>
                            <li><a href="facility/restraunt.php">레스토랑</a></li>
                            <li><a href="facility/meetingroom.php">미팅룸</a></li>
                            <li><a href="facility/fitnesscenter.php">피트니스센터</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="promotion/package.php" class="mainNav">프로모션</a>
                        <ul class="subNav">
                            <li><a href="promotion/package.php">패키지</a></li>
                            <li><a href="promotion/event.php">이벤트</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="customer/faq.php" class="mainNav">고객지원</a>
                        <ul class="subNav">
                            <li><a href="customer/faq.php">FAQ</a></li>
                            <li><a href="customer/notice.php">공지사항</a></li>
                            <li><a href="customer/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li class="btn">
                        <a href="#reservation_site">예약조회</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="mSlider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms01">
                            <div class="tWrap">
                                <span class="title">HAVEN HOTEL BUSAN</span>
                                <span class="sub">Home away from Home</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms02">
                            <div class="tWrap">
                                <span class="title">HAVEN RESTRAUNT - 라 스뗄라</span>
                                <span class="sub long">디너 패키지 Dinner Package 2020.7.3 ~ 2020.8.31</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms03">
                            <div class="tWrap">
                                <span class="title">HAVEN - 프레지덴셜 스위트</span>
                                <span class="sub short">고품격 휴식과 힐링을 경험할 수 있는 가장 이상적인 공간</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="progress">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
        <div id="room">
            <span class="bgBox"></span>
            <div class="title">
                <h2>ROOM</h2>
                <span class="sub">
                    헤이븐 호텔만의 하버뷰부터 시내뷰까지<br>
                    다양한 객실에서 낭만을 즐겨보세요.
               </span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/main/room_bn_01.jpg" alt="슈페리어룸 이미지">
                        <a href="room/superior.php" class="text" title="자세히보기">
                            <h3>슈페리어</h3>
                            <p>
                                아늑한 인테리어, 취사가 가능한 미니 키친 시설, 특급 서비스가 겸비된<br>
                                슈페리어 객실은 실속형 여행객은 물론 장기 투숙객에게 안성맞춤인 객실입니다.
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main/room_bn_02.jpg" alt="디럭스룸 이미지">
                        <a href="room/deluxe.php" class="text" title="자세히보기">
                            <h3>디럭스</h3>
                            <p>
                                모던한 분위기, 전망을 고려한 감각적인 인테리어, 몸을 감싸는듯한<br>
                                편안한 침구류는 당신의 여정 동안 최상의 휴식을 선사합니다.
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                       <img src="images/main/room_bn_03.jpg" alt="이그제큐티브룸 이미지">
                        <a href="room/executive.php" class="text" title="자세히보기">
                           <h3>이그제큐티브</h3>
                            <p>
                                탁트인 전망, 독서 등 세심한 배려가 더해진 이그제큐티브 객실에서는<br>
                                효율적인 비즈니스를 위한 맞춤 서비스를 경험하실 수 있습니다.
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main/room_bn_04.jpg" alt="스위트룸 이미지">
                        <a href="room/suite.php" class="text" title="자세히보기">
                           <h3>스위트</h3>
                            <p>
                                특별한 날, 달콤한 분위기를 즐기고픈 분들에게<br>
                                합리적인 가격으로 풍성한 만족스러움을 안겨줄 것입니다.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div id="facility">
            <span class="bgBox"></span>
            <div class="title">
                <h2>FACILITY</h2>
                <span class="sub">헤이븐 호텔의 여러 시설을 즐겨보세요.</span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/main/facility_bn_01.jpg" alt="커피숍 이미지">
                        <a href="facility/cafe.php" class="text" title="자세히보기">
                            <h3>커피숍</h3>
                            <p>
                                호텔에서 직접 운영하는 프리미엄 디저트 카페
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main/facility_bn_02.jpg" alt="레스토랑 이미지">
                        <a href="facility/restraunt.php" class="text" title="자세히보기">
                            <h3>레스토랑</h3>
                            <p>
                                조식과 중식에는 뷔페 레스토랑, 저녁에는 비스트로로<br>
                                변신하는 시간대별 맞춤 서비스 공간
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main/facility_bn_03.jpg" alt="미팅룸 이미지">
                        <a href="facility/meetingroom.php" class="text" title="자세히보기">
                            <h3>미팅룸</h3>
                            <p>
                                각종 미팅 및 연회를 위한 성공적인 비즈니스 공간
                            </p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main/facility_bn_04.jpg" alt="피트니스센터 이미지">
                        <a href="facility/fitnesscenter.php" class="text" title="자세히보기">
                            <h3>피트니스센터</h3>
                            <p>
                                투숙객이라면 누구나 시간 제약 없이 무료 이용 가능
                            </p>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div id="promotion">
            <div class="title">
                    <h2>PROMOTION</h2>
                    <span class="sub">헤이븐 호텔의 다양한 이벤트 및 패키지를 만나보세요.</span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bnBox">
                            <div class="bnInner">
                                <div class="bnImg">
                                    <img src="images/main/promotion_bn_01.jpg" alt="프로모션배너이미지01">
                                </div>
                                <div class="content">
                                    <span class="flag">EVENT</span>
                                    <h3>수목돌풍 이벤트</h3>
                                    <p class="txt">
                                        레스토랑 라 스뗄라 코로나19 극복을 위한 주중 점심뷔페 ‘수목돌풍’ 이벤트! 수요일에 이어 목요일도 9,900원! 어려운 시기일수록 점심은 든든하게 드세요
                                    </p>
                                    <a href="promotion/event.php" class="moreBtn">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bnBox">
                            <div class="bnInner">
                                <div class="bnImg">
                                    <img src="images/main/promotion_bn_02.jpg" alt="프로모션배너이미지02">
                                </div>
                                <div class="content">
                                    <span class="flag">PACKAGE</span>
                                    <h3>헤이븐 베이직 패키지</h3>
                                    <p class="txt">
                                        헤이븐만의 특별한 베이직 패키지! 
                                        지친 일상 속 사랑하는 사람과 색다른 전망을 바라보며, 여유로운 휴식을 즐겨보세요.
                                    </p>
                                    <a href="promotion/event.php" class="moreBtn">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bnBox">
                            <div class="bnInner">
                                <div class="bnImg">
                                    <img src="images/main/promotion_bn_03.jpg" alt="프로모션배너이미지03">
                                </div>
                                <div class="content">
                                    <span class="flag">PACKAGE</span>
                                    <h3>굿모닝 패키지</h3>
                                    <p class="txt">
                                        헤이븐 굿모닝 패키지 (Good Morning Package)!
                                        슈페리어 객실과 간단한 브런치 세트로 구성된 알찬 패키지로 특별한 여행을 떠나보세요.
                                    </p>
                                    <a href="promotion/event.php" class="moreBtn">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bnBox">
                            <div class="bnInner">
                                <div class="bnImg">
                                    <img src="images/main/promotion_bn_04.jpg" alt="프로모션배너이미지04">
                                </div>
                                <div class="content">
                                    <span class="flag">PACKAGE</span>
                                    <h3>세이프 스테이 패키지</h3>
                                    <p class="txt">
                                        이불 밖은 위험해? 철저히 관리되는 호텔은 안.전.해! 안심 호텔에서의 편안한 휴식을 위해 24시간 스테이와 하버전망 무료 업그레이드, 웰컴 드링크, 99.9% 항균티슈, 1+1 할인 이벤트 이 모든 혜택을 만나 보실 수 있습니다.
                                    </p>
                                    <a href="promotion/event.php" class="moreBtn">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bnBox">
                            <div class="bnInner">
                                <div class="bnImg">
                                    <img src="images/main/promotion_bn_05.jpg" alt="프로모션배너이미지05">
                                </div>
                                <div class="content">
                                    <span class="flag">PACKAGE</span>
                                    <h3>프라이빗 파티룸 패키지</h3>
                                    <p class="txt">
                                        친구와 함께 특별한 날을 기념하는 파티를 호텔에서 즐긴다! 친구들과 함께하는 파티, 합리적인 가격으로 파티에 필요한 구성품과 푸짐한 서비스를 담은 패키지로 특별한 하루를 보내세요!
                                    </p>
                                    <a href="promotion/event.php" class="moreBtn">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div id="notice">
            <div class="title">
                <h2>NOTICE</h2>
                <span class="sub">헤이븐 호텔의 소식을 전해드립니다.</span>
                <a href="customer/notice.php" title="공지사항 더보기"><img src="images/main/notice_more_btn.png" alt="더보기 버튼"></a>
            </div>
            <ul>
                <li class="notice01">
                    <a href="customer/notice.php">
                        <img src="images/main/notice_bn_01.gif" alt="공지사항 이미지01">
                        <div class="txt">
                            <h3>[Notice] 레스토랑 라 스뗄라 단체 예약 프로모션</h3>
                            <p>
                                모임/회식/행사 Special Promotion
                                특급 셰프가 선보이는 다채로운 메뉴
                                호텔 디너뷔페 30,000원~
                                - 20인이상
                                - 메뉴 및 금액 조정 가능
                                - 사전예약 필수
                            </p>
                            <span class="date">2020-07-06</span>
                        </div>
                        <span class="tLine"></span>
                        <span class="bLine"></span>
                        <span class="lLine"></span>
                        <span class="rLine"></span>
                    </a>
                </li>
                <li class="notice02">
                    <a href="customer/notice.php">
                        <img src="images/main/notice_bn_02.jpg" alt="공지사항 이미지02">
                        <div class="txt">                           
                            <h3>[Notice] 헤이븐호텔 제휴업체 정보</h3>
                            <p>
                                헤이븐호텔 고객님께 드리는 제휴업체 특.별.할.인
                            </p>
                            <span class="date">2020-07-03</span>
                        </div>
                        <span class="tLine"></span>
                        <span class="bLine"></span>
                        <span class="lLine"></span>
                        <span class="rLine"></span>
                    </a>
                </li>
                <li class="notice03">
                    <a href="customer/notice.php">
                        <img src="images/main/notice_bn_03.jpg" alt="공지사항 이미지03">
                        <div class="txt">   
                            <h3>[Notice] 호텔 멤버십 「THE HAVEN 더 헤이븐」 개편 기념 회원 모집</h3>
                            <p>
                                헤이븐 호텔 멤버십 「THE HAVEN 더 헤이븐」이 더욱 알차게 채워진 구성으로 갱신 및 신규 회원을 모집합니다. 스마트한 가격으로 필요한 회원 전용 혜택으로만 구성된 「THE HAVEN 더 헤이븐」 더욱 특별한 당신을 위한「THE HAVEN PLATINUM 더 헤이븐 플래티넘」은 여가와 비즈니스를 위한 최상의 선택입니다.
                            </p>
                            <span class="date">2020-06-01</span>
                        </div>
                        <span class="tLine"></span>
                        <span class="bLine"></span>
                        <span class="lLine"></span>
                        <span class="rLine"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="newsletter">
            <div class="wrap">
                <div class="title">
                    <h2>NEWS LETTER</h2>
                    <span class="sub">헤이븐 호텔의 다양한 소식과 혜택을 받아보세요!</span>
                </div>
                <form action="#">
                    <fieldset>
                        <legend class="away">이메일 입력</legend>
                        <input type="text" id="email" placeholder="이메일을 입력해주세요.">
                        <label for="email" class="away">이메일 입력창</label>
                        <button>구독신청</button>
                    </fieldset>
                    <fieldset class="check">
                        <legend class="away">개인정보 수집 및 이용 동의</legend>
                        <input type="checkbox" id="chkBox">
                        <label for="chkBox">뉴스레터 발송을 위한 개인 정보 수집 및 이용에 동의합니다.</label>
                    </fieldset>
                </form>
                
            </div>
        </div>
        <footer>
            <div class="fTop">
                <ul class="fNav">
                    <li><a href="customer/map.php">오시는 길</a></li>
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
                <h1><img src="images/common/footer_logo.png" alt="헤이븐호텔 로고"></h1>
                <p class="text">
                    <span class="address">
                        부산광역시 중구 중앙대로 114 | TEL 000 – 000 – 0000 FAX 000 – 000 – 0000 | E-mail haven@havenhotel.com <br> 
                        대표이사 박진희 | 사업자등록번호 000 – 00 – 00000 | 통신판매업신고번호 제0000 – 부산중구 – 0000호
                    </span>
                    <span class="copy">&copy; 2020 HAVEN HOTEL ALL RIGHTS RESERVED.</span>
                </p>
                <ul class="sns">
                    <li><a href="https://ko-kr.facebook.com/" target="_blank" title="헤이븐호텔 페이스북"><img src="images/common/footer_sns_icon_01.png" alt="페이스북 아이콘"></a></li>
                    <li class="second"><a href="https://www.instagram.com/accounts/login/?hl=ko" target="_blank" title="헤이븐호텔 트위터"><img src="images/common/footer_sns_icon_02.png" alt="트위터 아이콘"></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank" title="헤이븐호텔 인스타그램"><img src="images/common/footer_sns_icon_03.png" alt="인스타그램 아이콘"></a></li>
                    <li><a href="https://twitter.com/?lang=ko" target="_blank" title="헤이븐호텔 유튜브"><img src="images/common/footer_sns_icon_04.png" alt="유튜브 아이콘"></a></li>
                </ul>
            </div>
            <div class="mobileBtn"><a href="http://mhaven1.dothome.co.kr">모바일버전</a></div>
        </footer>
        <div class="scrollBtn"><a href="#">스크롤탑버튼</a></div>
    </body>
</html>