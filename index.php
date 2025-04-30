<?php include("./inc/top.html")?>
<?php include("./inc/header.php")?>
<?php
session_start();
function fetchDataFromAPI($url, $itemCallback) {

    $cachedData = isset($_SESSION['smpland_api_cache']) ? json_decode($_SESSION['smpland_api_cache'], true) : null;
    if ($cachedData !== null && isset($cachedData[$url])) {
        return array("data" => $cachedData[$url], "fromCache" => true);
    }

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);
    curl_close($ch);

    $xmlData = simplexml_load_string($response);

    if ($xmlData === false) {
        echo "Error parsing XML data.";
        return null;
    }

    $items = $xmlData->body->items->item;

    $data = array();

    foreach ($items as $item) {
        $data[] = $itemCallback($item);
    }

    $jsonData = json_encode($data, 128);

    $_SESSION['smpland_api_cache'] = json_encode(array("data" => $jsonData));

    return array("data" => $jsonData, "fromCache" => false);

}
function fetchDataFromAPIJeju($url, $itemCallback) {

    $cachedData3 = isset($_SESSION['smpjeju_api_cache']) ? json_decode($_SESSION['smpjeju_api_cache'], true) : null;
    if ($cachedData3 !== null  && isset($cachedData3[$url])) {
        return array("data" => $cachedData3[$url], "fromCache" => true);
    }

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);
    curl_close($ch);

    $xmlData = simplexml_load_string($response);

    if ($xmlData === false) {
        echo "Error parsing XML data.";
        return null;
    }

    $items = $xmlData->body->items->item;

    $data = array();

    foreach ($items as $item) {
        $data[] = $itemCallback($item);
    }

    $jsonData = json_encode($data, 128);

    $_SESSION['smpjeju_api_cache'] = json_encode(array("data" => $jsonData));

    return array("data" => $jsonData, "fromCache" => false);

}
function fetchDataFromJson($url, $itemCallback) {

    $cachedData2 = isset($_SESSION['rec_api_cache']) ? json_decode($_SESSION['rec_api_cache'], true) : null;

    if ($cachedData2 !== null && isset($cachedData2[$url])) {
        return array("data" => $cachedData2[$url], "fromCache" => true);
    } else {
        
    }

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $response = curl_exec($ch);

    curl_close($ch);

    $jsonData = json_decode($response, true);

    // if ($jsonData === null) {
    //     echo "Error decoding JSON data.";
    //     return null;
    // }

    if (!isset($jsonData['response'])) {
        echo "Error: 'response' key not found in JSON data.";
        return null;
    }

    $response = $jsonData['response'];

    if (!isset($response['header']) || !isset($response['body'])) {
        echo "Error: 'header' or 'body' key not found in 'response' data.";
        return null;
    }

    if (!isset($response['body']['items']) || !isset($response['body']['items']['item'])) {
        echo "Error: 'items' key not found in 'body' data.";
        return null;
    }

    $items = $response['body']['items']['item'];

    $data = array();

    foreach ($items as $item) {
        $data[] = call_user_func($itemCallback, $item);
    }

    $jsonData = json_encode($data);

    $_SESSION['rec_api_cache'] = json_encode(array("data" => $jsonData));

    return array("data" => $jsonData, "fromCache" => false);
}

function processFirstAPIItem($item) {
    return array(
        "tradeDay" => (string) $item->tradeDay,
        "tradeHour" => (int) $item->tradeHour,
        "areaCd" => (int) $item->areaCd,
        "smp" => (float) $item->smp
    );
}

function processSecondAPIItem($item) {
    return array(
       "clsPrc" => isset($item['clsPrc']) ? (float) $item['clsPrc'] : 0,
       "bzDd" => isset($item['bzDd']) ? (string) $item['bzDd'] : "",
       "jejuOrdCnt" => isset($item['jejuOrdCnt']) ? (float) $item['jejuOrdCnt'] : 0,
       "landOrdCnt" => isset($item['landOrdCnt']) ? (float) $item['landOrdCnt'] : 0,
       "landAvgPrc" => isset($item['landAvgPrc']) ? (float) $item['landAvgPrc'] : 0,
       "landHgPrc" => isset($item['landHgPrc']) ? (float) $item['landHgPrc'] : 0,
       "landLwlmtPrc" => isset($item['landLwlmtPrc']) ? (float) $item['landLwlmtPrc'] : 0,
       "jejuLwlmtPrc" => isset($item['jejuLwlmtPrc']) ? (float) $item['jejuLwlmtPrc'] : 0,
       "jejuAvgPrc" => isset($item['jejuAvgPrc']) ? (float) $item['jejuAvgPrc'] : 0,
       "jejuHgPrc" => isset($item['jejuHgPrc']) ? (float) $item['jejuHgPrc'] : 0,
       "rn" => isset($item['rn']) ? (int) $item['rn'] : 0,
  
    );
}

