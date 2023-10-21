<?php
// 包含数据库连接文件
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单提交的数据
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];

    // 更新数据库中的个人资料
    $sql = "UPDATE your_table_name SET 
            name='$name', 
            age='$age', 
            address='$address', 
            email='$email', 
            phone='$phone', 
            interest='$interest'
            WHERE user_id=1"; // 假设您的用户ID是1

    if ($conn->query($sql) === TRUE) {
        echo "個人資料已成功更新";
    } else {
        echo "錯誤: " . $sql . "<br>" . $conn->error;
    }
}

// 关闭数据库连接
$conn->close();
?>
