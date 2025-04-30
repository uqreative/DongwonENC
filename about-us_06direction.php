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
                <a class="nav-link" href="./about-us_05corp-trend.php">기업동향</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./about-us_06direction.php">찾아오시는&nbsp;길</a>
            </li>
        </ul>
    </div>
</div>

<main class="about-direction">
    <section class="sub-menu_tittle">

        <h4 data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">찾아오시는 길
        </h4>
        <h3 data-aos="fade-up" data-aos-delay="450" data-aos-easing="ease-in-out" data-aos-duration="700"
            data-aos-anchor-placement="top-bottom">Direction</h3>

    </section>

    <section>
        <div class="container"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-anchor-placement="top-center">  

            <div class="map" id="map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1594818698461" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>
                <!--
                2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
    
                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1594818698461",
                        "key" : "2zaza",
                        //"mapWidth" : "600",
                        "mapHeight" : "400"
                    }).render();
                </script>
            </div>



            <!-- <a href="https://map.kakao.com/?urlX=604365&urlY=772943&urlLevel=3&map_type=TYPE_MAP&map_hybrid=false" target="_blank">
                <img width="504" height="310" src="https://map2.daum.net/map/mapservice?FORMAT=PNG&SCALE=2.5&MX=604365&MY=772943&S=0&IW=504&IH=310&LANG=0&COORDSTM=WCONGNAMUL&logo=kakao_logo" style="border:1px solid #ccc;">
            </a>
            <div class="hide" style="overflow:hidden;padding:7px 11px;border:1px solid #dfdfdf;border-color:rgba(0,0,0,.1);border-radius:0 0 2px 2px;background-color:#f9f9f9;width:482px;">
                <strong style="float: left;">
                    <img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵">
                </strong>
                <div style="float: right;position:relative">
                    <a style="font-size:12px;text-decoration:none;float:left;height:15px;padding-top:1px;line-height:15px;color:#000" target="_blank" href="https://map.kakao.com/?urlX=604365&urlY=772943&urlLevel=3&map_type=TYPE_MAP&map_hybrid=false">지도 크게 보기</a>
                </div>
            </div> -->


            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3216.34428304117!2d127.46226627627844!3d36.27969539686676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35654f616e4db1a1%3A0xc84e7009047deb32!2s61%20Sannae-ro%201305beon-gil%2C%20Dong-gu%2C%20Daejeon%2C%20South%20Korea!5e0!3m2!1sen!2sid!4v1706604794258!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>
        <div class="container mt-5">
            <div class="row border border-light-subtle pb-4 pb-lg-0" style="margin-bottom:100px;">
                <div class="col-lg-9">
                    <address class="p-4 mb-0"  data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-in-out" data-aos-duration="400" data-aos-anchor-placement="top-bottom">
                        <div class="d-flex gap-3">
                            <h5>ADD</h5>
                            <p class="mb-0">34705, 대전광역시 동구 산내로 1305번길 61, 2층(낭월동)</p>
                        </div>
                        <div class="d-flex gap-3">
                            <h5>TEL</h5>
                            <p class="mb-0">042-823-0799</p>
                        </div>
                        <div class="d-flex gap-3">
                            <h5>FAX</h5>
                            <p class="mb-0">042-527-0112</p>
                        </div>
                        <div class="d-flex gap-3">
                            <h5>E-MAIL</h5>
                            <p class="mb-0">dwenc01@hanmail.net</p>
                        </div>
                    </address>
                </div>
                <div class="col-lg-3">
                    <div class="h-100 d-flex justify-content-center "  data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-anchor-placement="top-bottom">
                        <a href="http://kko.to/dwxRMEfD0" class="btn btn-outline-secondary btn-lg rounded-0 align-self-center py-3 px-5" target="blank">지도보기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("./inc/footer.php")?>