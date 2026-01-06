<?php
$host = "your_host_here"; // سنقوم بتغييره لاحقاً
$user = "your_user_here";
$pass = "your_password_here";
$db   = "your_db_name_here";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

// ضبط اللغة للعربية
mysqli_set_charset($conn, "utf8mb4");
?>
