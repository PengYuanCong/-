<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>註冊會員</title>

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
        body {
            background-image: url('your-background-image.jpg'); /* 替換 'your-background-image.jpg' 為您的背景圖片檔案路徑 */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
        }

        .navbar {
            background-color: #000000;
            color: #fff;
            padding: 10px 0;
            width: 100%;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        h1 {
            color: #333;
        }

        #activity-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .radio-group {
            margin: 5px 0;
        }

        .radio-group label {
            display: inline-block;
            width: 70px;
        }

        .radio-group input[type="radio"] {
            display: inline-block;
        }

        .custom-radio-input {
            display: inline-block;
            margin-top: 5px;
        }

        .custom-radio-input input[type="text"] {
            width: 60%;
            display: inline-block;
        }

        .custom-radio-input button {
            display: inline-block;
            width: 30%;
            padding: 5px 10px;
            margin-left: 10px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

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


        .register-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
          }
    
          .register-box h1 {
            text-align: center;
            color: #333;
          }
    
          .register-box label {
            display: block;
            margin: 10px 0;
          }
    
          .register-box input[type="text"],
          .register-box input[type="password"] {
            width: 30%;
            padding: 0px; /* 调整输入框的内边距 */
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    
          .register-box input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 5px 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
          }
        </style>
  </head>
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">
                    登出
                  </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="onepage-nav mobile-menu">
          <li>
            <a href="#home">個人首頁</a>
          </li>
          <li>
            <a href="#about">關於</a>
          </li>
          <li>
            <a href="#resume">經歷</a>
          </li>
          <li>
            <a href="#portfolio">照片</a>
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
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">註冊會員</h2>
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

    <!-- Portfolio Section Ends -->
    <div class="register-box">
        <h1>會員註冊</h1>
        <form id="register-form" action="register.php" method="post">
            <label for="username">名稱</label>
            <input type="text" name="username" id="username" /><br>
            <label for="useremail">信箱</label>
            <input type="email" name="useremail" id="useremail" /><br>
            <label for="userpassword">密碼</label>
            <input type="password" name="userpassword" id="userpassword" /><br>
            <?php
            // 檢查欄位是否空白
            if(isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['userpassword'])){
                $name = $_POST['username'];
                $email = $_POST['useremail'];
                $password = $_POST['userpassword'];

                // 連接資料庫
                $conn = mysqli_connect('localhost','root','','');
                if(!$conn){
                    die('Could not connect: '.mysqli_connect_error());
                }

                // 尋找是否有相同名字的用戶和信箱
                $sql = 'select * from Users where Username="'.$name.'" or Email="'.$email.'";';
                $result = mysqli_query($conn, $sql);
                if(!$result){
                    die('Error: '.mysqli_error($conn));
                }

                $rows = mysqli_fetch_assoc($result);
                if(!$rows){
                    // 新增使用者
                    $sql = "Insert into Users (Username, Email, Password, date) values('".$name."','".$email."','".$password."','".date("Y-m-d")."');";
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die('Error: '.mysqli_error($conn));
                    }

                    header('location:login.php');
                    exit();
                }
                else{
                    echo '<p style="color: red">註冊失敗，請再試一次</p><br>';
                }
            }

            ?>
            <p>已經有帳戶？ <a href="./login.php" style="display: inline">登入</a></p>
            <input type="submit" id="register" name="register" value="註冊" />
        </form>
    </div>

    <!-- Counter Area End-->

    <!-- Contact Section Start -->

    <!-- Contact Section End -->

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