<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activityName = $_POST['activityName'];
    $creatorName = $_POST['creatorName'];
    $activityAddress = $_POST['activityAddress'];
    $activityDate = $_POST['activityDate'];
    $startTime = $_POST['startTime'];

    // 连接到数据库
    $dbHost = 'your_database_host';
    $dbUser = 'your_username';
    $dbPass = 'your_password';
    $dbName = 'your_database_name';

    $db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }

    // 将活动属性插入数据库
    $stmt = $db->prepare('INSERT INTO activities (activity_name, creator_name, activity_address, activity_date, start_time) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sssss', $activityName, $creatorName, $activityAddress, $activityDate, $startTime);

    if ($stmt->execute()) {
        echo '活動已紀錄！';
    } else {
        echo '錯誤：無法紀錄活動。';
    }

    $stmt->close();
    $db->close();
}
?>
