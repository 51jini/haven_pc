<?php
    session_start();
?>
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
        <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/tNav.js"></script>
        <script src="../js/join.js"></script>
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
                <li class="last">STEP3<br>가입완료</li>
            </ul>
        </div>
        <div id="subContents" class="join02">
            <form name="joinForm" method="post" action="insert.php" id="joinForm">
                <div class="essential">
                    <label for="id">아이디<span class="star">*</span></label><br>
                    <input type="text" name="id" id="id" class="box01">&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="checkId" class="away">중복확인</label>
                    <input type="button" value="중복확인" id="checkId" onclick="check_id();" /><br>
                    <div class="fl">   
                        <label for="pass">비밀번호<span class="star">*</span></label><br>
                        <input type="password" name="pass" id="pass" class="box01" placeholder="영문,숫자,특수기호 조합 8~16자 이내">
                    </div>
                    <div class="fr">
                        <label for="passConfirm">비밀번호 확인<span class="star">*</span></label><br>
                        <input type="password" name="passConfirm" id="passConfirm" class="box01">
                    </div>
                </div>
                <div class="defaultWrap">
                    <div class="default01 fl">
                        <div class="fl">
                            <label for="korName">이름(한글)<span class="star">*</span></label><br>
                            <input type="text" name="korName" id="korName">
                        </div>
                        <div class="gender fl">
                            <button type="button" id="gBoxBtn">
                                <span class="text fl" id="gBoxText">선택</span>
                                <span class="icon fr"><img src="../images/tnav/select_icon.png" alt="셀렉트아이콘"></span>
                            </button>
                            <ul>
                                <li>남자</li>
                                <li>여자</li>
                            </ul>
                        </div>
                        <div class="birth">
                            <p class="birthTit">생년월일<span class="star">*</span></p>
                            <div class="yBox">
                                <button type="button" id="yBoxBtn">
                                    <span class="text fl" id="yBoxText">년</span>
                                    <span class="icon fr"><img src="../images/tnav/select_icon.png" alt="셀렉트아이콘"></span>
                                </button>
                                <ul></ul>
                            </div>
                            <div class="mBox">
                                <button type="button" id="mBoxBtn">
                                    <span class="text fl" id="mBoxText">월</span>
                                    <span class="icon fr"><img src="../images/tnav/select_icon.png" alt="셀렉트아이콘"></span>
                                </button>
                                <ul></ul>
                            </div>
                            <div class="dBox">
                                <button type="button" id="dBoxBtn">
                                    <span class="text fl" id="dBoxText">일</span>
                                    <span class="icon fr"><img src="../images/tnav/select_icon.png" alt="셀렉트아이콘"></span>
                                </button>
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="default02 fr">
                        <div class="fr">
                            <label for="engNameF">이름(영문)</label><br>
                            <input type="text" name="engNameF" id="engNameF" class="box02" placeholder="First Name(이름)">
                            <label for="engNameL" class="away">Last Name(성)</label>
                            <input type="text" name="engNameL" id="engNameL" class="box02" placeholder="Last Name(성)">
                        </div>
                        <div class="phone fr">
                            <p class="phoneTit">휴대폰 번호<span class="star">*</span></p>
                            <div class="firstNum">
                                <button type="button" id="fPhoneBtn" class="fl">
                                    <span class="text fl" id="fPhoneText">선택</span>
                                    <span class="icon fr"><img src="../images/tnav/select_icon.png" alt="셀렉트아이콘"></span>
                                </button>
                                <ul></ul>
                            </div>
                            <div class="fr">
                                <input type="text" name="midPhone" id="midPhone" maxlength="4">
                                <label for="midPhone" class="away">핸드폰번호중간</label>
                                <input type="text" name="lastPhone" id="lastPhone" maxlength="4">
                                <label for="lastPhone" class="away">핸드폰번호마지막</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="address fl">
                    <h5>주소</h5>
                    <input type="text" name="postcode" id="postcode" placeholder="우편번호">
                    <label for="postcode" class="away">우편번호검색</label>
                    <input type="button" name="postSearch" id="postSearch" onclick="sample3_execDaumPostcode()" value="우편번호 찾기">
                    <label for="postSearch" class="away">우편번호검색버튼</label><br>
                    <div id="postBox"></div>
                    <input type="text" name="addr" id="addr">
                    <label for="addr" class="away">주소입력창</label><br>
                    <input type="text" name="detailAddr" id="detailAddr" placeholder="상세주소 입력">
                    <label for="detailAddr" class="away">상세주소입력창</label>
                    <input type="text" name="extraAddr" id="extraAddr">
                    <label for="extraAddr" class="away">참고</label>
                </div>
                <!--우편번호찾기-->
                <script src="../js/post.js"></script>
                <div class="marketing fr">
                    <label for="email">이메일<span class="star">*</span></label>
                    <input type="text" name="email" id="email" class="box01">
                    <h5>마케팅 정보 수신 동의 (선택)</h5>
                    <p>수신 동의를 하시면, 헤이븐 호텔 이벤트 소식을 전해 드립니다.</p>
                    <label for="all" class="chkBox">
                        <input type="checkbox" name="marketing" id="all">
                        <i class="checkIcon"></i>
                        전체
                    </label>
                    <label for="emailChk" class="chkBox">
                        <input type="checkbox" name="marketing" id="emailChk">
                        <i class="checkIcon"></i>
                        이메일
                    </label>
                    <label for="sms" class="chkBox">
                        <input type="checkbox" name="marketing" id="sms">
                        <i class="checkIcon"></i>
                        SMS
                    </label>
                    <label for="cellphone" class="chkBox">
                        <input type="checkbox" name="marketing" id="cellphone">
                        <i class="checkIcon"></i>
                        휴대폰
                    </label>
                </div>
                <!--데이터 전송을 위한 hidden-->
                <input type="hidden" value="" name="gBoxText">
                <input type="hidden" value="" name="yBoxText">
                <input type="hidden" value="" name="mBoxText">
                <input type="hidden" value="" name="dBoxText">
                <input type="hidden" value="" name="fPhoneText">
            </form>
            <input type="submit" value="다음" id="nextBtn" onclick="check_input()">
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