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
        <title>패키지 | HAVEN HOTEL</title>
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="../images/common/favicon_ios.png" sizes="180x180">
        <link rel="icon" href="../images/common/favicon_android.png" sizes="192x192">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
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
                        <a href="package.php" class="mainNav">프로모션</a>
                        <ul class="subNav">
                            <li><a href="package.php">패키지</a></li>
                            <li><a href="event.php">이벤트</a></li>
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
        
        <div id="mainImg" class="subMain04">
            <h2>프로모션<span class="subEngTitle">PROMOTION</span></h2>
        </div>
       <nav id="subMenu">
           <ul class="column02">
               <li class="active"><a href="package.php">패키지</a></li>
               <li><a href="event.php">이벤트</a></li>
           </ul>
       </nav>
       <div id="subContents" class="package">
           <h3>패키지</h3>
           <ul class="promotion">
               <li class="pkg01 fl mb">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_01.jpg" alt="패키지이미지01">
                       </figure>
                       <div class="txt">
                           <h5>AWESOME&amp;TWOSOME 디너 패키지</h5>
                           <p>
                                헤이븐호텔에서 드리는 풍성한 혜택!
                                ‘레스토랑 디너 뷔페 2인, 웰컴 드링크(2잔), 호텔 굿즈 비치타월, 선착순 하버 전망 업그레이드, 무료주차’ 이 모든 구성을 한번에 즐겨보세요! 
                           </p>
                       </div>
                   </a>
               </li>
               <li class="pkg02 fl mb">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_02.jpg" alt="패키지이미지02">
                       </figure>
                       <div class="txt">
                           <h5>여름 패키지 Summer Package</h5>
                           <p>
                                다시 여기 바닷가! 특별한 추억을 만들 여행을 떠나요! 올 여름 최고의 휴식처 '헤이븐 호텔'에서 시원하고 완벽한 휴가를 보내세요.
                           </p>
                       </div>
                   </a>
               </li>
               <li class="pkg03 fl mr mb">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_03.jpg" alt="패키지이미지03">
                       </figure>
                       <div class="txt">
                           <h5>세이프 스테이 패키지</h5>
                           <p>
                                이불 밖은 위험해? 철저히 관리되는 호텔은 안.전.해! 안심 호텔에서의 편안한 휴식을 위해 24시간 스테이와 하버전망 무료 업그레이드, 웰컴 드링크, 항균티슈, 1+1 할인 이벤트 이 모든 혜택을 만나 보실 수 있습니다.
                           </p>
                       </div>
                   </a>
               </li>
               <li class="pkg04 fl">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_04.jpg" alt="패키지이미지04">
                       </figure>
                       <div class="txt">
                           <h5>굿모닝 패키지</h5>
                           <p>
                                헤이븐 굿모닝 패키지 (Good Morning Package)! 슈페리어 객실과 간단한 브런치 세트로 구성된 알찬 패키지로 특별한 여행을 떠나보세요.
                           </p>
                       </div>
                   </a>
               </li>
               <li class="pkg05 fl">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_05.jpg" alt="패키지이미지05">
                       </figure>
                       <div class="txt">
                           <h5>프라이빗 파티룸 패키지</h5>
                           <p>
                                친구와 함께 특별한 날을 기념하는 파티를 호텔에서! 친구들과 함께하는 파티, 합리적인 가격으로 파티에 필요한 구성품과 푸짐한 서비스를 담은 패키지로 특별한 하루를 보내세요!
                           </p>
                       </div>
                   </a>
               </li>
               <li class="pkg06 fl mr">
                   <a href="#">
                       <figure>
                           <img src="../images/promotion/package_bn_06.jpg" alt="패키지이미지06">
                       </figure>
                       <div class="txt">
                           <h5>헤이븐 베이직 패키지</h5>
                           <p>
                                헤이븐만의 특별한 베이직 패키지! 지친 일상 속 사랑하는 사람과 색다른 전망을 바라보며, 여유로운 휴식을 즐겨보세요.
                           </p>
                       </div>
                   </a>
               </li>
           </ul>
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