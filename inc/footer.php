<div class="go-to-top position-relative">
  <a href="#" class="btn btn-light position-absolute d-flex gap-1">
    <p class="mb-0">TOP</p>
    <i class="ri-arrow-up-line"></i>
  </a>
</div>

<footer class="container-fluid ">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="row">
          <div class=" col-lg-2">
            <div class="text-center text-lg-start ">
              <img src="./images/footer-logo-white.svg" class="footer-logo" alt="">
            </div>
          </div>
          <div class="col-lg-10">
            <div class="d-flex flex-column flex-lg-row align-items-center align-items-md-center h-100 gap-3 mt-4 mt-lg-0">
              <p class="text-center text-lg-start">㈜동원이엔씨</p>
              <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
              <p class="text-center text-lg-start">대표&nbsp; :&nbsp; 강준호</p> 
              <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
              <p class="text-center text-lg-start">사업자번호&nbsp; :&nbsp; 314-81-91485</p> 
              <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
              <p class="text-center text-lg-start">TEL&nbsp; :&nbsp; 042-823-0799</p> 
              <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
              <p class="text-center text-lg-start">FAX&nbsp; :&nbsp; 042-527-0112</p>
            </div>
          </div>
        </div>
        
        <div class="d-flex flex-column flex-lg-row gap-3 mt-3 mt-md-4 mt-lg-3">
          <p class="text-center text-lg-start ">E-Mail&nbsp; :&nbsp; dwenc01@hanmail.net</p>
          <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
          <p class="text-center text-lg-start">주소&nbsp; :&nbsp; 34705, 대전광역시 동구 산내로 1305번길 61, 2층(낭월동)</p>
          <div class="vr align-self-center opacity-100 d-none d-lg-block " ></div>
          <p class="text-center text-lg-start">Copyright© DONGWONEnC. All Rights Reserved. Designed by KOWEB.</p>
        </div>
      </div>
      <!-- <div class="col-lg-2">
        <div class="d-flex justify-content-center justify-content-lg-end gap-2 mt-4 mt-lg-0">
          <a href="#"><img src="./images/footer-icon-youtube.png" class="img-fluid" alt=""></a>
          <a href="#"><img src="./images/footer-icon-instagram.png" class="img-fluid" alt=""></a>
          <a href="#"><img src="./images/footer-icon-facebook.png" class="img-fluid" alt=""></a>
          <a href="#"><img src="./images/footer-icon-twitter.png" class="img-fluid" alt=""></a>
        </div> -->
        <!-- <select class="form-select mt-4 mt-lg-3 w-auto mx-auto me-lg-0" aria-label="family-site" data-bs-theme="dark">
          <option value="패밀리 사이트" selected>패밀리 사이트</option>
          <option value="패밀리 사이트 2" selected>패밀리 사이트 2.0</option>
          <option value="패밀리 사이트 3" selected>패밀리 사이트 3.0</option>
        </select> -->
      </div>
    </div>
  </div>
</footer>


