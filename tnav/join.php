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
        <script src="../js/tNav.js"></script>
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
                <li>STEP2<br>정보입력</li>
                <li class="last">STEP3<br>가입완료</li>
            </ul>
        </div>
        <div id="subContents" class="join">
            <div class="all fr">
                <div class="fl">
                    <h4>전체약관동의</h4>
                    <p>홈페이지 회원 이용약관 및 개인정보 수집 및 이용에 대한 동의를 읽었으며, 아래 내용에 모두 동의합니다.</p>
                </div>
                <form action="#">
                    <label for="allChk" class="chkBox fr">
                        <input type="checkbox" id="allChk">
                        <i class="checkIcon"></i>
                        동의합니다.
                    </label>
                </form>
            </div>
            <div class="provision">
                <div class="provision01">
                    <h4>홈페이지 이용약관 <span class="red">(필수)</span></h4>
                    <label for="chk01" class="chkBox">
                        <input type="checkbox" id="chk01">
                        <i class="checkIcon"></i>
                        동의합니다.
                    </label>
                    <div class="agreeTxt">
                        <h5>제1조 목 적</h5>
                        <p>본 이용 약관은 헤이븐호텔이 운영하는 홈페이지 (이하 "헤이븐호텔 홈페이지"라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리의무 및 책임사항을 규정함을 목적으로 합니다.</p>
                        <h5>제2조 정 의</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"란 헤이븐호텔이 재화 또는 용역(이하 "재화 등"이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 또는 용역 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버 몰을 운영하는 사업자의 의미로도 사용됩니다.</li>
                            <li>"이용자"란 "헤이븐호텔 홈페이지"에 접속하여 이 약관에 따라 "헤이븐호텔 홈페이지"가 제공하는 서비스를 받는 회원 및 비회원을 말합니다.</li>
                            <li>"회원"이라 함은 "헤이븐호텔 홈페이지"에 개인정보를 제공하여 회원등록을 한 자로서, "헤이븐호텔 홈페이지"의 정보를 지속적으로 제공받으며, "헤이븐호텔 홈페이지"가 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.</li>
                            <li>"비회원"이라 함은 회원에 가입하지 않고 "헤이븐호텔 홈페이지"가 제공하는 서비스를 이용하는 자를 말합니다.</li>
                        </ol>
                        <h5>제3조 약관 등의 명시와 설명 및 개정</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이 약관의 내용과 상호 및 대표자 성명, 영업장 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호, 모사전송번호, 전자우편주소, 사업자등록번호, 통신판매업신고번호, 개인정보관리 책임자 등을 이용자가 쉽게 알 수 있도록 "헤이븐호텔 홈페이지"의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회, 배송책임, 환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 전자상거래기본법, 전자서명법, 정보통신망이용촉진등에 관한 법률, 방문판매 등에 관한 법률, 소비자보호법, 관세법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 "헤이븐호텔 홈페이지" 초기 화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "헤이븐호텔 홈페이지"는 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.</li>
                            <li>"헤이븐호텔 홈페이지"가 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고, 그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제 3항에 의한 개정약관의 공지 기간 내에 "헤이븐호텔 홈페이지"에 송신하여 "헤이븐호텔 홈페이지"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.</li>
                            <li>이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관여하는 전자상거래 등에서의 소비자 보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호 지침 및 관계법령 또는 상 관례에 따릅니다.</li>
                        </ol>
                        <h5>제4조 서비스의 제공 및 변경</h5>
                        <ol class="decimal">
                            <li>
                                "헤이븐호텔 홈페이지"는 다음과 같은 업무를 수행합니다.
                                <ol>
                                    <li>1) 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결</li>
                                    <li>2) 기타 "헤이븐호텔 홈페이지"가 정하는 업무</li>
                                </ol>
                            </li>
                            <li>"헤이븐호텔 홈페이지"는 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.</li>
                            <li>"헤이븐호텔 홈페이지"가 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화 등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.</li>
                            <li>전항의 경우 "헤이븐호텔 홈페이지"는 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, "헤이븐호텔 홈페이지"가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</li>
                        </ol>
                        <h5>제5조 서비스의 중단</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 컴퓨터 등 정보통신설비의 보수점검, 교체 및 고장, 통신 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단, "헤이븐호텔 홈페이지"가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</li>
                            <li>사업종목의 전환, 사업의 포기, 업체간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 "헤이븐호텔 홈페이지" 제8조에 정한 방법으로 이용자에게 통지하고 당초 "헤이븐호텔 홈페이지"에서 제시한 조건에 따라 소비자에게 보상합니다. 다만, "헤이븐호텔 홈페이지"가 보상기준 등을 고지하지 아니한 경우에는 이용자들의 포인트 또는 적립금 등을 "헤이븐호텔 홈페이지"에서 통용되는 통화가치에 상응하는 현물 또는 현금으로 이용자에게 지급합니다.</li>
                        </ol>
                        <h5>제6조 회원가입</h5>
                        <ol class="decimal">
                            <li>이용자는 무료로 "회원"에 가입할 수 있으며, "헤이븐호텔 홈페이지"가 정한 가입 양식에 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.</li>
                            <li>
                                "헤이븐호텔 홈페이지"는 제1항에 따라 회원가입을 신청한 이용자 중 다음 각 호에 해당하지 않는 한 "회원"으로 등록합니다. 
                                <ol class="pl">
                                    <li>1) 가입신청자가 이 약관 제7조 제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만 제7조 제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 "헤이븐호텔 홈페이지"가 회원 재가입을 승낙한 경우는 예외로 합니다.</li>
                                    <li>2) 등록 내용에 허위, 기재누락, 오기가 있는 경우</li>
                                    <li>3) 기타 회원으로 등록하는 것이 "헤이븐호텔 홈페이지"의 기술상 현저히 지장이 있다고 판단되는 경우</li>
                                </ol>
                            </li>
                            <li>헤이븐호텔 홈페이지 회원 등록은 헤이븐호텔의 파라다이스 리워즈에 동시 가입됨을 의미하며 멤버십 포인트의 적립 및 멤버십 등급에 따른 혜택은 헤이븐호텔의 파라다이스 리워즈 멤버십 약관에 의거하여 제공됩니다.</li>
                            <li>회원가입은 만 19세 이상인자에 한하며(만 19세 미만의 아동일 경우 가입 및 상품 주문 시 소비자 보호지침 제4조 3항 다에 의해 법정대리인의 사전동의서를 받아야 함), "헤이븐호텔 홈페이지"에서는 만 19세 이상인 회원에 한하여 구매가 가능합니다.</li>
                            <li>회원가입은 "헤이븐호텔 홈페이지"의 승낙이 가입 신청한 이용자에게 도달한 때에 완료됩니다.</li>
                            <li>"회원"은 "헤이븐호텔 홈페이지"에 등록한 회원정보에 변경이 있는 경우, 즉시 "헤이븐호텔 홈페이지"에서 정하는 방법에 따라 해당 변경사항을 "헤이븐호텔 홈페이지"에게 통지하거나 수정하여야 합니다.</li>
                        </ol>
                        <h5>제7조 회원 탈퇴 및 자격 상실 등</h5>
                        <ol class="decimal">
                            <li>"회원"은 "헤이븐호텔 홈페이지"에 언제든지 탈퇴를 요청할 수 있으며, "회원"이 탈퇴 요청을 하는 경우에는 "헤이븐호텔 홈페이지"는 즉시 회원 탈퇴에 필요한 조치를 취합니다.</li>
                            <li>
                                "회원"이 다음 각 호의 사유에 해당하는 경우, "헤이븐호텔 홈페이지"는 회원에 대하여 일정한 서비스의 이용을 제한하거나 일정기간 회원자격을 정시시킬 수 있습니다.
                                <ol class="pl">
                                    <li>1) 가입 신청 시에 허위 내용을 등록한 경우</li>
                                    <li>2) "헤이븐호텔 홈페이지"를 이용하여 구입한 재화 등의 대금과 관련하여 회원이 부담하는 채무를 기일에 이행하지 않는 경우</li>
                                    <li>3) 타인의 ID와 비밀번호 또는 그 개인정보를 도용한 경우</li>
                                    <li>4) "헤이븐호텔 홈페이지"의 화면에서 타인의 명예를 손상시키거나 불이익을 주는 행위를 한 경우</li>
                                    <li>5) 제3자의 "헤이븐호텔 홈페이지" 이용을 방해하는 등 전자상거래질서를 위협하는 경우</li>
                                    <li>6) "헤이븐호텔 홈페이지" 화면에 음란물을 게재하거나 음란사이트를 링크시키는 경우</li>
                                    <li>7) "헤이븐호텔 홈페이지"를 이용하여 법령 또는 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우</li>
                                    <li>8) 기타 서비스 운영을 고의로 방해하는 행위를 하는 경우</li>
                                </ol>
                            </li>
                        </ol>
                        <h5>제8조 회원에 대한 통지</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"가 "회원"에 대한 통지를 하는 경우, "회원"이 "헤이븐호텔 홈페이지"와 미리 약정하여 지정한 전자우편(이메일) 주소로 할 수 있습니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 불특정다수 회원에 대한 통지의 경우 1주일 이상 "헤이븐호텔 홈페이지" 화면에 게시함으로써 개별 통지에 갈음할 수 있습니다. 다만, 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 개별통지를 합니다.</li>
                        </ol>
                        <h5>제9조 구매 신청</h5>
                        <ol class="decimal">
                            <li>
                                "헤이븐호텔 홈페이지"는 이용자가 구매신청을 함에 있어 다음의 각 내용을 알기 쉽게 제공하여야 합니다. 단, "회원"인 경우 제2호 내지 제4호의 적용을 제외할 수 있습니다.
                                <ol class="pl">
                                    <li>1) 재화 등의 검색 및 선택</li>
                                    <li>2) 성명, 주소, 전화번호, 전자우편주소, 이동전화번호 등의 입력</li>
                                    <li>3) 약관 내용, 청약철회권이 제한되는 서비스, 배송료, 설치비 등의 비용 부담과 관련 내용에 대한 확인</li>
                                    <li>4) 이 약관에 동의하고 위 3호의 사항을 확인하거나 거부하는 표시(예: 마우스 클릭)</li>
                                    <li>5) 재화 등의 구매신청 및 이에 관한 확인 또는 "헤이븐호텔 홈페이지"의 확인에 대한 동의</li>
                                    <li>6) 결제방법의 선택</li>
                                </ol>
                            </li>
                        </ol>
                        <h5>제10조 계약의 성립</h5>
                        <ol class="decimal">
                            <li>
                                 "헤이븐호텔 홈페이지"는 제9조와 같은 구매신청에 대하여 다음 각 호에 해당하면 승낙하지 않을 수 있습니다. 다만, 미성년자와 계약을 체결하는 경우에는 법정대리인의 동의를 얻지 못하면 미성년자 본인 또는 법정대리인이 계약을 취소할 수 있다는 내용을 고지하여야 합니다.
                                 <ol class="pl">
                                     <li>1) 신청 내용에 허위, 기재누락, 오기가 있는 경우</li>
                                     <li>2) 미성년자가 담배, 주류 등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우</li>
                                     <li>3) 기타 구매신청에 승낙하는 것이 "헤이븐호텔 홈페이지" 업무수행 또는 기술상 현저히 지장이 있다고 판단하는 경우</li>
                                 </ol>
                            </li>
                            <li>"헤이븐호텔 홈페이지"의 승낙이 제12조 제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.</li>
                            <li>"헤이븐호텔 홈페이지"의 승낙의 의사표시에는 이용자의 구매 신청에 대한 확인 및 판매가능 여부, 구매신청의 정정취소 등에 관한 정보 등을 포함하여야 합니다.</li>
                        </ol>
                        <h5>제11조 지급방법</h5>
                        <ol class="decimal">
                            <li>
                                "헤이븐호텔 홈페이지"에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각 호의 방법 중 가용한 방법으로 할 수 있습니다. 단, "헤이븐호텔 홈페이지"는 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.
                                <ol class="pl">
                                    <li>1) 폰뱅킹, 인터넷 뱅킹, 메일 뱅킹 등의 각종 계좌이체</li>
                                    <li>2) 선불카드, 직불카드, 신용카드 등의 각종 카드 결제</li>
                                    <li>3) 온라인 무통장 입금</li>
                                    <li>4) 전자화폐에 의한 결제</li>
                                    <li>5) 수령 시 대금 지급</li>
                                    <li>6) 마일리지 등 "헤이븐호텔 홈페이지"가 지급한 포인트에 의한 결재</li>
                                    <li>7) "헤이븐호텔 홈페이지"와 계약을 맺었거나 "헤이븐호텔 홈페이지"가 인정한 상품권에 의한 결제</li>
                                    <li>8) 기타 전자적 지급 방법에 의한 대금 지급 등</li>
                                </ol>
                            </li>
                        </ol>
                        <h5>제12조 수신확인통지, 구매신청 변경 및 취소</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.</li>
                            <li>수신확인통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있고, "헤이븐호텔 홈페이지"는 배송 전에 이용자의 요청이 있는 경우에는 지체 없이 그 요청에 따라 처리하여야 합니다.</li>
                        </ol>
                        <h5>제13조 재화 등의 공급</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이용자와 재화 등의 공급시기에 관하여 별도의 약정이 없는 이상, 이용자가 청약을 한 날부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다. 다만, "헤이븐호텔 홈페이지"가 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는 대금의 전부 또는 일부를 받은 날부터 2 영업일 이내에 조치를 취합니다. 이때 "헤이븐호텔 홈페이지"는 이용자가 재화 등의 공급 절차 및 진행상황을 확인할 수 있도록 적절한 조치를 취합니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다. 만약, "헤이븐호텔 홈페이지"가 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상하여야 합니다. 다만, "헤이븐호텔 홈페이지"의 고의, 과실이 없음을 입증한 경우에는 그러하지 아니합니다.</li>
                        </ol>
                        <h5>제14조 환급</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이용자가 구매 신청한 재화 또는 용역이 품절 등의 사유로 재화의 인도 또는 용역을 제공할 수 없을 때에는 지체 없이 그 사유를 이용자에게 통지하고, 사전에 재화 또는 용역의 대금을 받은 경우에는 대금을 받은 날부터 3일 이내에, 그렇지 않은 경우에는 그 사유발생일로부터 2일 이내에 계약해제 및 환급절차를 취합니다.</li>
                        </ol>
                        <h5>제15조 청약철회</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"와 재화 등의 구매에 관한 계약을 체결한 이용자는 수신확인의 통지를 받는 날부터 7일 이내에는 청약의 철회를 할 수 없습니다.</li>
                            <li>
                                이용자는 재화 등을 배송 받은 경우 다음 각 호에 해당하는 경우에는 반품 및 교환을 할 수 없습니다.
                                <ol class="pl">
                                    <li>1) 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우(다만, 재화 등의 내용을 확인하기 위하여 포장 등을 훼손한 경우에는 청약철회를 할 수 있습니다.)</li>
                                    <li>2) 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우</li>
                                    <li>3) 시간의 경과에 의하여 재판매가 곤란할 정도로 재화 등의 가치가 현저히 감소한 경우</li>
                                    <li>4) 같은 성능을 지닌 재화 등으로 복제가 가능한 경우 그 원본인 재화 등의 포장을 훼손한 경우</li>
                                </ol>
                            </li>
                            <li>제2항 제2호 내지 제4호의 경우에 "헤이븐호텔 홈페이지"가 사전에 청약철회 등이 제한되는 사실을 소비자가 쉽게 알 수 있는 곳에 명기하는 등의 조치를 하지 않았다면 이용자의 청약철회 등이 제한되지 않습니다.</li>
                            <li>이용자는 제1항 및 제2항의 규정에도 불구하고 재화 등의 내용이 표시/광고 내용과 다르거나 계약 내용과 다르게 이행된 때에는 당해 재화 등을 공급받은 날부터 3월이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내에 청약철회 등을 할 수 있습니다.</li>
                        </ol>
                        <h5>제16조 청약철회 등의 효과</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이용자로부터 재화 등을 반환 받은 경우 3 영업일 이내에 이미 지급받은 재화 등의 대금을 환급합니다. 이 경우 "헤이븐호텔 홈페이지"가 이용자에게 재화 등의 환급을 지연한 때에는 그 지연 기간에 대하여 공정거래위원회가 정하여 고시하는 지연이자율을 곱하여 산정한 지연이자를 지급합니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 위 대금을 환급함에 있어 이용자가 신용카드 또는 전자화폐 등의 결제수단으로 대금을 지급한 때에는 지체 없이 당해 결제수단을 제공한 사업자로 하여금 재화 등의 대금 청구를 정지 또는 취소하도록 요청합니다.</li>
                            <li>청약철회 등의 경우 공급받은 재화 등의 반환에 필요한 비용은 이용자가 부담합니다. "헤이븐호텔 홈페이지"는 이용자에게 청약철회 등을 이유로 위약금 또는 손해배상을 청구하지 않습니다. 다만, 재화 등의 내용이 표시/광고 내용과 다르거나 계약 내용과 다르게 이행되어 청약철회 등을 하는 경우 재화 등의 반환에 필요한 비용은 "헤이븐호텔 홈페이지"가 부담합니다.</li>
                            <li>이용자가 재화 등을 제공받을 때 발송비를 부담한 경우에 "헤이븐호텔 홈페이지"는 청약철회 시 그 비용을 누가 부담하는지 이용자가 알기 쉽도록 명확하게 표시합니다.</li>
                        </ol>
                        <h5>제17조 개인정보보호</h5>
                        <ol class="decimal">
                            <li>
                                "헤이븐호텔 홈페이지"는 이용자의 정보수집 시 구매계약 이행에 필요한 최소한의 정보를 수집합니다. 다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다.
                                <ol class="pl">
                                    <li>1) 성명</li>
                                    <li>2) 성별</li>
                                    <li>3) 휴대폰번호</li>
                                    <li>4) 이메일</li>
                                    <li>5) 생년월일</li>
                                </ol>
                            </li>
                            <li>"헤이븐호텔 홈페이지"가 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를 받습니다.</li>
                            <li>
                                제공된 개인정보는 당해 이용자의 동의 없이 목적 외 이용이나 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은 "헤이븐호텔 홈페이지"가 집니다. 단, 다음의 경우에는 예외로 합니다.
                                <ol class="pl">
                                    <li>1) 배송업무 상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를 알려주는 경우</li>
                                    <li>2) 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 제공하는 경우</li>
                                    <li>3) 재화 등의 거래에 따른 대금정산을 위하여 필요한 경우</li>
                                    <li>4) 도용 방지를 위하여 본인확인에 필요한 경우</li>
                                    <li>5) 법률의 규정 또는 법률에 의하여 필요한 불가피한 사유가 있는 경우</li>
                                </ol>
                            </li>
                            <li>"헤이븐호텔 홈페이지"가 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보관리 책임자의 신원(소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공받은 자, 제공 목적 및 제공할 정보의 내용) 등 정보통신망이용촉진 등에 관한 법률 제22조 제2항이 규정한 사항을 미리 명시하거나 고지해야 하며, 이용자는 언제든지 이 동의를 철회할 수 있습니다.</li>
                            <li>이용자는 언제든지 "헤이븐호텔 홈페이지"가 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 "헤이븐호텔 홈페이지"는 이에 대해 지체 없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 "헤이븐호텔 홈페이지"는 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.</li>
                            <li>"헤이븐호텔 홈페이지" 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체 없이 파기합니다.</li>
                        </ol>
                        <h5>제18조 "헤이븐호텔 홈페이지"의 의무</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며, 이 약관이 정하는 바에 따라 지속적이고 안정적으로 재화, 용역을 제공하는데 최선을 다하여야 합니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.</li>
                            <li>"헤이븐호텔 홈페이지"가 상품이나 용역에 대하여 표시, 광고의 공정화에 관한 법률 제3조 소정의 부당한 표시, 광고 행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.</li>
                        </ol>
                        <h5>제19조 회원의 ID 및 비밀번호에 대한 의무</h5>
                        <ol class="decimal">
                            <li>제17조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 "회원"에게 있습니다.</li>
                            <li>회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.</li>
                            <li>회원이 자신의 ID 및 비밀번호를 도난 당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 "헤이븐호텔 홈페이지"에 통보하고, "헤이븐호텔 홈페이지"의 안내가 있는 경우에는 그에 따라야 합니다.</li>
                        </ol>
                        <h5>제20조 이용자의 의무</h5>
                        이용자는 다음 행위를 하여서는 안됩니다.
                        <ol class="decimal">
                            <li>신청 또는 변경 시 허위 내용의 등록</li>
                            <li>타인의 정보 도용</li>
                            <li>"헤이븐호텔 홈페이지"에 게시된 정보의 변경</li>
                            <li>"헤이븐호텔 홈페이지"가 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시</li>
                            <li>"헤이븐호텔 홈페이지" 기타 제3자의 저작권 등 지적재산권에 대한 침해</li>
                            <li>"헤이븐호텔 홈페이지" 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위</li>
                            <li>외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 공개 또는 게시하는 행위</li>
                            <li>기타 법에 저촉되는 행위 및 "헤이븐호텔 홈페이지"가 부적절하다고 판단하는 행위</li>
                        </ol>
                        <h5>제21조 연결 몰 과 피연결 몰 간의 관계</h5>
                        <ol class="decimal">
                            <li>상위 몰과 하위 몰이 하이퍼 링크(예: 하이퍼 링크의 대상에는 문자, 그림 및 동화상 등이 포함됨) 방식 등으로 연결된 경우, 전자를 연결 몰(웹 사이트)이라 하고 후자를 피연결 몰(웹 사이트) 이라고 합니다.</li>
                            <li>연결 몰은 피연결 몰이 독자적으로 제공하는 재화 등에 의하여 이용자와 행하는 거래에 대해서 보증책임을 지지 않는다는 뜻을 연결 몰의 초기화면 또는 연결되는 시점의 팝업화면으로 명시한 경우에는 그 거래에 대한 보증책임을 지지 않습니다.</li>
                        </ol>
                        <h5>제22조 저작권의 귀속 및 이용제한</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"가 작성한 저작물에 대한 저작권 및 기타 지적재산권은 "헤이븐호텔 홈페이지"에 귀속합니다.</li>
                            <li>이용자는 "헤이븐호텔 홈페이지"를 이용함으로써 얻은 정보 중 "헤이븐호텔 홈페이지"에게 지적재산권이 귀속된 정보를 "헤이븐호텔 홈페이지"의 사전 승낙 없이 복제, 송신, 출판, 배포, 방송, 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 약정에 따라 이용자에게 귀속된 저작권을 사용하는 경우 당해 이용자에게 통보하여야 합니다.</li>
                        </ol>
                        <h5>제23조 분쟁해결</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"는 이용자가 제기하는 정당한 의견이나 불만을 반영하고, 그 피해를 보상처리하기 위하여 피해보상처리기구를 설치, 운영합니다.</li>
                            <li>"헤이븐호텔 홈페이지"는 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자께 그 사유와 처리일정을 즉시 통보해 드립니다.</li>
                            <li>"헤이븐호텔 홈페이지"와 이용자간에 발생한 전자상거래 분쟁과 관련하여 이용자의 피해구제신청이 있는 경우에는 공정거래위원회 또는 시, 도지사가 의뢰하는 분쟁조정기관의 조정에 따를 수 있습니다.</li>
                            <li></li>
                        </ol>
                        <h5>제24조 재판권 및 준거법</h5>
                        <ol class="decimal">
                            <li>"헤이븐호텔 홈페이지"와 이용자간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없는 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에서 제기합니다.</li>
                            <li>"헤이븐호텔 홈페이지"와 이용자간에 제기된 전자상거래 소송에는 한국법을 적용합니다.</li>
                        </ol>
                    </div>
                </div>
                <div class="provision02">
                    <h4>개인정보수집 및 이용에 대한 동의<span class="red"> (필수)</span></h4>
                    <label for="chk02" class="chkBox">
                        <input type="checkbox" id="chk02">
                        <i class="checkIcon"></i>
                        동의합니다.
                    </label>
                    <div class="agreeTxt">
                        <p>헤이븐호텔은 귀하의 개인정보를 소중하게 생각하며, 서비스제공을 위해 개인정보보호법 제 15조 및 제22조에 따라 귀하의 동의를 받고자 합니다.</p>
                        <h5>[개인정보 수집 및 이용 동의]</h5>
                        <ol class="decimal">
                            <li>수집 및 이용 목적 : 회원제 서비스에 따른 본인 확인 절차, 고객 공지 사항 전달 및 불만 처리 등</li>
                            <li>
                                수집 항목
                                <ol class="pl">
                                    <li>- 필수항목 : 아이디, 비밀번호, 이름, 생년월일, 휴대폰번호, Email</li>
                                    <li>- 선택항목 : 주소, 직업, 결혼기념일, 관심 시설, 관심 분야</li>
                                </ol>
                            </li>
                            <li>
                                개인정보 휴면처리 회원의 개인정보 이용 기준에 대한 유효기간을 아래와 같이 정하며, 최종 이용 시점을 기산일로 하여 유효기간 경과 이후 회원의 개인정보를 분리 저장/관리 또는 파기합니다.
                                <ol class="pl">
                                    <li>1) 유효기간: 1년</li>
                                    <li>2) 서비스 이용 기준: 멤버십 서비스 이용(회원인증, 홈페이지 로그인, 포인트 조회, 포인트 적립, 포인트 사용, 포인트 조정, 포인트 전환 등), 카드 발급, 호텔 상품 및 서비스 구매, 정보 변경 등</li>
                                    <li>
                                        3) 유효기간 경과 이후: 분리 저장 및 관리
                                        <ol class="pl">
                                            <li>- 분리 저장 및 관리: 파기에 준하는 조치의 일환으로, 장기 미 이용자의 개인정보를 일반회원의 개인정보 DB와 분리하여 별도 저장/관리하고, 일반 직원의 접근 권한을 제한합니다.</li>
                                            <li>- 유효기간 도래 통지: 유효기간 만료 30일 전까지 e-mail, SMS 등으로 개인정보가 파기 또는 분리 및 보관되는 사실 및 일시, 개인정보 항목을 해당 회원에게 통지합니다.</li>
                                            <li>- 유효기간 경과 이후 회원이 멤버십 서비스를 이용할 경우, 이를 재이용 요청으로 간주하여 분리 저장/관리 상태에서 정상 이용 상태로 원복합니다.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                개인정보 보유 기간 및 파기시점 회원의 개인정보는 개인정보처리방침 제 2조 개인정보 수집 및 이용 목적의 보유기간이 달성되거나, 고객이 별도 요청할 경우 파기하는 것을 원칙으로 합니다. 다만 아래의 경우 관련 근거에 의해 개인 정보를 보존합니다.
                                <ol class="pl">
                                    <li>- 보유·이용 기간: 상거래이력</li>
                                    <li>- 보존 근거: 상법, 전자상거래 등에서의 소비자보호에 관한 법률</li>
                                    <li>
                                        - 보존기간
                                        <ol class="pl">
                                            <li>ㆍ소송이나 법적 분쟁 관련 사항의 근거 자료에 관한 기록: 10년</li>
                                            <li>ㆍ계약 또는 청약 철회 등에 관한 기록 : 5년</li>
                                            <li>ㆍ소비자의 불만 또는 분쟁처리에 관한 기록: 3년(전자상거래 등의 소비자 보호에 관한 법률</li>
                                            <li>ㆍ신용정보의 수집처리 및 이용 등에 관한 기록: 3년(신용정보의 이용 및 보호에 관한 법률) 요금의 과납 또는 미납이 있을 경우와 분쟁이 있을 경우 해결시 까지 보유합니다.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <li>귀하께서는 본 개인정보 수집 및 이용 동의에 대해 거부할 권리가 있으며, 동의 거부 시 회원가입에 제한이 있을 수 있음을 알려드립니다.</li>
                        </ol>
                    </div>
                </div>
                <div class="provision03">
                     <h4>개인정보 마케팅활용에 관한 사항 동의 (선택)</h4>
                    <label for="chk03" class="chkBox">
                        <input type="checkbox" id="chk03">
                        <i class="checkIcon"></i>
                        동의합니다.
                    </label>
                    <div class="agreeTxt">
                        <h5>개인정보 마케팅 활용에 관한 사항</h5>
                        <ul class="disc">
                            <li>이용 항목 : 휴대전화번호, 주소, 이메일</li>
                            <li>이용 목적 : 상품 및 서비스 소개</li>
                            <li>보유ㆍ이용 기간 : 회원의 개인정보는 개인정보의 수집 및 이용목적이 달성되면 파기하는 것을 원칙으로 합니다.</li>
                        </ul>
                        <p>수집하는 개인정보의 이용기간은 회원가입일로부터 탈퇴시 까지입니다. 상세사항은 홈페이지 개인정보처리방침을 참조바랍니다.</p>
                        <p>※ 위 사항에 대한 동의를 거부할 수 있으나, 이에 대한 동의가 없을 경우 당사의 홍보 및 마케팅 정보를 제공 받지 못할 수 있음을 알려드립니다.</p>
                    </div>
                </div>
            </div>
            <div class="line"><a href="#joinStep2" id="nextBtn" class="step1">다음</a></div>
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