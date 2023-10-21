<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>個人頁面</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <style>
    footer {
        background-color: #95AEB0; /* 底部背景顏色，可以根據你的設計做調整 */
        color: #fff; /* 文本顏色 */
        padding: 20px; /* 使 footer 內容稍微偏離底部 */
        }

        .icon-container {
        text-align: center; /* 讓 icon 在容器中水平居中 */
        }

        .icon-container img {
            width: 30px; /* 調整圖片的寬度，根據需要做調整 */
            height: 30px; /* 調整圖片的高度，根據需要做調整 */
            margin: 0 10px; /* 調整圖片之間的間距 */
        }

        .icon-container p {
        margin-top: 20px; /* 調整文字上方的間距 */
        text-align: center; /* 讓文字水平居中 */
        font-style: italic;
        color: yellow;
        }
      </style>
      
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <body>

      <!-- Header Area wrapper Starts -->
      <header id="header-wrap">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class "icon-menu"></span>
              </button>
              <a href="index.html" class="navbar-brand"><img src="img/gathering.jpg" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
              <ul class="onepage-nav navbar-nav mr-auto w-100 justify-content-end clearfix">
                <li class="nav-item active">
                  <a class="nav-link" href="profile.php">
                    個人首頁
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="favorite.php">
                    有興趣的活動
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="history.php">
                    參加過的活動
                  </a>
                  <li class="nav-item">
                  <a class="nav-link" href="establish.php">
                    創建活動
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">
                    登出
                  </a>
                </li>
              </ul>
            </div>
  
          <!-- Mobile Menu Start -->
          <ul class="onepage-nav mobile-menu">
            <li>
              <a href="profile.php">個人首頁</a>
            </li>
            <li>
              <a href="favorite.php">有興趣的活動</a>
            </li>
            <li>
              <a href="history.php">參加過的活動</a>
            </li>
            <li>
              <a href="logout.php">登出</a>
            </li>
          </ul>
          <!-- Mobile Menu End -->
        </nav>
        <!-- Navbar End -->
  
        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 text-center">
                <div class="contents">
                  <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">歡迎來到</h5>
                  <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">個人資料</h2>
                  <p class="script-font wow fadeInUp" data-wow-delay="0.6s">讓我們陪伴你每一趟旅行</p>
                  <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="assets/img/about/about-1.jpg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>哈囉~</h3>
              <p>123</p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> 姓名 </span> <span class="pro-detail">Tom Saulnier</span></li>
                  <li><span class="pro-title"> 年齡 </span> <span class="pro-detail">25 Years</span></li>
                  <li><span class="pro-title"> 地址 </span> <span class="pro-detail">San Francisco, CA</span></li>
                  <li><span class="pro-title"> e-mail </span> <span class="pro-detail">email@example.com</span></li>
                  <li><span class="pro-title"> 電話 </span> <span class="pro-detail">+ (00) 123 456 789</span></li>
                  <li><span class="pro-title"> 興趣 </span> <span class="pro-detail">玩電腦</span></li>                   
                </ul>
              </div>
              <a href="modify.php" class="btn btn-common"><i class="icon-paper-clip"></i> 修改资料</a>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->



    <!-- Footer Section Start -->
    <footer>
        <div class="icon-container">
            <img src="img/高大.jpg" alt="Icon 1">
            <p>美好的一天，從你我出門旅遊開始</p>
            <!-- 添加更多 icon 如有需要 -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
      
  </body>
</html>
