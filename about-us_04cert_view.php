<?php include("./inc/top.html")?>
<?php include("./inc/header.php")?>


<div class="hero about-us">
    <div class="text-center">
        <h3>회사소개</h3>
        <h4 class="text-white fw-semibold">고객의 20년, 행복할 수 있도록 동원이엔씨가 책임지겠습니다.</h4>
    </div>
</div>

<div class="container-fluid sub-menu">
    <div class="container">
        <ul class="nav nav-pills nav-fill justify-content-start justify-content-lg-center flex-nowrap">
            <li class="nav-item">
                <a class="nav-link" href="./about-us_01greetings.php">인사말</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about-us_02history.php">회사연혁도</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about-us_03org-cart.php">조직도</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./about-us_04cert.php">보유인증서</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about-us_05corp-trend.php">기업동향</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about-us_06direction.php">찾아오시는&nbsp;길</a>
            </li>
        </ul>
    </div>
</div>

<main class="about-cert">

    <section class="sub-menu_tittle">

        <h4 data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">보유인증서
        </h4>
        <h3 data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">Certificate</h3>

    </section>

    <section class="cert-gallery"  data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700" >

    <div class="container">
            <h2>[동원이엔씨] 특허증-발전량 가변형 발전기</h2>
            <div class="row mt-3 ">
                <div class="col-lg-6">
                    <div class="d-flex gap-5">
                        <p>작성일</p>
                        <p>2021-03-15 20:47:50</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex gap-5">
                        <p>조회수</p>
                        <p>1213</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center mb-5">
                <img src="./images/content/cert/001_certificate.png" class="img-fluid mt-4" alt="">
            </div>

            
            <table class="bbsView">
                <caption>게시판 상세보기</caption>
                <colgroup>
                    <col data-view="th" style="width:15%"/>
                    <col data-view="td" style="width:35%"/>
                    <col data-view="th" style="width:15%"/>
                    <col data-view="td" style="width:35%"/>
                </colgroup>
                <tbody>
                    <!-- 첨부파일이 있는경우 -->
                    <tr>
                        <th scope="row" data-view="file">첨부파일</th>
                        <td colspan="3">
                            <!-- 파일목록 -->
                            <ul class="list_file">
                                <li>
                                    <a href="#">
                                        <span>
                                            <i class="ri-file-download-line ri-xl"></i>
                                        </span> 
                                        특허증2 변환.png
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                        
                </tbody>
            </table>
            
        </div>

        <div class="container mt-5">
            <!-- 이전/다음 -->
            <table class="bbsView page">
                <caption>이전 다음 글보기</caption>
                <colgroup>
                    <col data-view="th" style="width:15%" />
                    <col data-view="td" style="width:85%" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">이전글</th>
                        <td><a
                                href="./about-us_04cert_view.php">특허증-누수방지 지붕 설치용 브라켓</a></td>
                    </tr>
                    <tr>
                        <th scope="row">다음글</th>
                        <td><a href="#"></a></td>
                    </tr>
                </tbody>
            </table>
            <!-- //이전/다음 -->
            
            <!-- 버튼 -->
            <div class="btn_area">
                <a href="./about-us_04cert.php" class="button">목록</a>
            </div>
        </div>

    </section>

</main>

<?php include("./inc/footer.php")?>