<script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- lenis - studio freight -->
<script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>

  <!-- Bootsrap v5.3.2 js-bundle -->
  <script src="./js/bootstrap.bundle.js"></script>

  <!-- aos v.2  -->
  <script src="./js/aos.js"></script>

  <!-- chart js  -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Splide 4.1.3 -->
  <script src="js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

  <!-- Swiper JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/design.js"></script>
  <script>

    var today = new Date();

    var oneWeekFromToday = new Date();
    oneWeekFromToday.setDate(oneWeekFromToday.getDate() + 7);

    var timeDifference = oneWeekFromToday.getTime() - today.getTime();
    var weekDifference = Math.floor(timeDifference / (1000 * 3600 * 24 * 7));


    var smpData = [];
    var recData = []; 

    // var dataRec =  <?php echo $jsonData2;?>;
    // var dataSmp =  <?php echo $jsonData1;?>;
    var dataRec =  [{"clsPrc":76800,"bzDd":"20240109","jejuOrdCnt":32,"landOrdCnt":3255,"landAvgPrc":77964,"landHgPrc":79000,"landLwlmtPrc":68400,"jejuLwlmtPrc":68400,"jejuAvgPrc":67782,"jejuHgPrc":85000,"rn":661},{"clsPrc":77000,"bzDd":"20240111","jejuOrdCnt":14,"landOrdCnt":2847,"landAvgPrc":78287,"landHgPrc":79000,"landLwlmtPrc":69200,"jejuLwlmtPrc":69200,"jejuAvgPrc":62958,"jejuHgPrc":85800,"rn":662},{"clsPrc":78000,"bzDd":"20240116","jejuOrdCnt":12,"landOrdCnt":3205,"landAvgPrc":79167,"landHgPrc":79900,"landLwlmtPrc":69300,"jejuLwlmtPrc":69300,"jejuAvgPrc":63496,"jejuHgPrc":76500,"rn":663},{"clsPrc":77700,"bzDd":"20240118","jejuOrdCnt":26,"landOrdCnt":3595,"landAvgPrc":79692,"landHgPrc":80000,"landLwlmtPrc":70200,"jejuLwlmtPrc":70200,"jejuAvgPrc":65724,"jejuHgPrc":86800,"rn":664},{"clsPrc":78500,"bzDd":"20240123","jejuOrdCnt":37,"landOrdCnt":3458,"landAvgPrc":79185,"landHgPrc":79800,"landLwlmtPrc":70000,"jejuLwlmtPrc":70000,"jejuAvgPrc":62038,"jejuHgPrc":84100,"rn":665},{"clsPrc":77600,"bzDd":"20240125","jejuOrdCnt":11,"landOrdCnt":2195,"landAvgPrc":78494,"landHgPrc":79000,"landLwlmtPrc":70700,"jejuLwlmtPrc":70700,"jejuAvgPrc":64260,"jejuHgPrc":68200,"rn":666},{"clsPrc":77900,"bzDd":"20240130","jejuOrdCnt":26,"landOrdCnt":6625,"landAvgPrc":78164,"landHgPrc":79500,"landLwlmtPrc":69900,"jejuLwlmtPrc":69900,"jejuAvgPrc":64972,"jejuHgPrc":75200,"rn":667},{"clsPrc":77400,"bzDd":"20240201","jejuOrdCnt":30,"landOrdCnt":4674,"landAvgPrc":78498,"landHgPrc":79300,"landLwlmtPrc":70200,"jejuLwlmtPrc":70200,"jejuAvgPrc":71899,"jejuHgPrc":83300,"rn":668},{"clsPrc":78100,"bzDd":"20240206","jejuOrdCnt":39,"landOrdCnt":4118,"landAvgPrc":78747,"landHgPrc":79500,"landLwlmtPrc":69700,"jejuLwlmtPrc":69700,"jejuAvgPrc":71593,"jejuHgPrc":81500,"rn":669}];
    var dataSmp =  [{"tradeDay":"20240208","tradeHour":0,"areaCd":1,"smp":96.71},{"tradeDay":"20240208","tradeHour":1,"areaCd":1,"smp":95.77},{"tradeDay":"20240208","tradeHour":2,"areaCd":1,"smp":86.09},{"tradeDay":"20240208","tradeHour":3,"areaCd":1,"smp":79.93},{"tradeDay":"20240208","tradeHour":4,"areaCd":1,"smp":79.93},{"tradeDay":"20240208","tradeHour":5,"areaCd":1,"smp":86.34},{"tradeDay":"20240208","tradeHour":6,"areaCd":1,"smp":92.34},{"tradeDay":"20240208","tradeHour":7,"areaCd":1,"smp":96.58},{"tradeDay":"20240208","tradeHour":8,"areaCd":1,"smp":139.29},{"tradeDay":"20240208","tradeHour":9,"areaCd":1,"smp":167.09},{"tradeDay":"20240208","tradeHour":10,"areaCd":1,"smp":139.48},{"tradeDay":"20240208","tradeHour":11,"areaCd":1,"smp":118.3},{"tradeDay":"20240208","tradeHour":12,"areaCd":1,"smp":108.9},{"tradeDay":"20240208","tradeHour":13,"areaCd":1,"smp":120.04},{"tradeDay":"20240208","tradeHour":14,"areaCd":1,"smp":120.39},{"tradeDay":"20240208","tradeHour":15,"areaCd":1,"smp":108.35},{"tradeDay":"20240208","tradeHour":16,"areaCd":1,"smp":108.35},{"tradeDay":"20240208","tradeHour":17,"areaCd":1,"smp":101.78},{"tradeDay":"20240208","tradeHour":18,"areaCd":1,"smp":101.78},{"tradeDay":"20240208","tradeHour":19,"areaCd":1,"smp":93.52},{"tradeDay":"20240208","tradeHour":20,"areaCd":1,"smp":93.08},{"tradeDay":"20240208","tradeHour":21,"areaCd":1,"smp":92.52},{"tradeDay":"20240208","tradeHour":22,"areaCd":1,"smp":92.54},{"tradeDay":"20240208","tradeHour":23,"areaCd":1,"smp":92.34}];

    localStorage.setItem('dataRec', JSON.stringify(dataRec));
    localStorage.setItem('dataSmp', JSON.stringify(dataSmp));
    var labels = []; 

    for (var i = 0; i <= 7; i++) {
        var date = new Date();
        date.setDate(date.getDate() + i);
        var dateString = date.toLocaleDateString("kor", { weekday: 'short', month: 'short', day: 'numeric' });
        labels.push(dateString);
    }

    dataRec.forEach(function(item) {
        recData.push(parseFloat((item.clsPrc / 1000).toFixed(1)));

    });

    dataSmp.forEach(function(item) {
        smpData.push(item.smp);
    });

    var smpValue = dataSmp[0].smp;
    var smpDateValueJson = dataSmp[0].tradeDay;
    var formattedDate = smpDateValueJson.slice(0, 4) + "." + smpDateValueJson.slice(4, 6) + "." + smpDateValueJson.slice(6, 8);
    smpDateValue = formattedDate;

    document.getElementById('smpPrice').innerHTML = smpValue;
    document.getElementById('smpDate').innerHTML = smpDateValue;

    var recValue = parseFloat((dataRec[0].clsPrc / 1000).toFixed(1));
    var recDateValueJson = dataRec[dataRec.length - 1].bzDd;
    var formattedDate = recDateValueJson.slice(0, 4) + "." + recDateValueJson.slice(4, 6) + "." + recDateValueJson.slice(6, 8);
    recDateValue = formattedDate;

    document.getElementById('recPrice').innerHTML = recValue;
    document.getElementById('recDate').innerHTML = recDateValue;

    function updateText(selectedOption) {
        var smpValue, smpDateValue, recValue, recDateValue;
        switch (selectedOption) {
            case 'land':
                smpValue = dataSmp[0].smp; 
                var smpDateValueJson =  dataSmp[0].tradeDay; 
                var formattedDate1 = smpDateValueJson.slice(0, 4) + "." + smpDateValueJson.slice(4, 6) + "." + smpDateValueJson.slice(6, 8);
                smpDateValue = formattedDate1;
                recValue = parseFloat((dataRec[0].clsPrc / 1000).toFixed(1)); 
                recDateValueJson =  dataRec[dataRec.length - 1].bzDd; 
                var formattedDate2 = recDateValueJson.slice(0, 4) + "." + recDateValueJson.slice(4, 6) + "." + recDateValueJson.slice(6, 8);
                recDateValue = formattedDate2;
                break;
            case 'jeju':
                var response = fetchDataFromAPIJeju();
                smpValue = response[10]; 
                var smpDateValueJson = dataSmp[10].tradeDay; 
                var formattedDate1 = smpDateValueJson.slice(0, 4) + "." + smpDateValueJson.slice(4, 6) + "." + smpDateValueJson.slice(6, 8);
                smpDateValue = formattedDate1; 
                var getRecJeju = jejuData.map(item => parseFloat((item.jejuHgPrc / 1000).toFixed(1)));
                recValue = getRecJeju[0];
                recDateValueJson = dataRec[dataRec.length - 1].bzDd;
                var formattedDate2 = recDateValueJson.slice(0, 4) + "." + recDateValueJson.slice(4, 6) + "." + recDateValueJson.slice(6, 8);
                recDateValue = formattedDate2;
                break;
            default:
                
                smpValue = dataSmp[0].smp; 
                smpDateValueJson =  dataSmp[0].tradeDay;
                var formattedDate1 = smpDateValueJson.slice(0, 4) + "." + smpDateValueJson.slice(4, 6) + "." + smpDateValueJson.slice(6, 8);
                smpDateValue = formattedDate1;
                recValue = parseFloat((dataRec[0].clsPrc / 1000).toFixed(1)); 
                recDateValueJson =  dataRec[dataRec.length - 1].bzDd;
                var formattedDate2 = recDateValueJson.slice(0, 4) + "." + recDateValueJson.slice(4, 6) + "." + recDateValueJson.slice(6, 8);
                recDateValue = formattedDate2;
                break;
        }

        document.getElementById('smpPrice').innerText = smpValue;
        document.getElementById('smpDate').innerText = smpDateValue;
        document.getElementById('recPrice').innerText = recValue;
        document.getElementById('recDate').innerText = recDateValue;
    }

    var jejuData = [];
    var landData = [];

    var jejuSmpData = [];

    dataRec.forEach(function(item) {
        var jejuItem = {};
        var landItem = {};

        Object.keys(item).forEach(function(key) {
            if (key.startsWith('jeju')) {
                jejuItem[key] = item[key];
            } else if (key.startsWith('land')) {
                landItem[key] = item[key];
            }
        });

        jejuData.push(jejuItem);
        landData.push(landItem);
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'SMP',
                data: smpData,
                backgroundColor: 'rgba(163, 192, 142, 0.5)',
                borderColor: "#A3C08E",
                fill: true,
                tension: 0.2
            }, {
                label: 'REC',
                data: recData,
                backgroundColor: 'rgba(107, 174, 226, 0.5)',
                borderColor: "#6BAEE2",
                fill: true,
                tension: 0.2
            },{
                label: 'SMP+REC',
                data: [120,90,80,70,90, 80, 120, 100],
                backgroundColor: 'rgba(249, 140, 129, 0.5)',
                borderColor: "#F98C81",
                fill: true,
                tension: 0.2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    function updateChart(selectedOption) {
        var newSmpData;
        var newRecData;
        var labelRec;
        var labelSmp;

        switch (selectedOption) {
            case 'land':
                newSmpData = smpData;
                newRecData = landData.map(item => parseFloat((item.landHgPrc / 1000).toFixed(1)));
                labelRec = 'REC 육지';
                labelSmp = 'SMP 육지';
                break;
            case 'jeju':
                labelRec = 'REC 제주';
                labelSmp = 'SMP 제주';
                newRecData = jejuData.map(item => parseFloat((item.jejuHgPrc / 1000).toFixed(1)));
                var response = fetchDataFromAPIJeju();
                newSmpData = response;
                break;
            default:
                newSmpData = smpData;
                newRecData = recData;
                labelRec = 'REC';
                labelSmp = 'SMP';
        }

        updateChartDatasets(newSmpData, newRecData, labelSmp, labelRec);
    }

    function updateChartDatasets(newSmpData, newRecData, labelSmp, labelRec) {
        myChart.data.datasets[0].data = newSmpData;
        myChart.data.datasets[0].label = labelSmp;

        myChart.data.datasets[1].data = newRecData;
        myChart.data.datasets[1].label = labelRec;

        myChart.update();
    }

    function updateRecInformation(newData) {
        var recDateElement = document.getElementById('recDate');
        var recPriceElement = document.getElementById('recPrice');
        var currentDate = new Date();
        var currentDateString = currentDate.toLocaleDateString("kor", { weekday: 'short' });
        recDateElement.textContent = currentDateString;
        var newPriceValue = newData;
        recPriceElement.textContent = newPriceValue;
    }

    function fetchDataFromAPIJeju() {
        var cachedData = {
            "data": "[{\"tradeDay\":\"20240208\",\"tradeHour\":0,\"areaCd\":9,\"smp\":96.71},{\"tradeDay\":\"20240208\",\"tradeHour\":1,\"areaCd\":9,\"smp\":95.77},{\"tradeDay\":\"20240208\",\"tradeHour\":2,\"areaCd\":9,\"smp\":86.09},{\"tradeDay\":\"20240208\",\"tradeHour\":3,\"areaCd\":9,\"smp\":79.93},{\"tradeDay\":\"20240208\",\"tradeHour\":4,\"areaCd\":9,\"smp\":79.93},{\"tradeDay\":\"20240208\",\"tradeHour\":5,\"areaCd\":9,\"smp\":86.34},{\"tradeDay\":\"20240208\",\"tradeHour\":6,\"areaCd\":9,\"smp\":92.34},{\"tradeDay\":\"20240208\",\"tradeHour\":7,\"areaCd\":9,\"smp\":96.58},{\"tradeDay\":\"20240208\",\"tradeHour\":8,\"areaCd\":9,\"smp\":139.29},{\"tradeDay\":\"20240208\",\"tradeHour\":9,\"areaCd\":9,\"smp\":160.48},{\"tradeDay\":\"20240208\",\"tradeHour\":10,\"areaCd\":9,\"smp\":139.48},{\"tradeDay\":\"20240208\",\"tradeHour\":11,\"areaCd\":9,\"smp\":118.3},{\"tradeDay\":\"20240208\",\"tradeHour\":12,\"areaCd\":9,\"smp\":108.9},{\"tradeDay\":\"20240208\",\"tradeHour\":13,\"areaCd\":9,\"smp\":120.04},{\"tradeDay\":\"20240208\",\"tradeHour\":14,\"areaCd\":9,\"smp\":120.39},{\"tradeDay\":\"20240208\",\"tradeHour\":15,\"areaCd\":9,\"smp\":108.35},{\"tradeDay\":\"20240208\",\"tradeHour\":16,\"areaCd\":9,\"smp\":108.35},{\"tradeDay\":\"20240208\",\"tradeHour\":17,\"areaCd\":9,\"smp\":101.78},{\"tradeDay\":\"20240208\",\"tradeHour\":18,\"areaCd\":9,\"smp\":177.27},{\"tradeDay\":\"20240208\",\"tradeHour\":19,\"areaCd\":9,\"smp\":174.78},{\"tradeDay\":\"20240208\",\"tradeHour\":20,\"areaCd\":9,\"smp\":161.47},{\"tradeDay\":\"20240208\",\"tradeHour\":21,\"areaCd\":9,\"smp\":92.52},{\"tradeDay\":\"20240208\",\"tradeHour\":22,\"areaCd\":9,\"smp\":92.54},{\"tradeDay\":\"20240208\",\"tradeHour\":23,\"areaCd\":9,\"smp\":92.34}]"
        };

        if (cachedData) {
            localStorage.setItem('dataSmpJeju', cachedData.data); 
            var smpDataArray = JSON.parse(cachedData.data); 
            var jejuSmpData = smpDataArray.map(item => item.smp);
            return jejuSmpData;
        } else {
            $.ajax({
                url: '<?php echo $_SERVER['PHP_SELF']; ?>',
                method: 'POST',
                data: { 
                    action: 'fetchDataFromAPIJeju',
                    url: 'https://openapi.kpx.or.kr/openapi/smp1hToday/getSmp1hToday?serviceKey=/3cTiA0/4RUv74qiwY4aZMKQQYUJFHtMC8uSh4bUc3mV2e9plDS3AXfcFlOOE1JpQgm0VCYRLovBnScnqMtdAA==&areaCd=9',
                    itemCallback: 'processFirstAPIItem'
                },
                success: function(response) {
                    console.log(response);

                    var jsonData = response;
                    localStorage.setItem('dataSmpJeju', JSON.stringify(jsonData));
                    if (jsonData && jsonData.data) {
                        var smpDataArray = JSON.parse(jsonData.data);
                        var jejuSmpData = smpDataArray.map(item => item.smp);
                        return jejuSmpData;
                    } else {
                        console.log('Invalid or missing data in the response:', cachedData);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    }

    document.getElementById('datasetSelect').addEventListener('change', function(event) {
        var selectedOption = event.target.value;
        updateChart(selectedOption);
        updateText(selectedOption);
    });

    </script>
</body>
</html>