$url1 = 'https://openapi.kpx.or.kr/openapi/smp1hToday/getSmp1hToday?' . urlencode('serviceKey') . '=/3cTiA0/4RUv74qiwY4aZMKQQYUJFHtMC8uSh4bUc3mV2e9plDS3AXfcFlOOE1JpQgm0VCYRLovBnScnqMtdAA==&' . urlencode('areaCd') . '=1';
$url2 = 'https://apis.data.go.kr/B552115/RecMarketInfo2/getRecMarketInfo2?serviceKey=pSW8QJCUkD7kqRXTeTt5Q09wqoahnlOXPVFEyj4T0hdAiuOAu6RSOgu7WwMAFSvaA7/utKJRrPXMBSIhgI95sg==&pageNo=67&numOfRows=10&dataType=json';

$jsonData1 = fetchDataFromAPI($url1, 'processFirstAPIItem');
$jsonData2 = fetchDataFromJson($url2, 'processSecondAPIItem');


if ($jsonData1 !== null) {
    $dataFetchedFromCache = $jsonData1['fromCache'];
    $jsonData1 = $jsonData1['data'];
    // echo "JSON data from URL 1: $jsonData1";
    echo "<script>console.log('Data SMP fetched from cache: $dataFetchedFromCache')</script>";
}

if ($jsonData2 !== null) {
    $dataFetchedFromCache = $jsonData2['fromCache'];
    $jsonData2 = $jsonData2['data'];
    // echo "JSON data from URL 2: $jsonData2";
    echo "<script>console.log('Data REC fetched from cache: $dataFetchedFromCache')</script>";
}


if (isset($_POST['action']) && $_POST['action'] === 'fetchDataFromAPIJeju') {
    if (isset($_POST['url']) && isset($_POST['itemCallback'])) {
        $url = $_POST['url'];
        $itemCallback = $_POST['itemCallback'];
        $jsonData = fetchDataFromAPIJeju($url, $itemCallback);
        // echo json_encode($jsonData);
    } else {
        echo json_encode(array("error" => "Missing parameters"));
    }
}

?>
<div class="hero main-page">

<div class="swiper homepage-main-carousel">

    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="text-hero text-center">
          <h3>태양광 문화를 이끄는 기업 동원이엔씨</h3>
          <h4 class="text-white fw-semibold">고객의 20년, 행복할 수 있도록 동원이엔씨가 책임지겠습니다.</h4>
        </div>
        <img src="./images/carousel_hero_index_02.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <div class="text-hero text-center">
          <h3>태양광 문화를 이끄는 기업 동원이엔씨</h3>
          <h4 class="text-white fw-semibold">전문가의 전략적 분석, 고객의 최대 이익을 원칙으로 합니다.</h4>
        </div>
        <img src="./images/carousel_hero_index_01.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <div class="text-hero text-center">
          <h3>태양광 문화를 이끄는 기업 동원이엔씨</h3>
          <h4 class="text-white fw-semibold">고객의 20년, 행복할 수 있도록 동원이엔씨가 책임지겠습니다.</h4>
        </div>
        <img src="./images/carousel_hero_index_03.jpg" alt="">
      </div>

    </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

  </div>

</div>

