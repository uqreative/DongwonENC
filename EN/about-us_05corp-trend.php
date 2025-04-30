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
                <a class="nav-link" href="./about-us_04cert.php">보유인증서</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./about-us_05corp-trend.php">기업동향</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about-us_06direction.php">찾아오시는&nbsp;길</a>
            </li>
        </ul>
    </div>
</div>

<main class="about-corp_blog">
    <section class="sub-menu_tittle">

        <h4 data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">기업동향
        </h4>
        <h3 data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">Corporate Trend</h3>

    </section>

    <section class="mb-5">
        <div class="container" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700" >
            <div class="row row-cols-2 row-cols-md-3 g-2 g-lg-4">
                <div class="col">
                    <a href="./about-us_05corp-trend_view.php">
                        <div class="card h-100">
                            <img src="./images/thumbs/blog-list_thumb01.png" class="card-img-top h-100 object-fit-cover" alt=" ">
                            <div class="card-body">
                                <h5 class="card-title">저탄소 주유소 에너지 전환 사업(파일 다운로드 가능)</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">2021-03-15</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./about-us_05corp-trend_view.php">
                        <div class="card h-100">
                            <img src="./images/thumbs/blog-list_thumb02.jpg" class="card-img-top h-100 object-fit-cover" alt=" ">
                            <div class="card-body">
                                <h5 class="card-title">ESS 기술분석 - 파트너십 업체 데스틴파워(주) 임직원 여러분</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">2020-06-25</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-lg-between align-items-lg-center  my-5">
                    <form action="">
                        <input type="hidden" name="board_id" value="board_gallery02" />
                        <input type="hidden" name="start" value="0" />
                        <div class="search_bbs">
                            <!-- 검색 -->
                            <div class="search">

                                <select name="search_key" id="searchType">
                                    <option value="">전체</option>
                                    <option value="title"> 제목</option>
                                    <option value="name">작성자</option>
                                </select>
                                <input type="text" id="keyword" name="keyword" value="">
                                <input type="submit" class="button" value="검색">

                            </div>
                        </div>
                    </form>


                </div>


                <div>
                    <hr style="border-top: dotted 1px;" />
                </div>

                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link btn_first" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link btn_end" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>

        </div>
    </section>

</main>


<?php include("./inc/footer.php")?>