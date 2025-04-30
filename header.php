<header>
  <nav id="navbar" class="navbar navbar-expand-lg shadow fixed-top bg-nav-transparant">
    <div class="container-fluid justify-content-between px-3 px-lg-5">
      <a id="logo-white" class="navbar-brand " href="./index.php">
        <img src="./images/navbar-logo-white.png" alt="Dongwon-logo" height="50">
      </a>
      <a id="logo-color" class="navbar-brand" href="./index.php">
        <img src="./images/navbar-logo-color.png" alt="Dongwon-logo" height="50">
      </a>
      <button class="navbar-toggler focus-ring focus-ring-light border-white my-2 mx-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#mobileNavbarToggler" aria-controls="mobileNavbarToggler" aria-expanded="false"
        aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i id="humburger-icon" class="ri-menu-line mobile-toggle-white"></i>
      </button>

      <div class="collapse navbar-collapse px-3 px-lg-0 pb-4 pb-lg-0 mobile-collapse-bg-dark" id="mobileNavbarToggler">

        <ul class="navbar-nav mt-4 mt-lg-0 ms-auto me-auto mb-2 mb-lg-0 gap-4">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">회사소개</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./about-us_01greetings.php">인사말</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./about-us_02history.php">회사연혁도</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./about-us_03org-cart.php">조직도</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./about-us_04cert.php">보유인증서</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./about-us_05corp-trend.php">기업동향</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./about-us_06direction.php">찾아오시는&nbsp;길</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="./business_01product.php">사업영역</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">시공사례</a>
            <ul  class="dropdown-menu">
              <li><a class="dropdown-item" href="./construction_01land.php">토지</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./construction_02building.php">건물 태양광</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">컨설팅/견적문의</a>
            <ul  class="dropdown-menu">
              <li><a class="dropdown-item" href="./inquiry_01inquiryform.php">컨설팅/견적문의</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./inquiry_02introduction_item.php">제품소개</a></li>
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link text-white" href="./inquiry_01inquiryform.php">컨설팅/견적문의</a>
          </li> -->


          <li class="nav-item">
            <a class="nav-link text-white" href="./solar-power_blog.php">태양광발전 바로알기</a>
          </li>

        </ul>

        <div class="d-flex flex-column flex-lg-row justify-content-between justify-content-lg-start  align-items-center mt-4 mt-lg-0">
          <div class="dropdown select-lang">
            <a id="btn-lang" class="btn btn-outline-light text-white btn-lang-transparant dropdown-toggle" href="#"
              role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./images/icon-world_select-lang.svg" id="icon-lang-white" class="d-inline-block " width="14" height="14"
                alt="">
              <img src="./images/icon-world_select-lang-black.svg" id="icon-lang-black" class="d-none" width="14" height="14"
                alt=""> KOR
            </a>
        
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">KOR</a></li>
              <li><a class="dropdown-item" href="#">ENG</a></li>
            </ul>
          </div>
          <a href="#" id="btn-manager" class="btn btn-outline-light  mt-3 mt-lg-0 d-flex justify-content-center align-items-center text-white">
            <i class="ri-login-box-line"></i>&nbsp;
            <p class="mb-0">관리자</p>
          </a>
          <a href="#" id="btn-menu-offcanvas" class="d-none d-lg-block btn btn-outline-light text-white"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"><i
              class="ri-menu-3-line"></i></a>
        
        </div>
      </div>
    </div>
  </nav>


  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-body">
      <div class="w-75 mt-4">
        <img src="./images/navbar-logo-color.png" class="img-fluid " alt="">
      </div>

      <ul class="nav flex-column mt-4">
        <li class="nav-item">
          <a class="nav-link text" href="./about-us_01greetings.php">회사소개</a>
          <ul>
            <li>
              <a class="nav-link" href="./about-us_01greetings.php">인사말</a>
            </li>
            <li>
              <a class="nav-link" href="./about-us_02history.php">회사연혁도</a>
            </li>
            <li>
              <a class="nav-link" href="./about-us_03org-cart.php">조직도</a>
            </li>
            <li>
              <a class="nav-link" href="./about-us_04cert.php">보유인증서</a>
            </li>
            <li>
              <a class="nav-link" href="./about-us_05corp-trend.php">보유인증서</a>
            </li>
            <li>
              <a class="nav-link" href="./about-us_06direction.php">찾아오시는 길</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./business_01product.php">사업영역</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./construction_01land.php">시공사례</a>
          <ul>
            <li>
              <a class="nav-link" href="./construction_01land.php">토지</a>
            </li>
            <li>
              <a class="nav-link" href="./construction_02building.php">건물 태양광</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./inquiry_01inquiryform.php">컨설팅/견적문의</a>
          <ul>
            <li>
              <a class="nav-link" href="./inquiry_01inquiryform.php">컨설팅/견적문의</a>
            </li>
            <li>
              <a class="nav-link" href="./inquiry_02introduction_item.php">제품소개</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./solar-power_blog.php">컨설팅/견적문의</a>
        </li>
      </ul>

    </div>
  </div>
</header>