<main class="main-page-content">
  <section class="projects">
    <div class="container tittle-container">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h3 class="section-tittle">Projects</h3>
          <h5 class="section-sub-tittle">태양광 문화를 이끄는 동원이엔씨 프로젝트 실적</h5>
        </div>
        <a href="./construction_01land.php" class="btn btn-outline-dark more-btn mt-1 mt-lg-3">MORE</a>
      </div>
  
    </div>
    <div class="container-fluid container-slider px-lg-0">
  
      <section id="project-list-container" class="splide project-slider" aria-label="Basic Structure">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-1 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">온누리 태양광발전소/1.4MW</p>
                  <div class="d-flex flex-row align-items-center  align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" class="d-block" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-2 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">한동1호 태양광발전소/500kW</p>
                  <div class="d-flex flex-row align-items-center   align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-3 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">산, 마루, 신라 태양광발전소/300kW</p>
                  <div class="d-flex flex-row  align-items-center    align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-4 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">썬파워일 태양광발전소/500kW</p>
                  <div class="d-flex flex-row align-items-center    align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-5 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">무주 발전소 / 3.3mW</p>
                  <div class="d-flex flex-row align-items-center  align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
            <li class="splide__slide">
      
              <a href="./construction_01land_view.php">
                <div
                  class="project-item-6 px-4 d-flex flex-column flex-md-row flex-lg-row justify-content-end justify-content-md-between justify-content-lg-between align-items-md-end align-items-lg-end">
                  <p class="text-white mb-1 mb-md-4 mb-lg-4">마강리 발전소 / 2.4mW</p>
                  <div class="d-flex flex-row align-items-center  align-items-lg-center gap-1 gap-lg-2 mb-3 mb-lg-4">
                    <div>
                      <img src="./images/icon-location_product-section.svg" width="20" height="26" alt="">
                    </div>
                    <p class="text-white mb-0">경북 구미 옥성면</p>
                  </div>
                </div>
              </a>
      
            </li>
          </ul>
        </div>
      </section>
  
    </div>
  </section>

  <section class="business">
    <div class="container tittle-container">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h3 class="section-tittle">Business</h3>
          <h5 class="section-sub-tittle">동원이엔씨는 고객의 20년을 행복할 수 있도록 다양한 사업으로 최선을 다하고 있습니다.</h5>
        </div>
        <a href="./business_01product.php" class="btn btn-outline-dark more-btn mt-1 mt-lg-3">MORE</a>
      </div>
    </div>
    <div class="container-fluid business-item">
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
        <div class="col  col-lg p-1 p-lg-0 m-0">
          <img src="./images/busines-01.jpg" class="img-fluid" alt="image-business-section-01">
        </div>
        <div class="col  col-lg p-1 p-lg-0 m-0">
          <img src="./images/busines-02.jpg" class="img-fluid" alt="image-business-section-02">
        </div>
        <div class="col  col-lg p-1 p-lg-0 m-0">
          <img src="./images/busines-03.jpg" class="img-fluid" alt="image-business-section-03">
        </div>
        <div class="col  col-lg p-1 p-lg-0 m-0">
          <img src="./images/busines-04.jpg" class="img-fluid" alt="image-business-section-04">
        </div>
        <div class="col  col-lg p-1 p-lg-0 m-0">
          <img src="./images/busines-05.jpg" class="img-fluid" alt="image-business-section-05">
        </div>
      </div>
    </div>
  </section>

  <section class="information">
        <div class="container section-tittle">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3 class="section-tittle mb-0">SMP/REC <span>정보</span></h3>
                </div>
                <select id="datasetSelect" class="form-select w-auto h-auto mt-1" aria-label="information-option">
                    <option value="default" selected="">통합</option>
                    <option value="land">육지</option>
                    <option value="jeju">제주</option>
                </select>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <hr>
                    <div class="row information-item">
                        <div class="col-lg-6 smp-item-container">
                            <h5>SMP</h5>
                            <p class="mb-0"><span id="smpDate"></span> (윈)</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-row gap-lg-3 justify-content-end mt-4 mt-lg-0">
                                <h3><span id="smpPrice"></span></h3>
                            </div>
                            <p class="text-end mb-0">윈 /kWh</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row information-item">
                        <div class="col-lg-6">
                            <h5>REC</h5>
                            <p class="mb-0"><span id="recDate"></span> (목)</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-row gap-lg-3 justify-content-end mt-4 mt-lg-0">
                                <h3><span id="recPrice"></span></h3>
                            </div>
                            <p class="text-end mb-0">윈 /kWh</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row information-item">
                        <div class="col-lg-6">
                            <h5>SMP+ (RECX1.0)</h5>
                              <select class="form-select w-auto h-auto " aria-label="REC option">
                                <option value="REC 가중지 0.8" selected>REC 가중지 0.8</option>
                                <option value="REC 가중지 1.0" selected>REC 가중지 1.0</option>
                                <option value="REC 가중지 1.2" selected>REC 가중지 1.2</option>
                                <option value="REC 가중지 1.5" selected>REC 가중지 1.5</option>
                              </select>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-row gap-lg-3 justify-content-end mt-4 mt-lg-0">
                                <h3>80,299</h3>
                            </div>
                            <p class="text-end mb-0">윈 /kWh</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-6">
                    <div class="h-100 d-flex justify-content-center align-items-center mt-4 mt-lg-0 graphic-chart">
                    
                        <div class="w-100 ms-0 ms-lg-5 px-1 px-lg-2">
                            <canvas id="myChart" width="540" height="540"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="online-inquiry">
    <div class="container-fluid inquiry-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex">
              <div class="text-center">
                <h3>컨설팅 견적문의</h3>
                <a href="#" type="button" class="btn btn-light text-center">견적문의</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="container tittle-container">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h3 class="section-tittle">태양광발전 바로알기</h3>
        </div>
        <a href="./solar-power_blog.php" class="btn btn-outline-dark more-btn mt-3">MORE</a>
      </div>
    </div>

    <div class="container mt-3">
      
    
    <section id="news-list" class="splide mt-2 mt-lg-5" aria-label="Basic Structure ">
      
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
          <img src="./images/icon-left-arrow_news.svg" alt="">
        </button>
        <button class="splide__arrow splide__arrow--next">
          <img src="./images/icon-right-arrow_news.svg" alt="">
        </button>
      </div>
      
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="splide__slide__container">
              <div class="row">
                <div class="col-lg-2 order-last order-lg-first ">
                  <div class="card news">
                    <div class="card-body">
                      <div class="h-100 d-flex flex-column align-items-start ">
                        <div>
                          <p class="card-text">(주)동원이엔씨는 전문가의 전략적 분석, 고객의 최대 이익을 원칙으로 합니다.</p>
                        </div>
                        <div class="mt-auto w-100">
                          <p class="pt-2 mb-0 border-top">2023/12/18</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 order-first order-lg-last">
                  <img src="./images/news03.jpg" alt="">
                </div>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="splide__slide__container">
              <div class="row">
                <div class="col-lg-2 order-last order-lg-first ">
                  <div class="card news">
                    <div class="card-body">
                      <div class="h-100 d-flex flex-column align-items-start ">
                        <div>
                          <p class="card-text">(주)동원이엔씨는 전문가의 전략적 분석, 고객의 최대 이익을 원칙으로 합니다.</p>
                        </div>
                        <div class="mt-auto w-100">
                          <p class="pt-2 mb-0 border-top">2023/12/18</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 order-first order-lg-last">
                  <img src="./images/news02.jpg" alt="">
                </div>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="splide__slide__container">
              <div class="row">
                <div class="col-lg-2 order-last order-lg-first ">
                  <div class="card news">
                    <div class="card-body">
                      <div class="h-100 d-flex flex-column align-items-start ">
                        <div>
                          <p class="card-text">(주)동원이엔씨는 전문가의 전략적 분석, 고객의 최대 이익을 원칙으로 합니다.</p>
                        </div>
                        <div class="mt-auto w-100">
                          <p class="pt-2 mb-0 border-top">2023/12/18</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 order-first order-lg-last">
                  <img src="./images/news01.jpg" alt="">
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    </div>
  </section>

  <section class="related-sites">
    <div class="container">
      <h3>관련사이트</h3>
      <div id="related-site_slider" class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="./images/icon-left_related-site.svg" height="32px" alt="">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="./images/icon-right_related-site.svg" height="32px" alt="">
          </button>
        </div>

        <div class="splide__track mt-4">
          <ul class="splide__list">
            <li class="splide__slide">
              <img src="./images/related-site-01.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-02.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-03.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-04.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-05.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-06.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-07.jpg" class="img-fluid " alt="">
            </li>
            <li class="splide__slide">
              <img src="./images/related-site-08.jpg" class="img-fluid " alt="">
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>
</main>


<?php include("./inc/footer.php")?>