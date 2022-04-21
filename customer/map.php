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
        <title>오시는길 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/map.css">
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=e5b2ef46f848d9c29b26550a5019000b"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/map.js"></script>
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
               <li><a href="notice.php">공지사항</a></li>
               <li class="active"><a href="map.php">오시는 길</a></li>
           </ul>
        </nav>
        <div id="subContents">
            <h3>오시는 길</h3>
            <div id="map"></div>
            <script src="../js/map.js"></script>
            <div class="title">
                <h4>부산광역시 중구 중앙대로 114 (중앙동 4가 83-1) 우) 48938</h4>
                <ul>
                    <li>TEL&nbsp; 051-000-0000</li>
                    <li>FAX&nbsp; 051-000-0000</li>
                    <li>EMAIL&nbsp; haven@havenhotel.com</li>
                </ul>
            </div>
            <div class="tabMenu">
                <ul class="tabBtn">
                    <li><a href="#tabBtn01" class="active">자가용/택시</a></li>
                    <li><a href="#tabBtn02">대중교통</a></li>
                    <li><a href="#tabBtn03">공항 리무진</a></li>
                </ul>
                <div class="tabContentsWrap">
                    <div class="car">
                        <ul>
                            <li class="seoul">
                                <h5>서울방면</h5>
                                <img src="../images/customer/map_car_seoul.png" alt="서울방면루트">
                                <span class="txt01">중부(내륙)고속도로</span>
                                <span class="txt02">경부고속도로</span>
                                <span class="txt03">중앙고속도로</span>
                                <span class="txt04">백양터널</span>
                                <span class="txt05">수정터널</span>
                                <span class="txt06">충장대로</span>
                                <span class="txt07">중앙대로</span>
                                <span class="txt08">헤이븐호텔</span>
                           </li>
                            <li class="masan">
                               <h5>마산방면</h5>
                               <img src="../images/customer/map_car_masan.png" alt="마산방면루트">
                               <span class="txt01">남해제2고속도로</span>
                               <span class="txt02">사상IC</span>
                               <span class="txt03">가야대로</span>
                               <span class="txt04">학감대로</span>
                               <span class="txt05">구덕터널</span>
                               <span class="txt06">부산터널</span>
                               <span class="txt07">중앙대로</span>
                               <span class="txt08">헤이븐호텔</span>
                           </li>
                       </ul>
                   </div>
                   <div class="public">
                       <div class="subway">
                           <h5>지하철</h5>
                           <ul>
                               <li class="near">
                                   <p class="tit">· 인근역 → 호텔</p>
                                   <img src="../images/customer/map_public_near.png" alt="인근역루트">
                                   <span class="txt01">1호선 중앙역 14번 출구</span>
                                   <span class="txt02">중부소방서 방향 200m 직진(도보3분)</span>
                                   <span class="last">헤이븐호텔 도착</span>
                               </li>
                               <li class="gimhae">
                                   <p class="tit">· 김해공항 → 호텔</p>
                                   <img src="../images/customer/map_public_gimhae.png" alt="김해공항루트">
                                   <span class="txt01">공항역 승차</span>
                                   <span class="txt02">2호선 사상역 승차</span>
                                   <span class="txt03">1호선 서면역 승차</span>
                                   <span class="txt04">중앙역 하차</span>
                                   <span class="last">헤이븐호텔 도착</span>
                               </li>
                           </ul>
                       </div>
                       <div class="bus">
                           <h5>버스</h5><p>17,26,27,40,41,61,66,81,82,85,87,88,88-1,101,103,134,190,508,1003,1004 이용</p>
                           <p>· 중앙동, 중부경찰서, 영주동 하차</p>
                       </div>
                   </div>
                   <div class="airport">
                       <h5>공항리무진</h5>
                       <ul>
                           <li class="odd first">· 노선 : 서면/부산역행 탑승 (중앙동 또는 영주동 승,하차)</li>
                           <li>· 소요시간 : 약 50분</li>
                           <li class="odd">· 이용요금 : 성인 6,000원 / 초등학생 4,500원 / 미취학 무료 </li>
                           <li>· 운행간격 : 약 40분</li>
                       </ul>
                       <table>
                           <tr>
                               <td class="tNone lNone">중앙동</td>
                               <td class="tNone">첫차 5:37</td>
                               <td class="tNone rNone">막차 19:38</td>
                           </tr>
                           <tr>
                               <td class="lNone">영주동</td>
                               <td>첫차 5:38</td>
                               <td class="rNone">막차 19:40</td>
                           </tr>
                           <tr>
                               <td class="bNone lNone">김해공항</td>
                               <td class="bNone">첫차 7:00</td>
                               <td class="bNone rNone">막차 21:50</td>
                           </tr>
                       </table>
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