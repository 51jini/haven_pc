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
        <title>레스토랑 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/swiper.min.css">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/swiper.min.js"></script>
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
                        <a href="./cafe.php" class="mainNav">부대시설</a>
                        <ul class="subNav">
                            <li><a href="./cafe.php">커피숍</a></li>
                            <li><a href="./restraunt.php">레스토랑</a></li>
                            <li><a href="./meetingroom.php">미팅룸</a></li>
                            <li><a href="./fitnesscenter.php">피트니스센터</a></li>
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
        
        <div id="mainImg" class="subMain03">
            <h2>부대시설<span class="subEngTitle">FACILITY</span></h2>
        </div>
       <nav id="subMenu">
           <ul class="column04">
               <li><a href="./cafe.php">커피숍</a></li>
               <li class="active"><a href="./restraunt.php">레스토랑</a></li>
               <li><a href="./meetingroom.php">미팅룸</a></li>
               <li><a href="./fitnesscenter.php">피트니스센터</a></li>
           </ul>
       </nav>
       <div id="subContents" class="facility">
           <div class="title">
               <h3>레스토랑</h3>
               <p>이탈리아어로 '별'이라는 뜻의 레스토랑 '라 스뗄라'는 전문 외식 업체의 노하우를 바탕으로 조식과 중식에는 다채로운 메뉴를 맛볼 수 있는<br>
               뷔페 레스토랑, 저녁에는 간단한 식사와 함께 주류를 즐길 수 있는 비스트로로 변신하는 시간대별 맞춤 서비스 공간입니다.</p>
           </div>
           <div class="slideWrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../images/facility/restraunt_img_01.jpg" alt="레스토랑 이미지01"></div>
                        <div class="swiper-slide"><img src="../images/facility/restraunt_img_02.jpg" alt="레스토랑 이미지02"></div>
                        <div class="swiper-slide"><img src="../images/facility/restraunt_img_03.jpg" alt="레스토랑 이미지03"></div>
                        <div class="swiper-slide"><img src="../images/facility/restraunt_img_04.jpg" alt="레스토랑 이미지04"></div>
                        <div class="swiper-slide"><img src="../images/facility/restraunt_img_05.jpg" alt="레스토랑 이미지05"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
           </div>
           <div class="textWrap">
               <h4>INFORMATION</h4>
               <div class="default">
                   <h5>기본정보</h5>
                   <ul>
                       <li>· 위치 : 2층</li>
                       <li>· 좌석수 : 128석</li>
                       <li>· 문의 및 예약 : 000-000-0000</li>
                   </ul>
               </div>
               <div class="text01 fl">
                   <h5>조식</h5>
                   <ul>
                       <li>· 시간 : 6:30 ~ 9:30 (입장 마감 9:30)</li>
                       <li>· 메뉴 : 뷔페</li>
                       <li>
                           · 요금
                           <ul class="sList">
                               <li>성인 : 18,000</li>
                               <li>어린이 : 9,000</li>
                               <li>유아 : 무료</li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="text02 fl">
                   <h5>중식</h5>
                   <ul>
                       <li>· 시간 : 11:30 ~ 13:30 (입장 마감 13:00)</li>
                       <li>· 메뉴 : 뷔페</li>
                       <li>
                           · 요금 요일별 상이
                           <ul class="sList">
                               <li>[월,화,금] 연령 구분 없이 11,000원</li>
                               <li>[수,목] 연령 구분 없이 9,000원</li>
                               <li>[토,일,공휴일] 성인 : 15,000원</li>
                               <li>어린이 : 9,000</li>
                               <li>유아 : 무료</li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="text03 fr">
                   <h5>석식</h5>
                   <ul>
                       <li>· 시간 : 18:00 ~ 21:00 (입장 마감 20:30)</li>
                       <li>· 메뉴 : 뷔페</li>
                       <li>
                           · 요금
                           <ul class="sList">
                               <li>성인 : 25,000원</li>
                               <li>어린이 : 15,000</li>
                               <li>유아 : 무료</li>
                           </ul>
                       </li>
                   </ul>
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