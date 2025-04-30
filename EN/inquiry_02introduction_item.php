<?php include("./inc/top.html")?>
<?php include("./inc/header.php")?>


<div class="hero inquiry">
    <div class="text-center">
        <h3>컨설팅/견적문의</h3>
        <h4 class="text-white fw-semibold">전문가의 전략적 분석, 고객의 최대 이익 이것이 원칙입니다.</h4>
    </div>
</div>

<div class="container-fluid sub-menu">
    <div class="container">
        <ul class="nav nav-pills nav-fill justify-content-center justify-content-lg-center flex-nowrap">
            <li class="nav-item">
                <a class="nav-link" href="./inquiry_01inquiryform.php">컨설팅/견적문의</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./inquiry_02introduction_item.php">제품소개</a>
            </li>
        </ul>
    </div>
</div>


<main class="business-product">
    <section class="sub-menu_tittle">

        <h4 data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700" >제품소개
        </h4>
        <h3 data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="700" >Introduction of item</h3>

    </section>

    <section class="product__list">
    
        <div class="container"   data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-duration="400" >
            <div class="row row-cols-2 row-cols-md-3 g-2 g-lg-4">
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm h-100">
                            <img src="./images/content/product/product_01.jpg" class="card-img-top"
                                alt="온누리 태양광발전소/1.4MW">
                            <div class="card-body">
                                <h5 class="card-title">한화모듈</h5>
                                <p class="card-text">2020-08-24</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/product/product_02.jpg" class="card-img-top" alt="한동1호 태양광발전소/500kW">
                            <div class="card-body">
                                <h5 class="card-title">트리나 모듈</h5>
                                <p class="card-text">2020-08-24</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/product/product_03.jpg" class="card-img-top" alt="산, 마루, 신라 태양광발전소/300kW">
                            <div class="card-body">
                                <h5 class="card-title">다쓰테크</h5>
                                <p class="card-text">2020-08-24</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/product/product_04.jpg" class="card-img-top" alt="썬파워일 태양광발전소/500kW">
                            <div class="card-body">
                                <h5 class="card-title">썬그로우</h5>
                                <p class="card-text">2020-08-24</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/product/product_01.jpg" class="card-img-top" alt="무주 발전소 / 3.3mW">
                            <div class="card-body">
                                <h5 class="card-title">한화모듈</h5>
                                <p class="card-text">2020-08-24</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="./inquiry_02introduction_item_view.php">
                        <div class="card shadow-sm  h-100">
                            <img src="./images/content/product/product_03.jpg" class="card-img-top" alt="마강리 발전소 / 2.4mW">
                            <div class="card-body">
                                <h5 class="card-title">다쓰테크</h5>
                                <p class="card-text">2020-08-24</p>
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