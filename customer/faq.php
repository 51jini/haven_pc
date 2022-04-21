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
        <title>FAQ | HAVEN HOTEL</title>
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
        <? include "./inquiry.php"; ?>
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
               <li class="active"><a href="faq.php">FAQ</a></li>
               <li><a href="notice.php">공지사항</a></li>
               <li><a href="map.php">오시는 길</a></li>
           </ul>
       </nav>
       <div id="subContents" class="faq">
           <div class="title">
               <h3>FAQ</h3>
               <p>자주 문의하는 질문에 대한 답변을 확인하실 수 있습니다.</p>
           </div>
           <a href="#inquiry" class="inquiry">1:1 문의하기</a>
           <dl class="faqList">
               <dt><a href="#faq01"><span class="q">Q</span>체크인, 체크아웃 시간은 어떻게 되나요?</a></dt>
               <dd>
                   헤이븐 호텔의 체크인 시간은  오후 15시, 체크아웃 시간은 익일 오후 12시 입니다.
               </dd>
               <dt><a href="#faq02"><span class="q">Q</span>조기 체크인 경우나 체크아웃 연장일 경우 요금 지불이 추가되나요?</a></dt>
               <dd>
                    호텔의 체크인 시간은 15시, 체크아웃은 12시입니다.<br>
                    조기 체크인, 체크아웃 연장의 경우 별도의 추가요금 지불이 있습니다.<br>
                    투숙 점유율이나 시간에 따라 다소 차이가 있으니 사전에 확인 부탁드립니다.
               </dd>
               <dt><a href="#faq03"><span class="q">Q</span>체크인, 체크아웃 전 짐 보관은 가능합니까?</a></dt>
               <dd>
                    체크인, 아웃 전 짐 보관 서비스는 벨데스크에서 가능합니다.<br>
                    먼저 투숙여부 확인 후에 짐을 보관해 드립니다. 짐 보관 후 보관증을 발부해 드리며,<br>
                    찾으실 때 가져오시면 확인 후 맡긴 짐을 찾으시면 됩니다.
               </dd>
               <dt><a href="#faq04"><span class="q">Q</span>체크인 전 혹은 체크아웃 후 부대시설 이용 가능한가요?</a></dt>
               <dd>
                   호텔 내 레스토랑과 커피숍은 자유롭게 이용이 가능합니다.
               </dd>
               <dt><a href="#faq05"><span class="q">Q</span>객실 내 최대 투숙 인원 규정이 어떻게 되나요?</a></dt>
               <dd>
                    한 객실 당 최대 성인 2인 &amp; 13세 이하 어린이 2인 또는 성인 3인 &amp; 13세 이하 어린이 1인까지 투숙 가능합니다.<br>
                    객실 패키지 별로 기준 인원이 상이하며, 기준 인원을 초과할 경우 추가 인원에 대한 요금이 부과됩니다.
               </dd>
               <dt><a href="#faq06"><span class="q">Q</span>객실에 두고 온 분실물은 어떻게 찾습니까?</a></dt>
               <dd>
                    고객 분실물은 호텔 하우스키핑에서 담당하고 있습니다.<br>
                    고객 분실물 관리 규정에 의하여 객실 습득물에 대해서는 6개월 보관 후 자동폐기 되고 있습니다.<br>
                    그러나 부패되기 쉬운 식품류는 1주일 보관 후 폐기하고 있습니다.<br>
                    분실물을 찾기 원하실 경우 객실이용고객님의 성함, 체크아웃 날짜, 객실번호를 알려주시면 확인 후 고객님께 연락을 드리고 있습니다.<br>
                    확인이 되면 고객님께서 직접 호텔에 방문하시거나 택배(수신자 부담)로 받으실 수 있습니다.
               </dd>
               <dt><a href="#faq07"><span class="q">Q</span>조식 이용시간과 요금을 알려주세요.</a></dt>
               <dd>
                    운영시간은 주중/주말 오전 6시 30분~오전 9시 30분이며, 이용요금은 성인 18,000원, 어린이 9,000원 입니다.<br>
                    (48개월부터 초등학생까지 어린이 요금, 중학생부터 성인요금 부과)
               </dd>
               <dt><a href="#faq08"><span class="q">Q</span>룸서비스 운영시간이 궁금합니다.</a></dt>
               <dd>
                   룸서비스 이용 시간 안내 : 모든 요일 13:00 ~ 1:00
               </dd>
               <dt><a href="#faq09"><span class="q">Q</span>패키지 상품 문의 및 객실 예약은 어떻게 하나요?</a></dt>
               <dd>
                    객실 예약실 000-000-0000 (운영시간 : 매일 09:00~18:00) 혹은 이메일 haven@havenhotel.com 을 통해 연락 주십시오.<br>
                    헤이븐호텔 공식 홈페이지 예약 시 아래의 URL을 이용하실 수 있습니다.<br>
                    <a href="#reservation">[홈페이지 예약]</a>
               </dd>
               <dt><a href="#faq10"><span class="q">Q</span>침대 이동(헐리웃베드) 가능한가요?</a></dt>
               <dd>
                   객실 내 안전사고 예방 및 호텔 자산 손상의 우려가 있어 가구의 재배치 혹은 이동은 어렵습니다.
               </dd>
           </dl>
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
                        부산광역시 중구 중앙대로 114 | TEL 000 – 000 – 0000 FAX 000 – 000 – 0000 | E-mail ooo@havenhotel.com <br> 
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