<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>創建活動</title>

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
                </li>
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
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">創建活動</h2>
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
    <form id="activity-form">
        <label for="creator-name">創建者姓名：</label>
        <input type="text" id="creator-name" name="creator-name" required><br>

        <label for="activity-name">活動名稱：</label>
        <input type="text" id="activity-name" name="activity-name" required><br>
        
        <label for="activity-address">活動地址：</label>
        <input type="text" id="activity-address" name="activity-address" required><br>

        <label>活動性質：</label>
        <div class="radio-group">
            <input type="radio" id="handcraft" name="activity-type" value="手工">
            <label for="handcraft">手工</label>
        </div>

        <!-- 自訂活動性質 -->
        <div class="custom-radio-input">
            <input type="text" id="custom-activity" placeholder="自訂活動性質">
            <button type="button" id="add-custom-radio">新增</button>
        </div>

        <label for="num-attendees">預計參加人數：</label>
        <input type="number" id="num-attendees" name="num-attendees" required><br>

        <label for="activity-date">活動日期：</label>
        <input type="date" id="activity-date" name="activity-date" required><br>

        <label for="start-time">活動開始時間：</label>
        <input type="time" id="start-time" name="start-time" required><br>

        <label for="end-time">活動結束時間：</label>
        <input type="time" id="end-time" name="end-time" required><br>

        <label for="activity-fee">活動費用：</label>
        <input type="text" id="activity-fee" name="activity-fee" placeholder="請輸入費用"><br>

        <input type="submit" value="創建活動">
    </form>

    <script>
        document.getElementById('add-custom-radio').addEventListener('click', function () {
            var customActivity = document.getElementById('custom-activity').value;
            if (customActivity) {
                var customRadio = document.createElement('input');
                customRadio.type = 'radio';
                customRadio.name = 'activity-type';
                customRadio.value = customActivity;
                customRadio.id = customActivity;

                var customLabel = document.createElement('label');
                customLabel.htmlFor = customActivity;
                customLabel.appendChild(document.createTextNode(customActivity));

                var customRadioGroup = document.querySelector('.radio-group');
                customRadioGroup.appendChild(customRadio);
                customRadioGroup.appendChild(customLabel);

                document.getElementById('custom-activity').value = '';
            }
        });
    </script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $creatorName = $_POST["creator-name"];
    $activityName = $_POST["activity-name"];
    $activityAddress = $_POST["activity-address"];
    $activityType = isset($_POST["activity-type"]) ? $_POST["activity-type"] : "";
    $customActivityType = isset($_POST["custom-activity"]) ? $_POST["custom-activity"] : "";
    $numAttendees = $_POST["num-attendees"];
    $activityDate = $_POST["activity-date"];
    $startTime = $_POST["start-time"];
    $endTime = $_POST["end-time"];
    $activityFee = $_POST["activity-fee"];

    // 进行基本的数据验证
    if (empty($creatorName) || empty($activityName) || empty($activityAddress) || empty($numAttendees) || empty($activityDate) || empty($startTime) || empty($endTime)) {
        echo "必填字段不能空白，請填寫完整的資料。";
    } else {
        // 连接到数据库
        $dbHost = "your_db_host"; // 替换为你的数据库主机名
        $dbUser = "your_db_user"; // 替换为你的数据库用户名
        $dbPass = "your_db_password"; // 替换为你的数据库密码
        $dbName = "your_db_name"; // 替换为你的数据库名

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        // 检查连接是否成功
        if ($conn->connect_error) {
            die("數據庫連接失敗：" . $conn->connect_error);
        }

        // 准备SQL语句
        $sql = "INSERT INTO activities (creator_name, activity_name, activity_address, activity_type, num_attendees, activity_date, start_time, end_time, activity_fee) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        // 使用预处理语句
        $stmt = $conn->prepare($sql);

        // 绑定参数
        $stmt->bind_param("sssiisss", $creatorName , $activityName, $activityAddress, $activityType, $numAttendees, $activityDate, $startTime, $endTime, $activityFee);

        // 执行SQL语句
        if ($stmt->execute()) {
            echo "活動創建成功！";
        } else {
            echo "活動創建失敗：" . $conn->error;
        }

        // 关闭预处理语句和数据库连接
        $stmt->close();
        $conn->close();
    }
}
?>



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
