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
        <title>채용정보 | HAVEN HOTEL</title>
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
               <li><a href="haven.php">호텔소개</a></li>
               <li class="active"><a href="employment.php">채용정보</a></li>
           </ul>
       </nav>
       <div id="subContents" class="employment">
            <h3>채용정보</h3>
            <div class="tabMenu">
               <ul class="tabBtn">
                    <li class="fl"><a href="#tabBtn01" class="active">인재상</a></li>
                    <li class="fl"><a href="#tabBtn02">채용제도</a></li>
                </ul>
               <div class="tabContentsWrap">
                   <div class="personality">
                       <div class="bn01">
                           <img src="../images/haven/employment_bn_01.jpg" class="fl" alt="인재상 이미지01">
                           <div class="tWrap fr">
                               <h5>PRIDE</h5>
                               <p>우리는 회사에 대한 주인의식, 로열티, 자부심을 가지고 호텔의 구성원으로서 사명을 다합니다.</p>
                           </div>
                       </div>
                       <div class="bn02">
                           <div class="tWrap fl">
                               <h5>PROFESSIONAL</h5>
                               <p>우리는 자신의 분야에서 최고가 되기 위해 책임감, 전문성,<br> 패기를 가지고 도전적 목표를 달성합니다.</p>
                           </div>
                           <img src="../images/haven/employment_bn_02.jpg" class="fr" alt="인재상 이미지02">
                       </div>
                       <div class="bn03">
                           <img src="../images/haven/employment_bn_03.jpg" class="fl" alt="인재상 이미지03">
                           <div class="tWrap fr">
                               <h5>SERVICE ORIENTED</h5>
                               <p>자신의 고객은 누구이며, 그들의 요구가 무엇인가에 대해 끊임 없이 묻고 답하며,<br> 고객에게 만족 그 이상의 가치를 제공하는 것을 말합니다.</p>
                           </div>
                       </div>
                   </div>
                   <div class="system">
                       <h5>채용절차</h5>
                       <ul>
                           <li class="firstLine">1. 입사지원</li>
                           <li>2. 서류전형</li>
                           <li>3. 개별면접</li>
                           <li>4. 채용신체검사</li>
                           <li>5. 합격자발표</li>
                       </ul>
                       <table>
                           <tr>
                               <th>지원방법</th>
                               <td>
                                   · 제시된 안내와 채용공고에 따라 지원서를 작성하여 지원서 접수기간 내에 제출합니다.<br>
                                   · 제출 후 지원자 안내에 따라 전형절차에 응시합니다.
                                </td>
                           </tr>
                           <tr>
                               <th>서류전형</th>
                               <td>
                                   · 서류전형을 통해 지원자 중에서 회사가 필요로 하는 분야의 대상이 되는지를 검토합니다.<br>
                                   · 성적, 출결, 생활지도, 지원동기 및 포부, 보유자격 등을 종합적으로 검토하여 전형을 합니다.
                               </td>
                           </tr>
                           <tr>
                               <th>인적성검사</th>
                               <td>성격, 적성 등을 검사하여 직무와의 적합성을 평가합니다.</td>
                           </tr>
                           <tr>
                               <th>면접</th>
                               <td>	면접은 인사부서, 해당부서 및 임원면접을 실시합니다.</td>
                           </tr>
                           <tr>
                               <th>기타</th>
                               <td>
                                   · 입사지원서 기재 내용이 허위임을 판명될 때에는 합격 및 입사를 취소할 수 있습니다. <br>
                                   · 기타 자세한 내용은 입사를 희망하시는 회사로 문의하시면 됩니다. <br>
                                   · 입사를 희망하시는 회사 뿐 아니라 앰배서더호텔그룹의 다른 회사에서도 입사를 제의할 수 있습니다.
                                </td>
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