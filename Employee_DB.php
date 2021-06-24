

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type'content='text/html; charset=utf-8'>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h5 {
            display: block;
            margin-block-start: 0.20em;
            margin-block-end: 0.20em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }
    </style>


</head>
<body>
<div class="container">
    <div class="row justify-content-center">

            <h1><img src="Image/k-move.png" width="320px">구직자 글로벌 인재 DB 등록</h1>

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                     <h5>안녕하세요? KOTRA 시드니무역관 K-Move 센터입니다.</h5>
                    <br/>
                     <h6>한국 청년의 호주 취업을 지원하는 KOTRA 시드니 K-Move 센터에서 관리하는 아래 시드니글로벌인재DB에 등록해 주시면 구인공고 및 취업지원 행사 시에 안내메일을 드리고 있습니다.</h6>
                     <h6>가입하셔서 호주 취업 정보에 보다 가까워 지시기를 바랍니다. 감사합니다.^^ </h6>
                  </div>
                        <br />
                    <div class="card-body">
                    <form name="contact-form" action="config/config.php" method="post" >
                        <div class="form-group row">
                            <label for="이름" class="col-sm-2 col-form-label">한글이름<span>*</span> </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" ID="이름" name="이름" placeholder="예) 홍길동" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="연락처" class="col-sm-2 col-form-label">휴대전화<span>*</span></label>
                            <div class="col-sm-10">
                            <input type="Number" class="form-control" ID="연락처" name="연락처" placeholder="예) 0400 000 000" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="이메일" class="col-sm-2 col-form-label">Email adress<span>*</span></label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" ID="이메일" name="이메일" placeholder="예) xxx@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="나이" class="col-sm-2 col-form-label">구직자 연령대<span>*</span></label>
                            <div class="col-sm-10">
                            <select id="나이" name="나이" class="form-select" aria-label="Default select example"required>
                                <option selected >필수 선택 사항</option>
                                <option value="20세 미만">20세 미만</option>
                                <option value="20세-24세">20세-24세</option>
                                <option value="25세-29세">25세-29세</option>
                                <option value="30세-34세">30세-34세</option>
                                <option value="35세-39세">35세-39세</option>
                                <option value="40세 이상">40세 이상</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="생년월일" class="col-sm-2 col-form-label">생년월일<span>*</span></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-select" id="생년월일" name="생년월일" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="거주지역" class="col-sm-2 col-form-label">구직자 현재 거주지역<span>*</span></label>
                            <div class="col-sm-10">
                            <select id="거주지역" name="거주지역" class="form-select" aria-label="Default select example" required>
                                <option selected>필수 선택 사항</option>
                                <option value="시드니">시드니</option>
                                <option value="브리즈번">브리즈번</option>
                                <option value="멜번">멜번</option>
                                <option value="기타">호주/기타지역</option>
                                <option value="한국">한국</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="비자" class="col-sm-2 col-form-label">현재 보유 비자타입<span>*</span></label>
                            <div class="col-sm-10">
                            <select id="비자" name="비자" class="form-select" aria-label="Default select example" required>
                                <option selected>필수 선택 사항</option>
                                <option value="졸업생비자">졸업생비자</option>
                                <option value="워킹홀리데이비자">워킹홀리데이 비자</option>
                                <option value="파트너비자">파트너비자</option>
                                <option value="학생비자">학생비자</option>
                                <option value="파트너비자">파트너비자</option>
                                <option value="영주권/시민권">영주권/시민권</option>
                                <option value="기타">기타</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="비자만료일" class="col-sm-2 col-form-label">비자 만료일</label>
                            <div class="col-sm-10">
                            <input type="Text" class="form-control" ID="비자만료일" name="비자만료일" placeholder="단기비자 소시자일 경우만 예) 2022년 10월">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="전공" class="col-sm-2 col-form-label">전공 <span>*</span></label>
                            <div class="col-sm-10">
                            <select id="전공" name="전공" class="form-select" aria-label="Default select example" required>
                                <option selected>필수 선택 사항</option>
                                <option value="IT">IT</option>
                                <option value="회계">회계</option>
                                <option value="디자인/마케팅">디자인/마케팅</option>
                                <option value="엔지니어링">엔지니어링</option>
                                <option value="법/외교">법/외교</option>
                                <option value="요리">요리</option>
                                <option value="건축">건축</option>
                                <option value="기타">기타 </option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="경력" class="col-sm-2 col-form-label">총 경력<span>*</span></label>
                            <div class="col-sm-10">
                            <select id="경력" name="경력" class="form-select" aria-label="Default select example" required>
                                <option selected>필수 선택 사항</option>
                                <option value="신입">신입</option>
                                <option value="1년 미만">1년 미만</option>
                                <option value="1년 이상~2년 미만">1년 이상~2년 미만</option>
                                <option value="2년 이상~3년 미만">2년 이상~3년 미만</option>
                                <option value="3년 이상">3년 이상</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="경력세부사항" class="col-sm-2 col-form-label">경력 세부사항</label>
                            <div class="col-sm-10">
                            <input type="Text" class="form-control" ID="경력세부사항" name="경력세부사항" placeholder="예) A기업 서울본사 마케팅팀 인턴경력 1년, B기업 ....(자세히 부탁 드립니다)" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="희망직종" class="col-sm-2 col-form-label">취업 희망분야<span>*</span></label>
                            <div class="col-sm-10">
                            <select id="희망직종" name="희망직종" class="form-select" aria-label="Default select example" required>
                                <option selected>필수 선택 사항</option>
                                <option value="사무/관리직">사무/관리직</option>
                                <option value="영업직/마케팅">영업직/마케팅</option>
                                <option value="IT">IT</option>
                                <option value="요리서비스직">요리서비스직</option>
                                <option value="기타서비스직">기타서비스직</option>
                                <option value="생산직">생산직</option>
                                <option value="연구직">연구직</option>
                                <option value="기능직">기능직</option>
                                <option value="법/행정">법/행정</option>
                                <option value="기타">기타</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="영어능력"class="col-sm-2 col-form-label">영어 능력<span>*</span></label>
                            <div class="col-sm-10">
                            <input type="Text" class="form-control" ID="영어능력" name="영어능력" placeholder="예) IELTS 6.5 or TOEIC 550 or PTE 60" required>
                            </div>
                        </div>
                        <div class="form-group row"">
                            <label for="비고" class="col-sm-2 col-form-label">비고</label>
                            <div class="col-sm-10">
                            <textarea ID="비고" name="비고" class="form-control" cols="28" rows="5" placeholder="※ 비자/전공/ 경력 등 추가 설명 필요 사항들 기입 부탁 드립니다."> </textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit" >등록</button>
                    </form>
            </div>
            <div class="card-footer text-muted"></div>

            </div>
        </div>
    </div>
</div>
</body>
<br />
<br />
<div class="footer">


    <body>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-6 item text">
                        <h5> KOTRA 시드니 무역관 K-MOVE 센터</h5>
                    </div>
                    <div class="col item social"><a href="https://www.facebook.com/kotrasydney/"><i class="icon ion-social-facebook"></i></a><a href="https://www.linkedin.com/in/k-move-sydney-b49a6a134/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.youtube.com/channel/UCD5YEHIb15_n-25_lh9ITC"><i class="icon ion-social-youtube"></i></a><a href="https://www.instagram.com/kotrasydney"><i class="icon ion-social-instagram"></i></a></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</div>

</html>