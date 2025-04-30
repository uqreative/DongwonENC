<?php include("./inc/top.html")?>
<?php include("./inc/header.php")?>


<div class="hero construction">
    <div class="text-center">
        <h3>시공사례</h3>
        <h4 class="text-white fw-semibold">업계의 중심에서 태양광 문화를 이끄는 기업 동원이엔씨입니다.</h4>
    </div>
</div>

<div class="container-fluid sub-menu">
    <div class="container">
        <ul class="nav nav-pills nav-fill justify-content-center justify-content-lg-center flex-nowrap">
            <li class="nav-item">
                <a class="nav-link active" href="./construction_01land.php">토지</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./construction_02building.php">건물 태양광</a>
            </li>
        </ul>
    </div>
</div>


<main class="construction-land">
    <section class="sub-menu_tittle">

        <h4 data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700" >토지
        </h4>
        <h3 data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="700" >Land</h3>

    </section>

    <section class="construction-land__list">
    
        <div class="container" >
            <div class="row row-cols-2 row-cols-md-3 g-2 g-lg-4">
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm h-100">
                            <img src="./images/content/business/thumb_01.jpg" class="card-img-top ratio ratio-4x3"
                                alt="온누리 태양광발전소/1.4MW">
                            <div class="card-body">
                                <h5 class="card-title">온누리 태양광발전소/1.4MW</h5>
                                <p class="card-text">2023-10-05</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/business/thumb_02.jpg" class="card-img-top" alt="한동1호 태양광발전소/500kW">
                            <div class="card-body">
                                <h5 class="card-title">한동1호 태양광발전소/500kW</h5>
                                <p class="card-text">2023-10-05</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/business/thumb_03.JPG" class="card-img-top" alt="산, 마루, 신라 태양광발전소/300kW">
                            <div class="card-body">
                                <h5 class="card-title">산, 마루, 신라 태양광발전소/300kW</h5>
                                <p class="card-text">2022-01-18</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/business/thumb_04.JPG" class="card-img-top" alt="썬파워일 태양광발전소/500kW">
                            <div class="card-body">
                                <h5 class="card-title">썬파워일 태양광발전소/500kW</h5>
                                <p class="card-text">2022-01-18</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/business/thumb_05.JPG" class="card-img-top" alt="무주 발전소 / 3.3mW">
                            <div class="card-body">
                                <h5 class="card-title">무주 발전소 / 3.3mW</h5>
                                <p class="card-text">2021-01-15</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./construction_01land_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/business/thumb_06.jpg" class="card-img-top" alt="마강리 발전소 / 2.4mW">
                            <div class="card-body">
                                <h5 class="card-title">마강리 발전소 / 2.4mW</h5>
                                <p class="card-text">2021-01-15</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="my-5">
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