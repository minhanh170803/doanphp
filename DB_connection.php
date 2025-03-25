<?php
$sName = "localhost";  // Địa chỉ máy chủ MySQL
$uName = "root";       // Tên đăng nhập MySQL
$pass  = "Title123";       // Mật khẩu MySQL
$db_name = "phpdb";    // Tên cơ sở dữ liệu
$port = "3306";        // Cổng MySQL (3307 theo yêu cầu)



try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name;port=$port", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
	exit;
}